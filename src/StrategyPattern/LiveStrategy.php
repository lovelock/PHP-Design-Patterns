<?php

namespace DesignPatterns\StrategyPattern;

/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/5
 * Time: 下午6:25
 */
class LiveStrategy implements Strategy
{
    private $_star;

    public function __construct($uid)
    {
        $this->_star = $uid;
    }

    public function getTargetUsers()
    {
        echo $this->_star . "\n";
    }
}