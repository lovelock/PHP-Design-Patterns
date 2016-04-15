<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午5:45
 */

namespace DesignPatterns\ObserverPattern;


abstract class AbstractObserver implements ObserverInterface
{
    protected $_observerState;

    public function update(SubjectInterface $subject)
    {
    }
}