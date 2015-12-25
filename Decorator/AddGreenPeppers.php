<?php

include_once "constants.php";

class AddGreenPeppers implements BusinessInterface{

    protected $business;

    // Make sure you have two underscores before __construct
    function __construct(BusinessInterface $business)
    {
        $this->business = $business;
    }

    public function buy()
    {
        return GREEN_PEPPERS_PRICE + $this->business->buy();
    }
}