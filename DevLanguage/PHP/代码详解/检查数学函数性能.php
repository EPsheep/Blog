<?php

# 检查数学函数性能

function do1($times) {
	while($times--) {
		$num = 0.77 + 0.11;
	}

}

function do2($times) {
	while($times--) {
		$num = bcadd(0.77, 0.11, 2);
	}
	
}

$times = 1;

# 1
$start = microtime(true);
do1($times);
$end = microtime(true);
echo $end - $start . PHP_EOL;

# 2
$start = microtime(true);
do2($times);
$end = microtime(true);
echo $end - $start . PHP_EOL;
