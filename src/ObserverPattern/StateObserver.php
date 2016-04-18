<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午5:38
=======
 * User: frost
 * Date: 4/15/16
 * Time: 11:51 PM
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
 */

namespace DesignPatterns\ObserverPattern;


class StateObserver extends AbstractObserver
{

<<<<<<< HEAD
    public function update(SubjectInterface $subject)
    {
        $this->_observerState = $subject->getState();

=======
    public function update(string $state)
    {
        $this->_observerState = $state;
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
        echo $this->_observerState . "\n";
    }
}