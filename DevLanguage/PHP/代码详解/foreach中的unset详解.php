<?php

$list = range(1, 5);
foreach ($list as $index => $value) {
	unset($list[$index]);
	echo current($list) . PHP_EOL;
	print_r($list);
}
