<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午3:06
 */

namespace DesignPatterns\FacadePattern;


class Facade
{
    private $_wash;
    private $_brush;

    public function __construct(ComponentWash $componentWash, ComponentBrush $componentBrush)
    {
        $this->_wash = $componentWash;
        $this->_brush = $componentBrush;
    }

    public function getup()
    {
        $this->_wash->wash();
        $this->_brush->brush();
    }
}