<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:50
=======
 * User: frost
 * Date: 4/15/16
 * Time: 11:16 PM
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
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