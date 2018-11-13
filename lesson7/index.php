<?php
/**
 * login: john
 * pass: 123
 */
session_start();
include('bd.php');

function console($val)
{
  echo '<script>console.log(' . json_encode($val) . ')</script>';
}

$query = mysqli_query($link, 'SELECT * FROM goods');
$id = !empty($_POST['id']) && is_numeric($_POST['id']) ? (int)$_POST['id'] : 0;
$productQuery = mysqli_query($link, "SELECT * FROM goods where id = $id");
$productRes = mysqli_fetch_assoc($productQuery);

if (isset($_POST['del'])) {
  unset($_SESSION['basket']['good'][$_POST['del']]);
}
if (isset($_POST['add'])) {
  $_SESSION['basket']['good'][$_POST['add']]['count']++;
}
$arrId = '';
$basketSession = $_SESSION['basket']['good'];
foreach ($basketSession as $good_id => $item) {
  if (is_numeric($good_id)) {
    $arrId .= $good_id . ',';
  };
}
$q = substr($arrId, 0, strlen($arrId) - 1);
$queryBasket = mysqli_query($link, "SELECT * FROM goods where id in($q)");

?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="auth">
  <?php include('auth.php') ?>
</div>
<form action="" method="post">
  <div class="table">
    <label class="head">Title</label>
    <label class="head">Description</label>
    <label class="head">price</label>
    <label class="head">view</label>
    <label class="head">add</label>
    <? while ($row = mysqli_fetch_assoc($query)) : ?>
      <div><?= $row['good'] ?></div>
      <div><?= $row['description'] ?></div>
      <div><?= $row['price'] ?></div>
      <div>
        <button value="<?= $row['id'] ?>" name="id">view</button>
      </div>
      <div>
        <button value="<?= $row['id'] ?>" name="add">add</button>
      </div>
    <? endwhile ?>
  </div>
</form>
<div class="detail" <? if (!$id): ?> style="display: none" <? endif ?>>
  <div class="detail__column">
    <label for="">Title</label>
    <label for="">Description</label>
    <label for="">Price</label>
  </div>
  <div class="detail__column">
    <label for=""><?= $productRes['good'] ?></label>
    <label for=""><?= $productRes['description'] ?></label>
    <label for=""><?= $productRes['price'] ?></label>
  </div>
</div>
<hr>
<h2>Basket</h2>
<form action="" method="post">
  <div class="basket">
    <label class="head">Title</label>
    <label class="head">Description</label>
    <label class="head">price</label>
    <label class="head">count</label>
    <label class="head">view</label>
    <label class="head">delete</label>
    <label class="head">add</label>
    <? if($queryBasket): ?>
    <? while ($row = mysqli_fetch_assoc($queryBasket)) : ?>
      <div><?= $row['good'] ?></div>
      <div><?= $row['description'] ?></div>
      <div><?= $row['price'] ?></div>
      <div><?= $basketSession[$row['id']]['count'] ?></div>
      <div>
        <button value="<?= $row['id'] ?>" name="id">view</button>
      </div>
      <div>
        <button value="<?= $row['id'] ?>" name="del">del</button>
      </div>
      <div>
        <button value="<?= $row['id'] ?>" name="add">add</button>
      </div>
    <? endwhile ?>
    <? endif ?>
  </div>
</form>
</body>
</html>
