<?php
/**
 * Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.
 */

function my_str_replace($str)
{
  $arrWord = explode(' ', $str);
  $combineStr = '';
  foreach ($arrWord as $key => $word) {
    if ($key === 0) {
      $combineStr .= $word;
    } else {
      $combineStr .= '_' . $word;
    }
  }
  return $combineStr;
}

echo my_str_replace('Lorem ipsum dolor sit.q');