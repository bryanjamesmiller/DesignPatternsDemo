<?php
/**
 * Created by PhpStorm.
 * User: B
 * Date: 12/25/2015
 * Time: 12:33 AM
 */

include_once 'HomeData.php';
include_once 'Locks.php';
include_once 'Lights.php';
include_once 'Alarm.php';

$myLocks = new Locks;
$myLights = new Lights;
$myAlarm = new Alarm;

$myLocks->succeedWith($myLights);
$myLights->succeedWith($myAlarm);

$myLocks->check(new HomeData);