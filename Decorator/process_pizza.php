<?php
/**
 * Decorator pattern example.
 *
 * Each class is nice and independent from the others, so you don't have to ever change it again,
 * (except for perhaps the price).  Once it is up and running, you can just leave it alone!
 */

include_once "Business.php";
include_once "Pizza.php";
include_once "AddOlives.php";
include_once "AddGreenPeppers.php";

if(isset($_POST['pizza']) && $_POST['pizza']) {
    $cost = new Pizza();
    echo "<br>" . "The pizza costs: " . $cost->buy() . "<br>";

    if(isset($_POST['olives']) && $_POST['olives']) {
        $cost = new AddOlives($cost);
        echo "Subtotal with olives added is: " . $cost->buy() . "<br>";
    }
    if(isset($_POST['green_peppers']) && $_POST['green_peppers']) {
        $cost = new AddGreenPeppers($cost);
        echo "Subtotal with green peppers added is: " . $cost->buy() . "<br>";
    }
    echo "Grand Total: " . $cost->buy() . "<br>";
} else {
    echo "You did not order a pizza.";
}