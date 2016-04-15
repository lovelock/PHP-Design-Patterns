<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:50
 */

namespace DesignPatterns\MediatorPattern;


class QQColleague extends AbstractColleague
{
    public function sendMessage(int $id, string $message)
    {
        $this->_mediator->operation($id, $message);
    }

    public function receiveMessage(string $message)
    {
        echo $message . "\n";
    }
}