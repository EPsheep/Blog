<?php

// php 5 在访问类的属性和类的方法是骚的一匹的.

class Game
{
    public $game_name = '俄罗斯方块';

    public function game_over()
    {
        return 'game is over';
    }
}

$game = new Game;
// 通过获取变量的值来访问对象的属性
$name = 'game_name';
$text = 'game_over';
print $game->{$name} . PHP_EOL; // 俄罗斯方块
print $game->{$text}() . PHP_EOL; // game is over

// 通过执行函数的返回值来访问对象的属性
function get_name()
{
    return 'game_name';
}

function get_text()
{
    return 'game_over';
}

print $game->{get_name()} . PHP_EOL; // 俄罗斯方块
print $game->{get_text()}() . PHP_EOL; // game is over

define('NAME', 'game_name');
define('TEXT', 'game_over');
// 通过获取常量的值来访问对象的属性
print $game->{NAME} . PHP_EOL; // 俄罗斯方块
print $game->{TEXT}() . PHP_EOL; // game is over

// 通过字符串来访问对象的属性
print $game->{'game_name'} . PHP_EOL; // 俄罗斯方块
print $game->{'game_over'}() . PHP_EOL; // game is over

class Cup
{
    public $name = 'game_name';
    public $text = 'game_over';
}

$cup = new Cup;
// 通过获取其他对象属性的值来访问对象的属性
print $game->{$cup->name} . PHP_EOL; // 俄罗斯方块
print $game->{$cup->text}(); // game is over