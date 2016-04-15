<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:26 PM
 */

use DesignPatterns\MediatorPattern\QQColleague;
use DesignPatterns\MediatorPattern\QQMediator;

require __DIR__ . '/../../vendor/autoload.php';

$user1 = new QQColleague();
$user2 = new QQColleague();

$mediator = new QQMediator();
$mediator->registered(1, $user1);
$mediator->registered(2, $user2);

$user1->sendMessage(2, 'I am user1');
$user2->sendMessage(1, 'I am user2');