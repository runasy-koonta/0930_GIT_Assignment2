<?php
while (1) {
	$str = readline('Enter any string (If you enter \'exit\', the program will exit): ');

	if ($str === 'exit') break;
	echo $str . PHP_EOL;
}
