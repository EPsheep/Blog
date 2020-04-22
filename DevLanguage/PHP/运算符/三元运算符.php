<?php

$list = [
	NULL, 0, '0', '1', -1, (object)[], [], false, true,
];
foreach ($list as $el) {

	var_dump($el);

	// 三元运算符 1
	$type1 = $el ? $el : 'N';
	// 三元运算符 2
	$type2 = $el ?: 'N';
	// NULL 合并操作符
	$type3 = $el ?? 'N';

	var_dump($type1);
	var_dump($type2);
	var_dump($type3);
	echo PHP_EOL;
}

// http://php.net/manual/zh/language.operators.comparison.php