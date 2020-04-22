<?php

echo PHP_EOL . '#1' . PHP_EOL;
$list = ['one','two', 'three'];
$list += ['four', 'five', 'six'];
print_r($list);
var_dump($list == ['one','two','three', 'four', 'five', 'six']);
$list += ['one','two','three', 'four', 'five', 'six'];
var_dump($list == ['one','two', 'three', 'four', 'five', 'six']);


echo PHP_EOL . '#2' . PHP_EOL;
$list = [0,1];
var_dump($list === ['0' => 0, '1' => 1]);
var_dump($list === ['0' => '0', '1' => '1']);