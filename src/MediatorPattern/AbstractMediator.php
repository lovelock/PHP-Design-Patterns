<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:20 PM
 */

namespace DesignPatterns\MediatorPattern;


abstract class AbstractMediator implements MediatorInterface
{
    protected $_colleagues;

    public function __construct()
    {
        $this->_colleagues = [];
    }

    abstract public function registered(int $id, ColleagueInterface $colleague);

    abstract public function operation(int $id, string $message);
}