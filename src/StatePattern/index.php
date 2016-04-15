<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/16/16
 * Time: 12:29 AM
 */


use DesignPatterns\StatePattern\Context;

require __DIR__ . '/../../vendor/autoload.php';

$context = new Context();
$context->request();
$context->request();
$context->request();