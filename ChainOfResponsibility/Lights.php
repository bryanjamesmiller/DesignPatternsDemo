<?php
/**
 * Created by PhpStorm.
 * User: B
 * Date: 12/25/2015
 * Time: 12:35 AM
 */

include_once 'HomeChecker.php';
include_once 'HomeData.php';

class Lights extends HomeChecker {
    public function check(HomeData $dataToHandle)
    {
        if( ! $dataToHandle->lightsOn)
        {
            var_dump("The lights are on!");
        }
        $this->next($dataToHandle);
    }
}