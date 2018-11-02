<?php
/**
 * Создать галерею фотографий. Она должна состоять всего из одной странички,
 * на которой пользователь видит все картинки в уменьшенном виде и форму для загрузки нового изображения.
 * При клике на фотографию она должна открыться в браузере в новой вкладке.
 * Размер картинок можно ограничивать с помощью свойства width.
 * При загрузке изображения необходимо делать проверку на тип и размер файла.
 */

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
<?php
$arrFile = scandir('images/max');
$arrFileFilter = [];
foreach ($arrFile as $file) {
  if (substr($file, -4) === '.jpg') {
    $arrFileFilter[] = $file;
  }
}
shuffle($arrFileFilter);
?>
<div class="galleryPreviewsContainer">
  <?php foreach ($arrFileFilter as $file): ?>
    <a rel="stylesheet" href="images/max/<?= $file ?>">
      <img src="images/min/<?= $file ?>" data-full_image_url="img<?= $file ?>" alt="Картинка <?= $file ?>">
    </a>
  <?php endforeach ?>
</div>

</body>

</html>
