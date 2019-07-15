<?php
/**
 * Created by PhpStorm.
 * User: huacaizhi
 * @author huacaizhi <huacaizhi@gmail.com>
 * Date: 2019/7/15
 * Time: 19:35
 */

namespace HuaCaiZhi\PhpTools\DateTime;

class DateTime
{
    /**
     * 返回当前的毫秒时间戳
     *
     * microtime — 返回当前 Unix 时间戳和微秒数
     * 如果调用时不带可选参数，本函数以 "msec sec" 的格式返回一个字符串，
     * 其中 sec 是自 Unix 纪元（0:00:00 January 1, 1970 GMT）起到现在的秒数，
     * msec 是微秒部分。字符串的两部分都是以秒为单位返回的。
     *
     * @return float
     */
    public static function msecTime()
    {
        list($msec, $sec) = explode(' ', microtime());
        $msecTime = (float)sprintf('%.0f', (floatval($msec) + floatval($sec)) * 1000);

        return $msecTime;
    }
}