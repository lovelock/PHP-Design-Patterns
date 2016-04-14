<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午6:27
 */

namespace DesignPatterns\Tests\SingletonPattern;


use DesignPatterns\SingletonPattern\Singleton;
use PHPUnit_Framework_TestCase;

require __DIR__ . '/../../vendor/autoload.php';


class SingletonPatternTest extends PHPUnit_Framework_TestCase
{
    function testInstance()
    {
        $singleton = Singleton::getInstance();

        $this->assertTrue(is_object($singleton));
    }
}
