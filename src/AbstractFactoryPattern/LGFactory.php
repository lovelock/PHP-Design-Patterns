<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午3:41
 */

namespace DesignPatterns\AbstractFactoryPattern;


class LGFactory implements FactoryInterface
{

    public static function createSumsangFridge() : FridgeInterface
    {
        return new LGFridge();
    }

    public static function createSumsangTelevision() : TelevisionInterface
    {
        return new LGTelevision();
    }
}