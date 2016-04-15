<?php
/**
 * Created by PhpStorm.
 * User: frost
 * Date: 4/15/16
 * Time: 11:30 PM
 */

namespace DesignPatterns\ObserverPattern;


interface ObserverInterface
{
    public function update(string $state);

}