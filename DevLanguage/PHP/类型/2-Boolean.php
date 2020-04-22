<?php
/**
 * NAME: 2-Boolean.php
 * Author: eps
 * DateTime: 12/7/2018 12:22 AM
 */

$flag = TRUE;
$flag = FALSE;
$flag = true;
$flag = false;

/**
 * 当转换为Boolean是, 以下值被认为是FALSE
 *
 * 1. 布尔值 FALSE本身
 * 2. 整型值 0
 * 3. 浮点型值 0
 * 4. 空字符串 以及 字符串 '0'
 * 5. 不包括任何元素的数组
 * 6. 特殊类型 NULL (包括尚未赋值的变量
 * 7. 从空标记生成的 SimpleXML 对象
 *
 * 所有其他值都被认为是 TRUE (包括任何资源和 NAN
 */


$flag = '0.00';
var_dump(boolval($flag));