<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午6:00
 */

use DesignPatterns\AdapterPattern\Adaptee;
use DesignPatterns\AdapterPattern\Adapter;

require __DIR__ . '/../../vendor/autoload.php';

$target = new Adapter(new Adaptee());
$target->request();