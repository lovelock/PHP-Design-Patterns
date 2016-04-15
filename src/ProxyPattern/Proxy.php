<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:08
 */

namespace DesignPatterns\ProxyPattern;


class Proxy implements SubjectInterface
{

    public function operation()
    {
        $this->beforeOperation();
        (new RealSubject())->operation();
        $this->afterOperation();
    }

    private function beforeOperation()
    {
        echo __METHOD__ . "\n";
    }

    private function afterOperation()
    {
        echo __METHOD__ . "\n";
    }
}