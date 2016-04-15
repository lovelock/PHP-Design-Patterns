<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午2:50
 */

namespace DesignPatterns\DecoratorPattern;


class Decorator implements ComponentInterface
{

    protected $_component;

    public function __construct(ComponentInterface $component)
    {
        $this->_component = $component;
    }

    public function operation()
    {
    }
}