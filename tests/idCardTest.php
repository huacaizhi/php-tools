<?php
/**
 * Created by PhpStorm.
 * User: huacaizhi
 * @author huacaizhi <huacaizhi@gmail.com>
 * Date: 2019/7/17
 * Time: 11:39
 */

namespace Test;

use HuaCaiZhi\PhpTools\Guid\Guid;

class idCardTest extends \PHPUnit_Framework_TestCase
{
    public function testTest()
    {
        //Guid
        var_dump(Guid::guid(1));
        var_dump(Guid::guid(2));
        var_dump(Guid::guid(3));
        var_dump(Guid::GUIDv4());
    }
}