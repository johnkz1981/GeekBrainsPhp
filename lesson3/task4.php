<?php
/**
 * Объявить массив, индексами которого являются буквы русского языка,
 * а значениями – соответствующие латинские буквосочетания
 * (‘а’=> ’a’, ‘б’ => ‘b’, ‘в’ => ‘v’, ‘г’ => ‘g’, …, ‘э’ => ‘e’, ‘ю’ => ‘yu’, ‘я’ => ‘ya’).
 */

function translit($str)
{
  $letters = [
    'а' => 'a',
    'б' => 'b',
    'в' => 'v',
    'г' => 'g',
    'д' => 'd',
    'е' => 'e',
    'ё' => 'yo',
    'ж' => 'zh',
    'з' => 'z',
    'и' => 'i',
    'й' => 'j',
    'к' => 'k',
    'л' => 'l',
    'м' => 'm',
    'н' => 'n',
    'о' => 'o',
    'п' => 'p',
    'р' => 'r',
    'с' => 's',
    'т' => 't',
    'у' => 'u',
    'ф' => 'f',
    'х' => 'x',
    'ц' => 'cz',
    'ч' => 'ch',
    'ш' => 'sh',
    'щ' => 'shh',
    'ы' => 'y`',
    'э' => 'e`',
    'ю' => 'yu',
    'я' => 'ya',
  ];

  function str_split_unicode($str, $l = 0)
  {
    if ($l > 0) {
      $ret = array();
      $len = mb_strlen($str, "UTF-8");
      for ($i = 0; $i < $len; $i += $l) {
        $ret[] = mb_substr($str, $i, $l, "UTF-8");
      }
      return $ret;
    }
    return preg_split("//u", $str, -1, PREG_SPLIT_NO_EMPTY);
  }
  $combain = '';
  foreach (str_split_unicode($str) as $litter) {

    $combain .= $letters[$litter];
  }
  return $combain;
}

echo translit('привет');