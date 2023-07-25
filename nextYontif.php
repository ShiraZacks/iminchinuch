<?php
require 'vendor/autoload.php';
include 'dbconnect.php';

use Zman\Zman;

$today = Zman::now();

function trueYontif()
{
    $today = Zman::now();
    $currentYontif = Zman::parse($today)->isYuntif(); //this will return true or false (if today is yontif or not)

    if ($currentYontif == true) {
        $result = Zman::parse($today)->holidays;
        $yontifName = implode(', ', $result); //this makes a comma-separated string as opposed to an array
        $printYontif = print_r($yontifName); //if today is a yontif, this will print what yontif it is.
        echo $printYontif;
    } else {
        print 'Today is not a Yontif. '; //if not a yontif, this will be the output instead
    };
}

trueYontif();
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


// print_r($allDates[1][0]); //prints סוכות to console
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

//tishrei is first month according to zman/zman
$year = intval(Zman::now()->jewishYear);
$holidays = array( //have all yomim tovim like this, with hebrew name, english name, and hebrew date
    array('שבואות', 'Shavuos', $month = 06,$day=06,$year), //shavuos is 2 days in diaspora
    // array('שבואות', 'Shavuos',  $month = 06,$day=07,$year),
    array('סוכות', 'Sukkos', $month = 01,$day=15,$year), //sukkos is 6 days in diaspora, simchas torah and shmini atzeres are last two days
    // array('סוכות', 'Sukkos',  $month = 01,$day=16,$year),
    // array('סוכות', 'Sukkos',  $month = 01,$day=17,$year),
    // array('סוכות', 'Sukkos',  $month = 01,$day=18,$year),
    // array('סוכות', 'Sukkos',  $month = 01,$day=19,$year),
    // array('סוכות', 'Sukkos',  $month = 01,$day=20,$year),
    array('סוכות', 'Sukkos',  $month = 01,$day=21,$year), //simchas torah and shemini atzeres
    // array('סוכות', 'Sukkos',  $month = 01,$day=22,$year), //simchas torah and shemini atzeres
    array('שבואות', 'Purim',  $month = 06,$day=07,$year),
    array('שבואות', 'Pesach',  $month = 06,$day=07,$year),
    array('שבואות', 'Chanuka',  $month = 06,$day=07,$year),
    array('שבואות', 'Yom Kippur',  $month = 06,$day=07,$year),
    array('שבואות', 'Rosh Hashana',  $month = 06,$day=07,$year),
    array('שבואות', 'Tu B\'Shvat',  $month = 06,$day=07,$year),
    array('שבואות', 'Shavuos',  $month = 06,$day=07,$year),
    array('שבואות', 'Shavuos',  $month = 06,$day=07,$year),
    array('שבואות', 'Shavuos',  $month = 06,$day=07,$year),
    array('שבואות', 'Shavuos',  $month = 06,$day=07,$year),

);
// Loop through each holiday in the array.
foreach ($holidays as $holiday => $var) {
    $jDate = Zman::createFromJewishDate($year, $month, $day);//$year, $month, $day);
    $gDate = $jDate->toFormattedDateString();
// echo  $jDate;
    // Calculate the difference in days between today's date and the holiday.
    $diff = abs(strtotime($today) - strtotime($gDate)) / (60 * 60 * 24);
}
print_r($holidays[2][4]); //print array


function getClosestHoliday($holidays)
{
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