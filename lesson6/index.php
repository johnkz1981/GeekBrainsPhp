<?php
/**
 * Создать страницу каталога товаров:
 * товары хранятся в БД (структура прилагается);
 * страница формируется автоматически;
 * по клику на товар открывается карточка товара с подробным описанием.
 * подумать, как лучше всего хранить изображения товаров.
 */

include('bd.php');

function console($val)
{
  echo '<script>console.log(' . json_encode($val) . ')</script>';
}

$query = mysqli_query($link, 'SELECT * FROM goods');
$id = !empty($_GET['id']) && is_numeric($_GET['id']) ? (int)$_GET['id'] : 0;
$productQuery = mysqli_query($link, "SELECT * FROM goods where id = $id");
$productRes = mysqli_fetch_assoc($productQuery);
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <style>
    .table {
      display: grid;
      grid-template-columns: repeat(4, 1fr);
      width: 800px;
    }

    .detail {
      display: grid;
      grid-template-columns: repeat(2, 1fr);
      width: 400px;
      margin-top: 50px;
      border: solid 1px orangered;
      padding: 5px;
    }

    .head {
      color: blue;
      font-size: 18px;
      margin-bottom: 5px;
    }

    .detail__column {
      display: flex;
      flex-direction: column;
    }
  </style>
</head>
<body>
<form action="">
  <div class="table">
    <label class="head">Title</label>
    <label class="head">Description</label>
    <label class="head">price</label>
    <label class="head">action</label>
    <? while ($row = mysqli_fetch_assoc($query)) : ?>
      <div><?= $row['good'] ?></div>
      <div><?= $row['description'] ?></div>
      <div><?= $row['price'] ?></div>
      <div>
        <button value="<?= $row['id'] ?>" name="id">get</button>
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
</body>
</html>
