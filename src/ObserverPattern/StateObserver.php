<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午5:38
 */

namespace DesignPatterns\ObserverPattern;


class StateObserver extends AbstractObserver
{

    public function update(SubjectInterface $subject)
    {
        $this->_observerState = $subject->getState();

        echo $this->_observerState . "\n";
    }
}