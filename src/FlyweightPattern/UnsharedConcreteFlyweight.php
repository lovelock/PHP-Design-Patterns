<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午3:59
 */

namespace DesignPatterns\FlyweightPattern;


class UnsharedConcreteFlyweight
{
    private $_state;

    public function __construct($state)
    {
        $this->_state = $state;
    }

    public function operation()
    {
        echo __METHOD__ . "\n";
    }
}