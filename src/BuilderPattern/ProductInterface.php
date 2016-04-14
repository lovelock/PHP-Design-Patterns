<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午5:29
 */

namespace DesignPatterns\BuilderPattern;


interface ProductInterface
{
    public function setWheel();
    public function setGlass();
    public function setSkeleton();
    public function run();
}