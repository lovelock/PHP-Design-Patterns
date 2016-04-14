<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午7:07
 */

namespace DesignPatterns\BridgePattern;


class Rectangle extends AbstractPolygon
{
    public function draw()
    {
        parent::draw();
        $this->_color->colorfulDraw();
    }
}