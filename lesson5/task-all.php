<?php
/**
 * Создать галерею изображений, состоящую из двух страниц:
 * просмотр всех фотографий (уменьшенных копий);
 * просмотр конкретной фотографии (изображение оригинального размера) по ее ID в базе данных.
 */
$link = mysqli_connect('localhost', 'root', '', 'geek_brains_php1') or die(mysqli_error($link));
$sql = 'SELECT * FROM IMG ORDER BY count DESC';
$res = mysqli_query($link, $sql) or die(mysqli_error($link));
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Галерея</title>
  <style>

  </style>
</head>

<body>
<div class="galleryPreviewsContainer">
  <? while ($row = mysqli_fetch_assoc($res)): ?>
    <a rel="stylesheet" href="big.php?img=<?= $row["id"] ?>">
      <img src="images/min/<?= $row["link"] ?>" alt="<?= $row["title"] ?>">
    </a>
  <? endwhile ?>
</div>

</body>

</html>
