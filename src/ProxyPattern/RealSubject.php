<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:08
 */

namespace DesignPatterns\ProxyPattern;


class RealSubject implements SubjectInterface
{

    public function operation()
    {
        echo __METHOD__ . "\n";
    }
}