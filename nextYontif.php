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

/*-|-|-|-|-|-|-|-|-|-|-*/
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
/*-|-|-|-|-|-|-|-|-|-|-*/


/**
* Returns the date in the $holidays array that is closest to today's date.
*
* @param array $holidays An array of holiday dates in the format "MM-DD-YYYY".
* @return string The date in the $holidays array that is closest to today's date.
*/

/* get the date of the jewish holiday.
    change to gregorian date. 
    compare that date with today's date, by using strtotime($variable)-strtotime($variable2)
    but make sure its abs so its positive difference, next date and not the last one. 
    loop thru all holidays, till you find the closest one.
    loop looks like this:

*/

//tishrei is first month according to zman
$year = Zman::now("YYYY");
$holidays = array( //have all yomim tovim like this, with hebrew name, english name, and hebrew date
    "שבואות"=>"06-06-"+$year,
    array('שבואות', 'Shavuos', '06-06'),//shavuos is 2 days in diaspora
    array('שבואות', 'Shavuos', '06-07'),
    array('סוכות', 'Sukkos', '01-15'),//sukkos is 8 days in diaspora, simchas torah and shmini atzeres are last two days
    array('סוכות', 'Sukkos', '01-16'),
    array('סוכות', 'Sukkos', '01-17'),
    array('סוכות', 'Sukkos', '01-18'),
    array('סוכות', 'Sukkos', '01-19'),
    array('סוכות', 'Sukkos', '01-20'),
    array('סוכות', 'Sukkos', '01-21'),//simchas torah and shemini atzeres
    array('סוכות', 'Sukkos', '01-22'),//simchas torah and shemini atzeres
);
// Loop through each holiday in the array.
foreach ($holidays as $holiday=>$var) {
    $jDate = Zman::createFromJewishDate($var);
    $gDate = $jDate->toFormattedDateString(); 

// Calculate the difference in days between today's date and the holiday.
$diff = abs(strtotime($today) - strtotime($gDate)) / (60 * 60 * 24);
}



function getClosestHoliday($holidays) {
// Get today's date in the format "YYYY-MM-DD".
$today = date('Y-m-d');

// Initialize the closest holiday to the first holiday in the array.
$closestHoliday = $holidays[0];

// Loop through each holiday in the array.
foreach ($holidays as $holiday) {
// Calculate the difference in days between today's date and the holiday.
$diff = abs(strtotime($today) - strtotime($holiday)) / (60 * 60 * 24);

// If the current holiday is closer to today than the previous closest holiday,
// update the closest holiday to the current holiday.
if ($diff < abs(strtotime($today) - strtotime($closestHoliday)) / (60 * 60 * 24)) {
$closestHoliday = $holiday;
}
}

// Return the closest holiday.
return $closestHoliday;
}
/*

Here's how the function works:

1. The function takes an array of holiday dates as its parameter.
2. It gets today's date in the format "YYYY-MM-DD" using the `date()` function.
3. It initializes the closest holiday to the first holiday in the array.
4. It loops through each holiday in the array and calculates the difference in days between today's date and the holiday using the `strtotime()` function.
5. If the current holiday is closer to today than the previous closest holiday, the closest holiday is updated to the current holiday.
6. Finally, the function returns the closest holiday.

Note that the `strtotime()` function is used to convert the date strings to Unix timestamps, which can be used to calculate the difference in days between two dates. Also, the `abs()` function is used to ensure that the difference in days is always positive.
*/