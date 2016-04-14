<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午5:45
 */

namespace DesignPatterns\SingletonPattern;


class Singleton
{
    private static $_instance;

    public static function getInstance()
    {
        if (! isset(self::$_instance)) {
            self::$_instance = new static();
        }

        return self::$_instance;
    }

    private function __construct()
    {
    }

    private function __wakeup()
    {
    }

    private function __clone()
    {
    }
}