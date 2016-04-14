<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午5:25
 */

use DesignPatterns\BuilderPattern\CarBuilder;
use DesignPatterns\BuilderPattern\Director;

require __DIR__ . '/../../vendor/autoload.php';

$director = new Director();
$director->setBuilder(new CarBuilder());
$product = $director->construct();
$product->run();