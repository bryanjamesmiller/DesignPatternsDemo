<?php
/**
 * Created by PhpStorm.
 * User: B
 * Date: 12/25/2015
 * Time: 12:34 AM
 */

include_once 'HomeChecker.php';
include_once 'HomeData.php';

class Locks extends HomeChecker {
    public function check(HomeData $dataToHandle)
    {
        if( ! $dataToHandle->locked)
        {
            var_dump("The doors are not locked!");
        }
        $this->next($dataToHandle);
    }
}