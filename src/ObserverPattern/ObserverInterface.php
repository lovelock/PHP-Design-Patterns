<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午5:36
 */

namespace DesignPatterns\ObserverPattern;


interface ObserverInterface
{
    public function update(SubjectInterface $subject);
}