<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午6:59
 */

namespace DesignPatterns\BridgePattern;


class AbstractPolygon implements PolygonInterface
{

    protected $_color;

    public function setColor(ColorInterface $color)
    {
        $this->_color = $color;
    }

    public function draw()
    {
        echo __CLASS__ . "\n";
    }
}