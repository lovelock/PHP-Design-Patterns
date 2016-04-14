<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午7:04
 */

use DesignPatterns\BridgePattern\Red;
use DesignPatterns\BridgePattern\Triangle;
use DesignPatterns\BridgePattern\Yellow;

require __DIR__ .'/../../vendor/autoload.php';

$triangle = new Triangle();

$triangle->setColor(new Red());
$triangle->draw();

echo "\n";

$triangle->setColor(new Yellow());
$triangle->draw();