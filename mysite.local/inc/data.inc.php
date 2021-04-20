<?php
setlocale(LC_ALL, "russian");
$day = strftime('%d');
$mon = strftime('%B');
$mon = iconv('windows-1251', 'utf-8', $mon);
$year = strftime('%Y');
$hour = (int) strftime('%H');
$welcome = '';
if ($hour >= 0 && $hour < 6) {
  $welcome = 'Доброй ночи';
} elseif ($hour >= 6 && $hour < 12) {
  $welcome = 'Доброй утро';
} elseif ($hour >= 12 && $hour < 18) {
  $welcome = 'Доброй день';
} elseif ($hour >= 18 && $hour < 23) {
  $welcome = 'Доброй вечер';
} else {
  $welcome = 'Доброй ночи';
}
// Инициализация массива
$leftMenu = [
  ['link' => 'Домой', 'href' => 'index.php'],
  ['link' => 'О нас', 'href' => 'about.php'],
  ['link' => 'Контакты', 'href' => 'contact.php'],
  ['link' => 'Таблица умножения', 'href' => 'table.php'],
  ['link' => 'Калькулятор', 'href' => 'calc.php']
];
