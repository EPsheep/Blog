<?php

error_reporting(E_ALL);
ini_set('display_errors', 'on');

// 动态创建对象的属性和方法

class Boy
{
    public function __construct(array $arguments = array())
    {
        if (!empty($arguments)) {
            foreach ($arguments as $property => $argument) {
                $this->{$property} = $argument;
            }
        }
    }

    // __call()，这个方法用来监视一个对象中的其它方法。
    // 如果你试着调用一个对象中不存在的方 法，__call 方法将会被自动调用。
    public function __call($method, $arguments)
    {
        $arguments = array_merge(array('obj' => $this), $arguments);
        if (isset($this->{$method}) && is_callable($this->{$method})) {
            return call_user_func_array($this->{$method}, $arguments);
        } else {
            throw new Exception("Fatal error: Call to undefined method Boy::{$method}()");
        }
    }
}

$boy = new Boy();

// 动态创建属性
$boy->name = '小明';
$boy->getInfo = function ($obj) {
    echo '有个小伙他叫: ' . $obj->name . PHP_EOL;
};

// 动态创建getter和setter方法
foreach ($boy as $memberVar => $memberVarValue) {
    if (!($memberVarValue instanceOf Closure)) {

        $boy->{'set' . ucfirst($memberVar)} = function ($obj, $value) use ($memberVar) {
            $obj->{$memberVar} = $value;
        };

        $boy->{'get' . ucfirst($memberVar)} = function ($obj) use ($memberVar) {
            return $obj->{$memberVar};
        };
    }
}

$boy->setName('小刘');
$boy->getInfo();
print_r($boy);