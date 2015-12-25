<?php

include_once "constants.php";

class AddOlives implements BusinessInterface{

    protected $business;

    // Make sure you have two underscores before __construct
    function __construct(BusinessInterface $business)
    {
        $this->business = $business;
    }

    public function buy()
    {
        return OLIVES_PRICE + $this->business->buy();
    }
}