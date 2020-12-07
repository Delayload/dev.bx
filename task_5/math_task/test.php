<?php

require_once 'assertEquals.php';

require_once 'countSum.php';

function countSumTest() {
	assertEquals(1, countSum('1 7 9'), 'Результат теста 1: ');
	assertEquals(2, countSum('1 3 3 1'), 'Результат теста 2: ');
	assertEquals(2, countSum('1 3 3 1 stop 4'), 'Результат теста 3: ');
	assertEquals(3, countSum('1 2 3 4 5 6 7 8 9 0 1 2 3 4 5 6 7 8 9 9 21 stop '), 'Результат теста 4: ');
}

countSumTest();