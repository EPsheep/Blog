<?php

$NAME = '小明'; // 这是一个全局变量

function setName($name) {
    global $NAME; // global声明 使用全局变量
    $NAME = $name;
}

function getName() {
    global $NAME; // global声明 使用全局变量
    return $NAME;
}

setName('小刘');
echo getName() . PHP_EOL;

function user_number_inc() {
	//  static $user_number = sqrt(3); // PHP Fatal Error: Constant expression contains invalid operations
	static $user_number = 0;
	$user_number++;
	echo $user_number . PHP_EOL;
}
user_number_inc();

## 链接
/*
[PHP 全局变量](http://www.cnblogs.com/borage/p/3645285.html)
[PHP的静态变量](http://www.nowamagic.net/php/php_StaticVariable.php)
error参考链接 : https://blog.cnbattle.com/archives/132.html
*/