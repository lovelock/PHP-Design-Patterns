<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:20
 */

namespace DesignPatterns\CommandPattern;


class Receiver
{
    public function action()
    {
        echo __METHOD__ . "\n";
    }
}