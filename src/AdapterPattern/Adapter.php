<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午5:56
 */

namespace DesignPatterns\AdapterPattern;


class Adapter extends Target
{
    private $_adaptee;

    public function __construct(Adaptee $adaptee)
    {
        $this->_adaptee = $adaptee;
    }

    public function request()
    {
        $this->_adaptee->specificRequest();
    }
}