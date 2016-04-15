<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:51 PM
 */

namespace DesignPatterns\ObserverPattern;


class StateObserver extends AbstractObserver
{

    public function update(string $state)
    {
        $this->_observerState = $state;
        echo $this->_observerState . "\n";
    }
}