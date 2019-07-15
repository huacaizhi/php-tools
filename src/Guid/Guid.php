<?php
/**
 * Created by PhpStorm.
 * User: huacaizhi
 * @author huacaizhi <huacaizhi@gmail.com>
 * Date: 2019/7/15
 * Time: 19:44
 */
namespace HuaCaiZhi\PhpTools\Guid;

class Guid
{
    /**
     * 显示样式:
     * 1.原样
     * 2.去掉下划线
     *
     */
    const ORIGINAL = 1;
    const RM_UNDERLINE = 2;
    /**
     * Create Guid
     *
     * @return string
     */
    public static function guid()
    {
        if (function_exists('com_create_guid')) {
            return com_create_guid();
        } else {
            mt_srand((double)microtime() * 10000);//optional for php 4.2.0 and up.
            $charid = strtoupper(md5(uniqid(rand(), true)));
            $hyphen = chr(45);// "-"
            $uuid = substr($charid, 0, 8) . $hyphen
                . substr($charid, 8, 4) . $hyphen
                . substr($charid, 12, 4) . $hyphen
                . substr($charid, 16, 4) . $hyphen
                . substr($charid, 20, 12);

            return $uuid;
        }
    }
}