<?php

$link = mysqli_connect('localhost', 'root', '', 'geek_brains_php1') or die(mysqli_error($link));

$idImg = (int)$_GET["img"];
$select = "SELECT * FROM IMG WHERE id = $idImg";
$res = mysqli_query($link, $select) or die(mysqli_error($link));
$image = mysqli_fetch_assoc($res);
$count = ++$image['count'];
$update = "UPDATE img SET count = $count WHERE id = $idImg";
mysqli_query($link, $update) or die(mysqli_error($link));

?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
</head>
<body>
<p>
<h3><?= $image["title"] ?></h3>
</p>
<img src="images/max/<?= $image["link"] ?>" alt="<?= $image["title"] ?>">
<p>
<h4>Просмотров <?= $image['count'] ?></h4>
</p>
</body>
</html>
