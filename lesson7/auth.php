<?php

if (isset($_POST['login']) && isset($_POST['pass'])) {
  $login = $_POST['login'];
  $pass = md5($_POST['pass']);
  $queryPass = "SELECT * FROM users where login='$login' and pass='$pass'";
  $queryPass = mysqli_query($link, $queryPass);
  $res = mysqli_fetch_assoc($queryPass);
  $_SESSION['login'] = $res['id'];
  $_SESSION['name'] = $res['name'];
}
if (isset($_POST['exit'])) {
  unset($_SESSION['login']);
  unset($_SESSION['name']);
}
?>
<style>
  .title {
    margin: 0;
  }
  .exit {
    margin-left: 10px;
  }
</style>


<?php if (!$_SESSION['name']): ?>
  <form action="" method="post">
    <input type="text" placeholder="login" name="login">
    <input type="password" placeholder="password" name="pass">
    <input type="submit" value="auth">
  </form>
  <a href="register.php">register</a>
<? else: ?>
  <div>
    <h3 class="title">Welcome <?= $_SESSION['name'] ?></h3>
  </div>
  <form action="" method="post">
    <input class="exit" type="submit" value="exit" name="exit">
  </form>
<? endif ?>



