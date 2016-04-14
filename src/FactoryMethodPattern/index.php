<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午3:26
 */

use DesignPatterns\FactoryMethodPattern\DatabaseLogFactory;
use DesignPatterns\FactoryMethodPattern\FileLogFactory;

require __DIR__ . '/../../vendor/autoload.php';

$fileLog = FileLogFactory::createLog();
$fileLog->writeLog();

echo "\n";

$databaseLog = DatabaseLogFactory::createLog();
$databaseLog->writeLog();