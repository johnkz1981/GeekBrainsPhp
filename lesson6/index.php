<?php
/**
 * Создать страницу каталога товаров:
 * товары хранятся в БД (структура прилагается);
 * страница формируется автоматически;
 * по клику на товар открывается карточка товара с подробным описанием.
 * подумать, как лучше всего хранить изображения товаров.
 */

include('bd.php');

$res = mysqli_query($link, "SELECT img_max FROM img WHERE id = '$id'");
$row = mysqli_fetch_assoc($res);

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

</body>
</html>
