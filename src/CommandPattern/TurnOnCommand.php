<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:22
 */

namespace DesignPatterns\CommandPattern;


class TurnOnCommand extends AbstractCommand
{

    public function execute()
    {
        echo __METHOD__ . "\n";
        $this->_receiver->action();
    }
}