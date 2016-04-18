<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午5:45
=======
 * User: frost
 * Date: 4/15/16
 * Time: 11:31 PM
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
 */

namespace DesignPatterns\ObserverPattern;


abstract class AbstractObserver implements ObserverInterface
{
    protected $_observerState;

<<<<<<< HEAD
    public function update(SubjectInterface $subject)
    {
    }
=======
    abstract public function update(string $state);
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
}