<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/16/16
 * Time: 12:19 AM
 */

namespace DesignPatterns\StatePattern;


class Context extends AbstractContext
{
    public function request()
    {
        $this->_state->handle($this);
    }

    public function changeState(AbstractState $state)
    {
        $this->_state = $state;
    }
}