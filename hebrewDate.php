<?php
//this section gets currrent Hebrew calendar date as $hebrewDate
require 'vendor/autoload.php';
include 'dbconnect.php';

use Zman\Zman;


$zman = Zman::now();
$monthNum = $zman->jewishMonth;        
$now = $zman->toFormattedJewishDateString();


/*

// Get current Gregorian date
$gregorianDate = new DateTime();

// Convert Gregorian date to Julian day count
$julianDay = gregoriantojd($gregorianDate->format('m'), $gregorianDate->format('d'), $gregorianDate->format('Y'));

// Calculate Jewish date from Julian day count
$jDate = jdtojewish($julianDay);

//change str to  date
$toTime = strtotime($jDate);
$jewishDate = getdate($toTime);

// Convert month number to its string representation
$monthNames = [
    1 => 'Tishrei',
    2 => 'Cheshvan',
    3 => 'Kislev',
    4 => 'Teves',
    5 => 'Shevat',
    6 => 'Adar Aleph',
    7 => 'Adar',
    8 => 'Nisan',
    9 => 'Iyar',
    10 => 'Sivan',
    11 => 'Tamuz',
    12 => 'Av',
    13 => 'Elul'
];

//get current month number
$monthNum = $jewishDate['mon'];

//get current month name in string form
$monthStr = $monthNames[$jewishDate['mon']];

// Store the final answer in a variable called "$hebrewDate"
$hebrewDate = $monthStr . ' ' . $jewishDate['mday'] . ', ' . $jewishDate['year'];

//-=-=-=-=-=-=-=-//
// returns the hebrew date, this function is used in index.php.
function getHebrewDate(){
    global $hebrewDate; //global gets variable from outside the function
    echo "Today is $hebrewDate!"; // Outputs todays date in "Nisan 2, 5783" format
}
*/