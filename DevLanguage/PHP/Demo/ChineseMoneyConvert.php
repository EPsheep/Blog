<?php

/**
 * 中文金额大小写转换类
 * @author hurong
 */
class ChineseMoneyConvert
{
    /**
     * convertNumber
     *
     * @param $number
     * @return string
     * @throws Exception
     * @author hurong
     */
    public function convertNumber($number)
    {
        $isRmb = true;
        // 判断正确数字
        if (!preg_match('/^-?\d+(\.\d+)?$/', $number)) {
            throw new RuntimeException('数字不正确!', 1);
        }
        list($integer, $decimal) = explode('.', $number . '.0');
        // 检测是否为负数
        $symbol = '';
        if (strpos($integer, '-') === 0) {
            $symbol  = '负';
            $integer = substr($integer, 1);
        }
        if (preg_match('/^-?\d+$/', $number)) {
            $decimal = null;
        }
        $integer = ltrim($integer, '0');


        $number     = substr(sprintf('%.5f', $number), 0, -1);
        $numArr     = ['', '壹', '贰', '叁', '肆', '伍', '陆', '柒', '捌', '玖', '.' => '点'];
        $descArr    = ['', '拾', '佰', '仟', '万', '拾', '佰', '仟', '亿', '拾', '佰', '仟', '万亿', '拾', '佰', '仟', '兆', '拾', '佰', '仟'];
        $rmbDescArr = ['角', '分', '厘', '毫'];

        // 整数部分拼接
        $integerRes = '';
        $count      = strlen($integer);
        if ($count > max(array_keys($descArr))) {
            throw new RuntimeException('number2chinese() number too large.', 1);
        } else if ($count == 0) {
            $integerRes = '零';
        } else {
            for ($i = 0; $i < $count; $i++) {
                $n = $integer[$i];      // 位上的数
                $j = $count - $i - 1;   // 单位数组 $descArr 的第几位
                // 零零的读法
                $isLing = $i > 1                    // 去除首位
                    && $n !== '0'                   // 本位数字不是零
                    && $integer[$i - 1] === '0';    // 上一位是零
                $cnZero = $isLing ? '零' : '';
                $cnNum  = $numArr[$n];
                // 单位读法
                $isEmptyDanwei = ($n == '0' && $j % 4 != 0)     // 是零且一断位上
                    || substr($integer, $i - 3, 4) === '0000';  // 四个连续0
                $descMark      = isset($cnDesc) ? $cnDesc : '';
                $cnDesc        = $isEmptyDanwei ? '' : $descArr[$j];
                // 第一位是一十
                if ($i == 0 && $cnNum == '一' && $cnDesc == '十') $cnNum = '';
                // 二两的读法
                $isChangeEr = $n > 1 && $cnNum == '二'       // 去除首位
                    && !in_array($cnDesc, ['', '十', '百'])  // 不读两\两十\两百
                    && $descMark !== '十';                   // 不读十两
                if ($isChangeEr) $cnNum = '两';
                $integerRes .= $cnZero . $cnNum . $cnDesc;
            }
        }
        // 小数部分拼接
        $decimalRes = '';
        $count      = strlen($decimal);
        if ($decimal === null) {
            $decimalRes = $isRmb ? '整' : '';
        } else if ($decimal === '0') {
            $decimalRes = $isRmb ? '' : '零';
        } else if ($count > max(array_keys($descArr))) {
            throw new RuntimeException('number2chinese() number too large.', 1);
        } else {
            for ($i = 0; $i < $count; $i++) {
                if ($isRmb && $i > count($rmbDescArr) - 1) break;
                $n = $decimal[$i];
                if (!$isRmb) {
                    $cnZero     = $n === '0' ? '零' : '';
                    $cnNum      = $numArr[$n];
                    $cnDesc     = '';
                    $decimalRes .= $cnZero . $cnNum . $cnDesc;
                } else {
                    // 零零的读法
                    $isLing     = $i > 0                        // 去除首位
                        && $n !== '0'                       // 本位数字不是零
                        && $decimal[$i - 1] === '0';        // 上一位是零
                    $cnZero     = $isLing ? '零' : '';
                    $cnNum      = $numArr[$n];
                    $cnDesc     = $cnNum ? $rmbDescArr[$i] : '';
                    $decimalRes .= $cnZero . $cnNum . $cnDesc;
                }
            }
        }
        // 拼接结果
        $res = $symbol . (
            $isRmb
                ? $integerRes . ($decimalRes === '' ? '元整' : "元$decimalRes")
                : $integerRes . ($decimalRes === '' ? '' : "点$decimalRes")
            );
        return $res;

    }

    public function convertString($string)
    {

    }
}