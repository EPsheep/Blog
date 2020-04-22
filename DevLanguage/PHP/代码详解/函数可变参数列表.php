<?php

# 函数可变参数列表

// < php 5.5
function t () {
	print_r(func_get_args());
}


// php 5.6
function _t(...$nums) {
	print_r($nums);
}

t(1, 2, 3);
_t(3, 2, 1);