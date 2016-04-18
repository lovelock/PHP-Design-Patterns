<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/16/16
 * Time: 12:14 AM
 */

namespace DesignPatterns\StatePattern;


abstract class AbstractState
{
    abstract public static function getInstance();

    abstract function handle(Context $context);
}