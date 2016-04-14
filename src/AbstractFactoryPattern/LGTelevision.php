<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午3:43
 */

namespace DesignPatterns\AbstractFactoryPattern;


class LGTelevision implements TelevisionInterface
{

    public function watch()
    {
        return __METHOD__;
    }
}