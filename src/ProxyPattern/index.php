<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:12
 */

use DesignPatterns\ProxyPattern\Proxy;

require __DIR__ . "/../../vendor/autoload.php";

$object = new Proxy();
$object->operation();