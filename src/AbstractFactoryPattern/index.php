<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午5:03
 */


use DesignPatterns\AbstractFactoryPattern\LGFactory;
use DesignPatterns\AbstractFactoryPattern\SumsangFactory;

require __DIR__ . '/../../vendor/autoload.php';

$lgFridge = LGFactory::createFridge();
$lgFridge->freeze();

$lgTV = LGFactory::createTelevision();
$lgTV->watch();


$sumsangFridge = SumsangFactory::createFridge();
$sumsangFridge->freeze();

$sumsangTV = SumsangFactory::createTelevision();
$sumsangTV->watch();