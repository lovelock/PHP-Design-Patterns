<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午2:52
 */

require __DIR__ . '/../../vendor/autoload.php';

use DesignPatterns\DecoratorPattern\AfterDecorator;
use DesignPatterns\DecoratorPattern\BeforeDecorator;
use DesignPatterns\DecoratorPattern\Core;


$core = new Core();
$core->operation();

$ad = new AfterDecorator(new Core());
$ad->operation();

$bd = new BeforeDecorator(new Core());
$bd->operation();