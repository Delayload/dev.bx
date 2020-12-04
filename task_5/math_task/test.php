<?php
require_once 'readFromConsole.php';

require_once 'assertEquals.php';

require_once 'findMax.php';

assertEquals(2,readFromConsole('Ввод в консоль "1 2 3 3" '), 'Результат теста: ');
assertEquals(1,readFromConsole('Ввод в консоль "1 7 9" '), 'Результат теста: ');