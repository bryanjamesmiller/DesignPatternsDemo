<?php
/**
 * Created by PhpStorm.
 * User: B
 * Date: 12/25/2015
 * Time: 12:33 AM
 */

include_once 'HomeData.php';

abstract class HomeChecker {
    protected $successor;

    public abstract function check(HomeData $dataToHandle);

    public function succeedWith(HomeChecker $successor){
        $this->successor = $successor;
    }

    // This passes the request/data to the next HomeChecker subclass,
    // so that it can check the request/data to see if it can "handle"
    // it (in this case, it handles the data by throwing an exception
    // if the data doesn't match the correct settings.
    public function next(HomeData $dataToHandle)
    {
        if($this->successor)
        {
            $this->successor->check($dataToHandle);
        }
    }
}