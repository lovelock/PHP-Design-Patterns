<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午6:58
 */

namespace DesignPatterns\BridgePattern;


class Yellow implements ColorInterface
{

    public function colorfulDraw()
    {
        echo __METHOD__;
    }
}