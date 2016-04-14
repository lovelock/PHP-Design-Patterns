<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午5:16
 */

namespace DesignPatterns\BuilderPattern;


class Director
{
    private $_builder;

    public function setBuilder(BuilderInterface $builder)
    {
        $this->_builder = $builder;
    }

    public function construct()
    {
        $this->_builder->buildWheel();
        $this->_builder->buildGlass();
        $this->_builder->buildSkeleton();

        return $this->_builder->getResult();
    }
}