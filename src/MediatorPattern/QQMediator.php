<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:43
=======
 * User: frost
 * Date: 4/15/16
 * Time: 11:24 PM
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
 */

namespace DesignPatterns\MediatorPattern;


class QQMediator extends AbstractMediator
{
<<<<<<< HEAD
    public function registered($id, ColleagueInterface $colleague)
    {
        if (! isset($this->_colleagues[$id])) {
            $colleague->setMediator($this);
            $this->_colleagues[$id] = $colleague;
        }
    }

    public function operation($id, $message)
=======

    public function registered(int $id, ColleagueInterface $colleague)
    {
        $colleague->setMediator($this);
        $this->_colleagues[$id] = $colleague;
    }

    public function operation(int $id, string $message)
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
    {
        $receiver = $this->_colleagues[$id];
        $receiver->receiveMessage($message);
    }
}