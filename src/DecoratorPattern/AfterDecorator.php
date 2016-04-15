<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午2:51
 */

namespace DesignPatterns\DecoratorPattern;


class AfterDecorator extends Decorator
{
    public function operation()
    {
        $this->_component->operation();
        echo __CLASS__ . "\n";
    }
}