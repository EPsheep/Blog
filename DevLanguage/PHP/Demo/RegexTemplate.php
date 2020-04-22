<?php

/**
 * 正则模板类
 * @author hurong
 */
class RegexTemplate
{
    /**
     * formatDate
     * 10月07日
     * @param $string
     * @return false|int
     * @author hurong
     */
    public function formatDate($string)
    {
        return preg_match('/(0[1-9]|1[012])月(0[1-9]|[12]\d|3[01])日/u', $string);
    }

    /**
     * formatClock
     * 17:00 - 18:00
     * @param $string
     * @return false|int
     * @author hurong
     */
    public function formatClock($string)
    {
        return preg_match('/(0\d|1\d|2[0-3]):(0\d|[1-5]\d) [-] (0\d|1\d|2[0-3]):(0\d|[1-5]\d)/', $string);
    }
}