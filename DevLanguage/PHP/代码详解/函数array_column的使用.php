<?php


# 1
$list = [
	['name' => 'bob'],
	['name' => 'james'],
	['name' => 'john']
];
var_dump(array_column($list, 'name'));

# 2
$list = [
	['name' => 'bob'],
	['name' => 'james'],
	['name' => NULL],
];
var_dump(array_column($list, 'name'));

# 3
$list = [
	['user_id' => 1, 'name' => 'bob'],
	['user_id' => 2, 'name' => 'james'],
	['user_id' => 3, 'name' => NULL],
];
var_dump(array_column($list, 'name', 'id'));