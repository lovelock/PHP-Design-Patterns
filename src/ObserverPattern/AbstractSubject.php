<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午5:39
 */

namespace DesignPatterns\ObserverPattern;


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
}