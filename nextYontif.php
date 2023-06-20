<?php
require 'vendor/autoload.php';
include 'dbconnect.php';

use Zman\Zman;


function trueYontif()
{
    $today = Zman::now();
    $currentYontif = Zman::parse($today)->isYuntif(); //this will return true or false (if today is yontif or not)

    if ($currentYontif == true) {
        $result = Zman::parse($today)->holidays;
        $yontifName = implode(', ', $result); //this makes a comma-separated string as opposed to an array
        $printYontif = print_r($yontifName); //if today is a yontif, this will print what yontif it is.
    } else {
        print 'nothing going on today!'; //if not a yontif, this will be the output instead
    };
}

function nextYontif($dates, $findate)
{
    $newDates = array();

    foreach ($dates as $date) {
        $newDates[] = strtotime($date);
    }


    sort($newDates);
    foreach ($newDates as $a) {
        if ($a >= strtotime($findate))
            return $a;
    }
    return end($newDates);
}

$date = $today;
$allDates = array( //have all yomim tovim like this, with hebrew name, english name, and hebrew date
    array('שבואות', 'Shavuos', 'ו סיון'),
    array('סוכות', 'Sukkos', 'טו תשרי'),
);


print_r($allDates[1][0]); //prints סוכות to console
