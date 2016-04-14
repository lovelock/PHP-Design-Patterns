<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午3:42
 */

namespace DesignPatterns\AbstractFactoryPattern;


class LGFridge implements FridgeInterface
{

    public function freeze ()
    {
        return __METHOD__;
    }
}