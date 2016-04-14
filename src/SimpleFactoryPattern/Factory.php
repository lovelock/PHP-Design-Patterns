<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午12:16
 */

namespace DesignPatterns\SimpleFactoryPattern;


class Factory
{
    /**
     * return different instances depending on the string passed in
     * @param string|string $productName
     * @return ConcreteProductA|ConcreteProductB
     */
    public static function createProduct($productName)
    {
        if ('A' === $productName) {
            return new ConcreteProductA();
        } elseif ('B' === $productName) {
            return new ConcreteProductB();
        }

        return null;
    }
}