<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午2:49
 */

namespace DesignPatterns\DecoratorPattern;


class Core implements ComponentInterface
{

    public function operation()
    {
        echo "I am the core function of the system\n";
    }
}