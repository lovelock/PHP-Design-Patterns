<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午12:19
 */

namespace DesignPatterns\SimpleFactoryPattern;


class ConcreteProductB extends AbstractProduct
{
    public function run()
    {
        echo __METHOD__;
    }
}