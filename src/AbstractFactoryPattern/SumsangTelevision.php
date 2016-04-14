<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午3:43
 */

namespace DesignPatterns\AbstractFactoryPattern;


class SumsangTelevision implements TelevisionInterface
{

    public function watch()
    {
        echo __METHOD__;
    }
}