<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:54
 */

require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\MediatorPattern\QQColleague;
use DesignPatterns\MediatorPattern\QQMediator;

/**
 * 但是这样就让mediator和colleague互相依赖了
 */
$mediator = new QQMediator();
$user1 = new QQColleague($mediator);
$user2 = new QQColleague($mediator);
$mediator->registered(1, $user1);
$mediator->registered(2, $user2);

$user1->sendMessage(2, "I am user1");
$user2->sendMessage(1, "I am user2");

/**
 * 可以把设置mediator的步骤放在registered中
 */

