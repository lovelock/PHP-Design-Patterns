<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午3:20
 */

namespace DesignPatterns\FactoryMethodPattern;


class FileLog implements LogInterface
{

    public static function writeLog()
    {
        echo __METHOD__;
    }
}