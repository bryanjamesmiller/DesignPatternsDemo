<?php

include_once "constants.php";

class Pizza implements BusinessInterface{
    // Notice how the Pizza is the base class that doesn't have a constructor
    // and doesn't add anything to the return value.
    public function buy()
    {
        return PIZZA_PRICE;
    }
}