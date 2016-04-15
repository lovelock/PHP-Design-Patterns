<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:31 PM
 */

namespace DesignPatterns\ObserverPattern;


abstract class AbstractObserver implements ObserverInterface
{
    protected $_observerState;

    abstract public function update(string $state);
}