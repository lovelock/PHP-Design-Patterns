<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/14
 * Time: 下午5:18
 */

namespace DesignPatterns\BuilderPattern;


interface BuilderInterface
{
    public function __construct();

    public function buildWheel();
    public function buildGlass();
    public function buildSkeleton();
    public function getResult();
}