<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午12:18
 */

namespace DesignPatterns\SimpleFactoryPattern;


class ConcreteProductA extends AbstractProduct
{
    public function run()
    {
        echo __METHOD__;
    }
}