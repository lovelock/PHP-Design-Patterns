<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:02
 */

use DesignPatterns\FlyweightPattern\FlyweightFactory;

require __DIR__ . '/../../vendor/autoload.php';

$factory = new FlyweightFactory();
$flyweight1 = $factory->getFlyweight('state1');
$flyweight1->operation();

$flyweight2 = $factory->getFlyweight('state2');
$flyweight2->operation();

$flyweight3 = $factory->getFlyweight('state1');
$flyweight3->operation();
