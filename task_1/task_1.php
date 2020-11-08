<?php

require_once 'readFromConsole.php'; //default
require_once 'sumNumbers.php';

$str = readFromConsole('Введите числа: ');

echo 'Сумма чисел: '.sumNumbers($str);
