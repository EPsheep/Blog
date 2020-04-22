<?php

# php函数嵌入

function a($a_char) {
    function b($b_char) {
        function c($c_char) {
            return $c_char;
        }
        return $b_char;
    }
    return $a_char;
}

echo a('a') . PHP_EOL; // 若不调用a函数 则无法调用b函数
echo b('b') . PHP_EOL; // 若不调用b函数 则无法调用c函数
echo c('c');