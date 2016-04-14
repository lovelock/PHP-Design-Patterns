<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午12:27
 */

use DesignPatterns\SimpleFactoryPattern\Factory;

require __DIR__ . '/../../vendor/autoload.php';

$productA = Factory::createProduct('A');
$productA->run();

echo "\n";

$productB = Factory::createProduct('B');
$productB->run();