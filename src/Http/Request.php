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
     *
     * @return string
     */
    public static function getRequestUrl()
    {
        return $_SERVER["REQUEST_SCHEME"] . '://' . $_SERVER["SERVER_NAME"] . $_SERVER["REQUEST_URI"];
    }
}