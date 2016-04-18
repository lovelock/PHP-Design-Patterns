<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/16/16
 * Time: 12:25 AM
 */

namespace DesignPatterns\StatePattern;


class ConcreteStateB extends AbstractState
{
    private static $_instance;

    function handle(Context $context)
    {
        $context->changeState(ConcreteStateA::getInstance());
    }

    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new ConcreteStateB();
        }

        return self::$_instance;
    }
}