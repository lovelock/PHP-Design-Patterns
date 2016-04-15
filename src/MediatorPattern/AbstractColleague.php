<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:14 PM
 */

namespace DesignPatterns\MediatorPattern;


abstract class AbstractColleague implements ColleagueInterface
{
    protected $_mediator;

    public function setMediator(MediatorInterface $mediator)
    {
        $this->_mediator = $mediator;
    }

    abstract public function sendMessage(int $id, string $message);

    abstract public function receiveMessage(string $message);
}