<?php
/**
 * 1. Создать форму-калькулятор с операциями: сложение, вычитание, умножение, деление.
 * Не забыть обработать деление на ноль! Выбор операции можно осуществлять с помощью тега <select>.
 */

$val1 = $_GET['val1'];
$val2 = $_GET['val2'];
$operator = empty($_GET['operator']) ? $_GET['button'] : $_GET['operator'];

function validate($val1, $val2, $operator)
{
  return
    is_numeric($val1) &&
    is_numeric($val2) &&
    !(($operator === '/') && ($val1 == 0 || $val2 == 0));
}

if (validate($val1, $val2, $operator)) {
  switch ($operator) {
    case '+':
      $result = $val1 + $val2;
      break;
    case '-':
      $result = $val1 - $val2;
      break;
    case '/':
      $result = $val1 / $val2;
      break;
    case '*':
      $result = $val1 * $val2;
      break;
  }
} else {
  $result = 'Данные не верны !';
}

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
<form action="">
  <input type="text" name="val1">
  <select name="operator" id="">
    <option value=""></option>
    <option value="+">+</option>
    <option value="-">-</option>
    <option value="/">/</option>
    <option value="*">*</option>
  </select>
  <button name="button" value="+">+</button>
  <button name="button" value="-">-</button>
  <button name="button" value="/">/</button>
  <button name="button" value="*">*</button>
  <input type="text" name="val2">
  <button>Вычеслить</button>
  <label for=""><?= $result ?></label>
</form>
</body>
</html>
