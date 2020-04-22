<?php

/**
 * 日期时间处理工具类
 * @author hurong
 */
class DateTimeTool
{
    /**
     * 获取本日第一秒
     *
     * @param $timestamp
     * @return int
     * @author hurong
     */
    public static function getDayStartTimestamp($timestamp)
    {
        return (int)strtotime(date('Y-m-d', $timestamp));
    }

    /**
     * 获取本日最后一秒
     *
     * @param $timestamp
     * @return int
     * @author hurong
     */
    public static function getDayEndTimeStamp($timestamp)
    {
        return self::getDayStartTimestamp($timestamp) + 86399;
    }

    /**
     * 获取本周第一天
     *
     * @param $timestamp
     * @return int
     * @author hurong
     */
    public static function getWeekStartTimeStamp($timestamp)
    {

    }

    /**
     * 获取本周最后一天
     *
     * @param $timestamp
     * @return int
     * @author hurong
     */
    public static function getWeekEndTimeStamp($timestamp)
    {

    }

    /**
     * 获取本月第一天
     *
     * @param $timestamp
     * @author hurong
     */
    public static function getMonthStartDayTimeStamp($timestamp)
    {

    }

    /**
     * 获取本月最后一天
     *
     * @param $timestamp
     * @author hurong
     */
    public static function getMonthEndDayTimeStamp($timestamp)
    {

    }

    /**
     * 获取时间范围内的天数分组
     *
     * @param $startTime
     * @param $endTime
     * @return array
     * @author hurong
     */
    public static function getDayGroup($startTime, $endTime)
    {
        $list = [];

        $dayStart = strtotime(date('Y-m-d', $startTime));
        $dayEnd   = strtotime(date('Y-m-d', $endTime)) + 86399;

        if ($dayEnd - $dayStart <= 86399) {
            return [[$startTime, $endTime]];
        }

        $dayZero = $dayStart;
        $dayLast = $dayZero + 86399;

        while ($dayLast <= $dayEnd) {

            if ($dayZero === $dayStart) {
                $list[] = [$startTime, $dayLast];
            } else if ($endTime <= $dayLast) {
                if ($dayZero !== $endTime) {
                    $list[] = [$dayZero, $endTime];
                }
            } else {
                $list[] = [$dayZero, $dayLast];
            }

            $dayZero += 86400;
            $dayLast += 86400;
        }

        return $list;
    }

    /**
     * 获取本周信息
     *
     * @author hurong
     */
    public static function getThisWeek()
    {

    }
}