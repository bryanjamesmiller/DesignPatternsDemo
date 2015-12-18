<?php

include_once "constants.php";

class AddGreenPeppers implements Business{

    protected $business;

    // Make sure you have two underscores before __construct
    function __construct(Business $business)
    {
        $this->business = $business;
    }

    public function buy()
    {
        return GREEN_PEPPERS_PRICE + $this->business->buy();
    }
}