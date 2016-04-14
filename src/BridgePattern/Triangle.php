<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午6:54
 */

namespace DesignPatterns\BridgePattern;


class Triangle extends AbstractPolygon
{
    public function draw()
    {
        parent::draw();
        $this->_color->colorfulDraw();
    }
}