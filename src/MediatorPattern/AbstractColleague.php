<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:40
 */

namespace DesignPatterns\MediatorPattern;


abstract class AbstractColleague implements ColleagueInterface
{
    protected $_mediator;

    public function setMediator(MediatorInterface $mediator)
    {
        $this->_mediator = $mediator;
    }

    public function sendMessage(int $id, string $message)
    {
    }

    public function receiveMessage(string $message)
    {
    }
}