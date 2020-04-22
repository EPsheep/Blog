<?php 

$bool = NULL;

$bool = 0 == 1;
var_dump($bool); // false

$bool = 0 < 1;
var_dump($bool); // true

$bool = 0 < 1 && 0 > 1;
var_dump($bool); // false

$bool = 0 < 1 and 0 > 1;
var_dump($bool); // true

$bool = (0 < 1 and 0 > 1);
var_dump($bool); // false

// [PHP: 运算符优先级](http://php.net/manual/zh/language.operators.precedence.php)