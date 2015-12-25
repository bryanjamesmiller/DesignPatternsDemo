<?php
/**
 * Created by PhpStorm.
 * User: B
 * Date: 12/25/2015
 * Time: 12:35 AM
 */

include_once 'HomeChecker.php';
include_once 'HomeData.php';

class Alarm extends HomeChecker {
    public function check(HomeData $dataToHandle)
    {
        if( ! $dataToHandle->alarmOn)
        {
            var_dump("The alarm is off!");
        }
        $this->next($dataToHandle);
    }
}