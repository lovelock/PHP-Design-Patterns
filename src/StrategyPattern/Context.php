<?php

namespace DesignPatterns\StrategyPattern;

/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/5
 * Time: 下午6:22
 */
class Context
{
    private $_strategy;

    public function setStrategy(Strategy $strategy)
    {
        $this->_strategy = $strategy;
        return $this;
    }

    public function getStrategy()
    {
        return $this->_strategy;
    }

    public function getTargetUsers()
    {
        return $this->_strategy->getTargetUsers();
    }
}