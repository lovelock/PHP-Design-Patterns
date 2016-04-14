<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午12:16
 */

namespace DesignPatterns\SimpleFactoryPattern;

require __DIR__ . '/../../vendor/autoload.php';

class Factory
{
    const CONFIG_FILE = __DIR__ . '/config/config.xml';

    /**
     * return different instances depending on the string passed in
     * @param string|string $productName
     * @return ConcreteProductA|ConcreteProductB
     */
    public static function createProduct($productName)
    {
        $config = simplexml_load_file(self::CONFIG_FILE);

        foreach ($config as $k => $v) {
            if ($v->name->__toString() === $productName) {
                $className = 'DesignPatterns\\SimpleFactoryPattern\\' . $v->className->__toString();
                return new $className();
            }

        }

        return null;
    }
}