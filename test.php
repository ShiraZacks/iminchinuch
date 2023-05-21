<?php
require 'vendor/autoload.php';
include 'dbconnect.php';
//gets this week's parsha in variable named $currentParsha
use Zman\Zman;

$today = Zman::now();
$soon = '5/27/2023';
$currentYontif = Zman::parse($today)->isYuntif();

if ($currentYontif == true) {
$result = Zman::parse($today)->holidays; 
$yontifName = implode(', ', $result); //this makes a comma-separated string as opposed to an array
print_r($yontifName);
}else{
    print'nothing going on today!';
};


