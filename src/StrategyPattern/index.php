<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/5
 * Time: 下午6:36
 */


use DesignPatterns\StrategyPattern\Context;
use DesignPatterns\StrategyPattern\FooStrategy;
use DesignPatterns\StrategyPattern\LiveStrategy;

require __DIR__ . '/../../vendor/autoload.php';

$context = new Context();
$context->setStrategy(new LiveStrategy('100000'))->getTargetUsers();

$context1 = new Context();
$context->setStrategy(new FooStrategy('20000'))->getTargetUsers();

