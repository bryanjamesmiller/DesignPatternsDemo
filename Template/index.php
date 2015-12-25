<?php
/**
 * Created by PhpStorm.
 * User: B
 * Date: 12/24/2015
 * Time: 11:34 PM
 */
include_once 'TurkeySub.php';
include_once 'VeggieSub.php';

var_dump("********Making a Turkey Sub***************");
$myTurkeySub = new TurkeySub();
$myTurkeySub->make();


var_dump("********Making a Veggie Sub***************");
$myVeggieSub = new VeggieSub();
$myVeggieSub->make();