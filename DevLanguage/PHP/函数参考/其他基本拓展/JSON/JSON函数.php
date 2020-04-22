<?php
/**
 * NAME: JSON函数.php
 * Author: eps
 * DateTime: 11/30/2018 1:10 PM
 */

/**
 * json_decode
 * json_encode
 *
 */

# json_decode

$json = '{"a":1,"b":2,"c":3,"d":4,"e":5}';

var_dump(json_decode($json));
var_dump(json_decode($json, true));


// 返回json中以适当PHP类型编码的值。true、false和null值分别作为true、false和null返回。
// 如果json无法解码，或者编码的数据比递归限制更深，则返回NULL。

// TODO 待进一步完善