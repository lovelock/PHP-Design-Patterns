<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午5:38
=======
 * User: frost
 * Date: 4/15/16
 * Time: 11:39 PM
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
 */

namespace DesignPatterns\ObserverPattern;


class CarSubject extends AbstractSubject
{
<<<<<<< HEAD
    private $_state;

    public function setState(string $state)
    {
        $this->_state = $state;
=======
    public function setState(string $state)
    {
        $this->_state = $state;

>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
    }

    public function getState()
    {
        return $this->_state;
    }

<<<<<<< HEAD
=======
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
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
}