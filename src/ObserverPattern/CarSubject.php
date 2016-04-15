<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午5:38
 */

namespace DesignPatterns\ObserverPattern;


class CarSubject extends AbstractSubject
{
    private $_state;

    public function setState(string $state)
    {
        $this->_state = $state;
    }

    public function getState()
    {
        return $this->_state;
    }

}