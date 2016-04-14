<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午6:07
 */

namespace DesignPatterns\Tests\AbstractFactoryPattern;

use DesignPatterns\AbstractFactoryPattern\LGFactory;
use DesignPatterns\AbstractFactoryPattern\SumsangFactory;
use PHPUnit_Framework_TestCase;

require __DIR__ . '/../../vendor/autoload.php';

class AbstractFactoryPatternTest extends PHPUnit_Framework_TestCase
{
    function testLGTVWatch()
    {
        $lgTV = LGFactory::createTelevision();
        $watch = $lgTV->watch();

        $this->assertEquals('DesignPatterns\\AbstractFactoryPattern\\LGTelevision::watch', $watch);
    }

    function testSumsangTVWatch()
    {
        $sumsangTV = SumsangFactory::createTelevision();
        $watch = $sumsangTV->watch();

        $this->assertEquals('DesignPatterns\\AbstractFactoryPattern\\SumsangTelevision::watch', $watch);
    }

    function testLGFridgeWatch()
    {
        $lgFridge = LGFactory::createFridge();
        $watch = $lgFridge->freeze();

        $this->assertEquals('DesignPatterns\\AbstractFactoryPattern\\LGFridge::freeze', $watch);
    }

    function testSumsangFridgeWatch()
    {
        $sumsangFridge = SumsangFactory::createFridge();
        $watch = $sumsangFridge->freeze();

        $this->assertEquals('DesignPatterns\\AbstractFactoryPattern\\SumsangFridge::freeze', $watch);
    }


}
