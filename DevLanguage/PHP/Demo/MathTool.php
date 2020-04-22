<?php

/**
 * 数学验证类
 * @author hurong
 */
class MathTool
{
    public $number = 0;

    public function __construct()
    {

    }

    public function toFixed($scale)
    {
        return (float)bcadd($this->number, '0', $scale);
    }


}