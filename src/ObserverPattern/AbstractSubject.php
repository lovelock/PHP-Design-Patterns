<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午5:39
=======
 * User: frost
 * Date: 4/15/16
 * Time: 11:31 PM
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
 */

namespace DesignPatterns\ObserverPattern;


<<<<<<< HEAD
class AbstractSubject implements SubjectInterface
{
    protected $_observerList = [];

    public function attach(ObserverInterface $observer)
    {
        $this->_observerList[] = $observer;
    }

    public function detach(ObserverInterface $observer)
    {
        foreach ($this->_observerList as &$item) {
            if ((new \ReflectionClass($item))->getName() === (new \ReflectionClass($observer))->getName()) {
                unset($item);
            }
        }
    }

    public function notify()
    {
        foreach ($this->_observerList as $observer) {
            $observer->update($this);
        }
    }
=======
abstract class AbstractSubject implements SubjectInterface
{
    protected $_observers = [];
    protected $_state;

    abstract public function attach(ObserverInterface $observer);


    abstract public function detach(ObserverInterface $observer);

    abstract public function notify();
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
}