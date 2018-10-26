<?php
/**
 * Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
 * 22 часа 15 минут
 * 21 час 43 минуты
 *
 * минута/час: 1,?1
 * минуты/часа: 2-4, ?2-?4
 * минут/часов: 5-20, ?5-?9
 */

/**
 * @param $time { int } Время {минуты/часы}
 * @param $type { string } Разновидность времени {'h'|'m'}
 * @return mixed { string } Строковое представление времени
 */
function getTimeString($time, $type)
{
  if ($time > 20) {
    $time = fmod($time, 10);
  }

  if ($time == 1) {
    return ['m' => 'минута', 'h' => 'час'][$type];
  } elseif ($time > 1 && $time < 5) {
    return ['m' => 'минуты', 'h' => 'часа'][$type];
  } else {
    return ['m' => 'минут', 'h' => 'часов'][$type];
  }
}
$h = +date('G');
$m = +date('i');

echo "$h ".getTimeString($h, 'h')." $m ".getTimeString($m, 'm');
