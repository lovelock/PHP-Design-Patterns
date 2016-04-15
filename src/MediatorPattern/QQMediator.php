<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:24 PM
 */

namespace DesignPatterns\MediatorPattern;


class QQMediator extends AbstractMediator
{

    public function registered(int $id, ColleagueInterface $colleague)
    {
        $colleague->setMediator($this);
        $this->_colleagues[$id] = $colleague;
    }

    public function operation(int $id, string $message)
    {
        $receiver = $this->_colleagues[$id];
        $receiver->receiveMessage($message);
    }
}