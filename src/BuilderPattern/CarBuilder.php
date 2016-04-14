<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午5:19
 */

namespace DesignPatterns\BuilderPattern;


class CarBuilder implements BuilderInterface
{
    private $_product;

    public function __construct()
    {
        $this->_product = new CarProduct();
    }

    public function buildWheel()
    {
        echo "wheel\n";
        $this->_product->setWheel();
    }

    public function buildGlass()
    {
        echo "glass\n";
        $this->_product->setGlass();
    }

    public function buildSkeleton()
    {
        echo "skeleton\n";
        $this->_product->setSkeleton();
    }

    public function getResult()
    {
        return $this->_product;
    }
}