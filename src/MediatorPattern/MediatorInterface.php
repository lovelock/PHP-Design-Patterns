<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:10 PM
 */

namespace DesignPatterns\MediatorPattern;


interface MediatorInterface
{
    public function registered(int $id, ColleagueInterface $colleague);
    public function operation(int $id, string $message);
}