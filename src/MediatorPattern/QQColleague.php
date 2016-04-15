<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:16 PM
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