<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午6:57
 */

namespace DesignPatterns\BridgePattern;


class Red implements ColorInterface
{

    public function colorfulDraw()
    {
        echo __METHOD__;
    }
}