<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:40
=======
 * User: frost
 * Date: 4/15/16
 * Time: 11:14 PM
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
 */

namespace DesignPatterns\MediatorPattern;


abstract class AbstractColleague implements ColleagueInterface
{
    protected $_mediator;

    public function setMediator(MediatorInterface $mediator)
    {
        $this->_mediator = $mediator;
    }

<<<<<<< HEAD
    public function sendMessage(int $id, string $message)
    {
    }

    public function receiveMessage(string $message)
    {
    }
=======
    abstract public function sendMessage(int $id, string $message);

    abstract public function receiveMessage(string $message);
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
}