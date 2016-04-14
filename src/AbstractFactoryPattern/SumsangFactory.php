<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午3:40
 */

namespace DesignPatterns\AbstractFactoryPattern;


class SumsangFactory implements FactoryInterface
{

    public static function createFridge() : FridgeInterface
    {
        return new SumsangFridge();
    }

    public static function createTelevision() : TelevisionInterface
    {
        return new SumsangTelevision();
    }
}