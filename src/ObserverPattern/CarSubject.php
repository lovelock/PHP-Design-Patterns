<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:39 PM
 */

namespace DesignPatterns\ObserverPattern;


class CarSubject extends AbstractSubject
{
    public function setState(string $state)
    {
        $this->_state = $state;

    }

    public function getState()
    {
        return $this->_state;
    }

    public function notify()
    {
        foreach ($this->_observers as &$observer) {
            $observer->update($this->getState());
        }
    }

    public function attach(ObserverInterface $observer)
    {
        if (!in_array($observer, $this->_observers)) {

            $this->_observers[] = $observer;
        }
    }

    public function detach(ObserverInterface $observer)
    {
        foreach ($this->_observers as $k => &$v) {
            if ($v === $observer) {
                unset($this->_observers[$k]);
            }
        }
    }
}