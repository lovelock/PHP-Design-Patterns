<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/5
 * Time: 下午6:47
 */

namespace DesignPatterns\StrategyPattern;


class FooStrategy implements StrategyInterface
{
    private $_items;

    public function __construct($items)
    {
        $this->_items = $items;
        return $this;
    }

    public function getTargetUsers()
    {
        echo "I am another strategy {$this->_items} " . posix_getpid() . "\n";
    }
}