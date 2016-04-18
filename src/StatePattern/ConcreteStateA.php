<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/16/16
 * Time: 12:17 AM
 */

namespace DesignPatterns\StatePattern;


class ConcreteStateA extends AbstractState
{
    private static $_instance;

    function handle(Context $context)
    {
        echo "before ";
        var_dump($context);
        $context->changeState(ConcreteStateB::getInstance());
        echo "after ";
        var_dump($context);
    }

    public static function getInstance()
    {
        if (!isset(self::$_instance)) {
            self::$_instance = new ConcreteStateA();
        }

        return self::$_instance;
    }
}