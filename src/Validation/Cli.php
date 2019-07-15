<?php
/**
 * Created by PhpStorm.
 * User: huacaizhi
 * @author huacaizhi <huacaizhi@gmail.com>
 * Date: 2019/7/16
 * Time: 0:40
 */

namespace HuaCaiZhi\PhpTools\Validation;

class Cli
{
    /**
     * 判断是否是`cli`模式
     * //preg_match("/cli/i", php_sapi_name()) ? true : false;
     *
     * @return bool
     */
    public static function isCli()
    {
        if (stripos(php_sapi_name(), 'cli') !== false) {
            return true;
        }

        return false;
    }

    /**
     * 判断是否是`cgi`模式
     *
     * @return bool
     */
    public static function isCgi()
    {
        if (substr(php_sapi_name(), 0, 3) == 'cgi') {
            return true;
        }

        return false;
    }
}