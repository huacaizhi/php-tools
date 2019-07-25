<?php
/**
 * Created by PhpStorm.
 * User: huacaizhi
 * @author huacaizhi <huacaizhi@gmail.com>
 * Date: 2019/7/15
 * Time: 19:54
 */

namespace HuaCaiZhi\PhpTools\Http;

class Request
{
    /**
     * 获取当前请求完整`URL`地址
     * 注意`运行在命令行下`
     * @return string
     */
    public static function getRequestUrl()
    {
        if (strpos(php_sapi_name(), 'cli') !== false) {
            return 'cli';
        }
        if (isset($_SERVER["REQUEST_SCHEME"])
            && isset($_SERVER["SERVER_NAME"])
            && isset($_SERVER["REQUEST_URI"])) {
            return $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
        }

        return realpath(__FILE__);
    }
}