<?php
require 'vendor/autoload.php';

use Zman\Zman;

$today = new DateTime();
$currentYontif = Zman::parse('December 17, 2017')->isYuntif();

if ($currentYontif == true){
    print "yup!";}else{
        print "nope!";
    }
