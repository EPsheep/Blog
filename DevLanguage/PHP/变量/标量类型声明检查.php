<?php
/**
 * NAME: define_function.php
 * User: eps
 * Date: 7/6/2018
 * Time: 12:20 PM
 */

declare(strict_types = 1);
function sum(int $a, int $b) {
    return $a + $b;
}

echo sum(1.5, 6);

## 参考
// [PHP 7 标量类型声明 RFC，也可是 declare(strict_types = 1)]
// (https://blog.csdn.net/beyond__devil/article/details/52584082)