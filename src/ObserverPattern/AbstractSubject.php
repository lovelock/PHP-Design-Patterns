<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:31 PM
 */

namespace DesignPatterns\ObserverPattern;


abstract class AbstractSubject implements SubjectInterface
{
    protected $_observers = [];
    protected $_state;

    abstract public function attach(ObserverInterface $observer);


    abstract public function detach(ObserverInterface $observer);

    abstract public function notify();
}