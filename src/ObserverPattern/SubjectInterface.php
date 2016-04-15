<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午5:36
 */

namespace DesignPatterns\ObserverPattern;


interface SubjectInterface
{
    public function attach(ObserverInterface $observer);

    public function detach(ObserverInterface $observer);

    public function notify();
}