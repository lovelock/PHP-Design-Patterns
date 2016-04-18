<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/16/16
 * Time: 12:18 AM
 */

namespace DesignPatterns\StatePattern;


abstract class AbstractContext
{
    protected $_state;

    public function __construct()
    {
        $this->_state = ConcreteStateA::getInstance();
    }

    abstract public function request();

    abstract public function changeState(AbstractState $state);
}