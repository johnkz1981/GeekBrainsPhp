<?php
/**
 * Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».
 */

$citiesAndRegions = [
  'Московская область' => ['Москва', 'Зеленоград', 'Клин'],
  'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт'],
  'Рязанская область' => ['Рязань', 'Спас-Клепики'],
];

foreach ($citiesAndRegions as $region => $cities) {
  echo "$region:\n";
  $countCities = count($cities) - 1;

  foreach ($cities as $key => $city) {
    if(mb_substr($city,0,1) !== 'К'){
      continue;
    }
    if ($countCities === $key) {
      echo "$city\n";
    } else {
      echo "$city, ";
    }
  }
}