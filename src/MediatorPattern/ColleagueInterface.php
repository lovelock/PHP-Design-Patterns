<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:13 PM
 */

namespace DesignPatterns\MediatorPattern;


interface ColleagueInterface
{
    public function setMediator(MediatorInterface $mediator);
}