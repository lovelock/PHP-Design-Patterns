<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:43
 */

namespace DesignPatterns\MediatorPattern;


class QQMediator extends AbstractMediator
{
    public function registered($id, ColleagueInterface $colleague)
    {
        if (! isset($this->_colleagues[$id])) {
            $this->_colleagues[$id] = $colleague;
        }
    }

    public function operation($id, $message)
    {
        $receiver = $this->_colleagues[$id];
        $receiver->receiveMessage($message);
    }
}