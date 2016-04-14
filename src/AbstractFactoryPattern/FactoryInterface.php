<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午3:38
 */

namespace DesignPatterns\AbstractFactoryPattern;


interface FactoryInterface
{
    /**
     * @return FridgeInterface
     */
    public static function createFridge() : FridgeInterface;

    /**
     * @return TelevisionInterface
     */
    public static function createTelevision() : TelevisionInterface;
}