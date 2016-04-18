<?php
/**
 * Created by PhpStorm.
<<<<<<< HEAD
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:37
=======
 * User: frost
 * Date: 4/15/16
 * Time: 11:10 PM
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
 */

namespace DesignPatterns\MediatorPattern;


interface MediatorInterface
{
<<<<<<< HEAD
    public function operation($id, $message);
    public function registered($id, ColleagueInterface $colleague);
=======
    public function registered(int $id, ColleagueInterface $colleague);
    public function operation(int $id, string $message);
>>>>>>> b101da0fb0639cdc2920205b46784932aacbef9c
}