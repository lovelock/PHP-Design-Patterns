<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午2:51
 */

namespace DesignPatterns\DecoratorPattern;


class BeforeDecorator extends Decorator
{
    public function operation()
    {
        echo __CLASS__ . "\n";
        $this->_component->operation();
    }
}