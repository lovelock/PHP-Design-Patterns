<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:51 PM
 */

use DesignPatterns\ObserverPattern\CarSubject;
use DesignPatterns\ObserverPattern\StateObserver;

require __DIR__ . '/../../vendor/autoload.php';

$car = new CarSubject();
$stateObserver = new StateObserver();
$car->attach($stateObserver);
$car->detach($stateObserver);
$car->setState('fooooooo');
$car->notify();