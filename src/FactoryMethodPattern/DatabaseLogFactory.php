<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午3:19
 */

namespace DesignPatterns\FactoryMethodPattern;


class DatabaseLogFactory implements LogFactoryInterface
{
    public static function createLog() : LogInterface
    {
        return new DatabaseLog();
    }
}