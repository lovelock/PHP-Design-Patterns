<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午5:50
 */

use DesignPatterns\ObserverPattern\CarSubject;
use DesignPatterns\ObserverPattern\StateObserver;

require __DIR__ . '/../../vendor/autoload.php';

$observer = new StateObserver();
$sub = new CarSubject();
$sub->attach($observer);
$sub->setState('i am a state');
$observer->update($sub);
$sub->detach($observer);
$sub->setState('i am another state');
$observer->update($sub);
