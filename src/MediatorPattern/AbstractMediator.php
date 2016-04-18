<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:38
=======
 * User: frost
 * Date: 4/15/16
 * Time: 11:20 PM
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
 */

namespace DesignPatterns\MediatorPattern;


<<<<<<< HEAD
class AbstractMediator implements MediatorInterface
{

=======
abstract class AbstractMediator implements MediatorInterface
{
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
    protected $_colleagues;

    public function __construct()
    {
        $this->_colleagues = [];
    }

<<<<<<< HEAD
    public function operation($id, $message)
    {
    }

    public function registered($id, ColleagueInterface $colleague)
    {
    }
=======
    abstract public function registered(int $id, ColleagueInterface $colleague);

    abstract public function operation(int $id, string $message);
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
}