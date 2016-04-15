<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:31 PM
 */

namespace DesignPatterns\ObserverPattern;


interface SubjectInterface
{
    public function attach(ObserverInterface $observer);

    public function detach(ObserverInterface $observer);

    public function notify();

}