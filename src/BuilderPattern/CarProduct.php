<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午5:27
 */

namespace DesignPatterns\BuilderPattern;


class CarProduct implements ProductInterface
{
    private $_wheel;
    private $_glass;
    private $_skeleton;

    public function setWheel()
    {
        $this->_wheel = 'wheel';
    }

    public function setGlass()
    {
        $this->_glass = 'glass';
    }

    public function setSkeleton()
    {
        $this->_skeleton = 'skeleton';
    }

    public function run()
    {
        echo __METHOD__;
        return $this;
    }
}