<?php
/**
 * Created by PhpStorm.
 * User: huacaizhi
 * @author huacaizhi <huacaizhi@gmail.com>
 * Date: 2019/7/16
 * Time: 0:46
 */

namespace HuaCaiZhi\PhpTools\Validation;

class Form
{
    /**
     * 判断是否是邮件(`email`)地址
     *
     * @param $email
     * @return bool
     */
    public static function isEmail($email)
    {
        if (empty($email)) {
            return false;
        }
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return true;
        }

        return false;
    }


    /**
     * 判断是否是`Url`
     *
     * @param $url
     * @return bool
     */
    public static function isUrl($url)
    {
        if (empty($url)) {
            return false;
        }
        if (filter_var($url, FILTER_VALIDATE_URL)) {
            return true;
        }

        return false;
    }


    /**
     * 判断是否是一个版本号
     *
     * @param $str
     * @return bool
     */
    public static function isVersionNumber($str)
    {
        if (empty($str) || !is_string($str)) {
            return false;
        }

        if (preg_match('/^(\d+).(\d+).(\d+)$/i', $str)) {
            return true;
        }

        return false;
    }
}