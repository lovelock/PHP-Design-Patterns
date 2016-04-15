<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午3:57
 */

namespace DesignPatterns\FlyweightPattern;


class ConcreteFlyweight implements FlyweightInterface
{
    private $_state;

    public function __construct($state)
    {
        echo 'creating ' . $state . "\n";
        $this->_state = $state;
    }

    public function operation()
    {
        echo __METHOD__ . "\n";
    }
}