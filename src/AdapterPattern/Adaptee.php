<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午5:57
 */

namespace DesignPatterns\AdapterPattern;


class Adaptee
{
    public function specificRequest()
    {
        echo __METHOD__;
    }
}