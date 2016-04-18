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

$observer = new StateObserver();
$sub = new CarSubject();
$sub->attach($observer);
$sub->setState('i am a state');
$sub->notify();
$sub->detach($observer);
$sub->setState('i am another state');
$sub->notify();