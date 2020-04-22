<?php 


$one = '1';
$two = '2';
$array = [
	'three' => 3
];
$object = (object)[
	'four' => 4
];

# 1. 在数组的键时使用双引号
$list = [
	"{$one}" => 1,
	"{$two}" => 2,
	"{$array['three']}" => 3,
	"{$object->four}" => 4
];
var_dump($list);

# 2. 在变量定义初始化赋值时使用双引号
$varName = 'one';
echo ${"{$varName}"} . PHP_EOL;
echo $$varName . PHP_EOL;

