<?php

require_once "AdapterClass.php";
require_once "Kindle.php";

class Person
{
    public function Read(){
        $myKindle = new AdapterClass(new Kindle);
        echo $myKindle->open_book() . "<br>";
        echo $myKindle->turn_page() . "<br>";
    }
}

$myPerson = new Person();
$myPerson->Read();