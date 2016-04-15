<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午3:56
 */

namespace DesignPatterns\FlyweightPattern;


class FlyweightFactory
{
    private $_instances;

    public function __construct()
    {
        $this->_instances = [];
    }

    public function getFlyweight($state)
    {
        if (! isset($this->_instances[$state])) {
            $this->_instances[$state] = new ConcreteFlyweight($state);
        }

        return $this->_instances[$state];
    }
}