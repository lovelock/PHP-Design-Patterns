<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:39
=======
 * User: frost
 * Date: 4/15/16
 * Time: 11:13 PM
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
 */

namespace DesignPatterns\MediatorPattern;


interface ColleagueInterface
{
<<<<<<< HEAD
    public function sendMessage(int $id, string $message);

    public function receiveMessage(string $message);

=======
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
    public function setMediator(MediatorInterface $mediator);
}