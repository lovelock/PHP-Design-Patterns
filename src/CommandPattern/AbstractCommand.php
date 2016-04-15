<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:23
 */

namespace DesignPatterns\CommandPattern;


class AbstractCommand implements CommandInterface
{
    protected $_receiver;

    public function __construct(Receiver $receiver)
    {
        $this->_receiver = $receiver;
    }

    public function execute()
    {
    }
}