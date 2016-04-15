<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:26
 */

use DesignPatterns\CommandPattern\Receiver;
use DesignPatterns\CommandPattern\TurnOnCommand;

require __DIR__ . "/../../vendor/autoload.php";

$turnOnCommand = new TurnOnCommand(new Receiver());
$turnOnCommand->execute();