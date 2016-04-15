<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:38
 */

namespace DesignPatterns\MediatorPattern;


class AbstractMediator implements MediatorInterface
{

    protected $_colleagues;

    public function __construct()
    {
        $this->_colleagues = [];
    }

    public function operation($id, $message)
    {
    }

    public function registered($id, ColleagueInterface $colleague)
    {
    }
}