<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:39
 */

namespace DesignPatterns\MediatorPattern;


interface ColleagueInterface
{
    public function sendMessage(int $id, string $message);

    public function receiveMessage(string $message);

    public function setMediator(MediatorInterface $mediator);
}