<?php
/**
 * Created by PhpStorm.
 * User: qingchun1
 * Date: 16/4/15
 * Time: 下午4:37
 */

namespace DesignPatterns\MediatorPattern;


interface MediatorInterface
{
    public function operation($id, $message);
    public function registered($id, ColleagueInterface $colleague);
}