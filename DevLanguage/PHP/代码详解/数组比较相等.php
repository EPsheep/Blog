<?php

function dumpResult(&$a, &$b) {
	var_dump($a == $b);
	var_dump($a === $b);
	echo PHP_EOL;
}

$a = [[[[[]]]]];
$b = [[[[[]]]]];
dumpResult($a, $b);

$a = ['foo' => 1, 'bar' => 2];
$b = ['bar' => 2, 'foo' => 1];
dumpResult($a, $b);


$a = [1, 2];
$b = [0 => 1, 1 => 2];
dumpResult($a, $b);


$a = [
	'wang' => (object)['name' => 'wang', 'age' => 10],
	'li' => (object)['name' => 'li', 'age' => 1000]
];
$b = [
	'li' => (object)['name' => 'li', 'age' => 1000],
	'wang' => (object)['name' => 'wang', 'age' => 10],
];
dumpResult($a, $b);

