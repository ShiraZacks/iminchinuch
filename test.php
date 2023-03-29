<?php
//^V^V^V^V^V^V^V^V^V^//
//this section gets currrent Hebrew calendar date using lots of other info.
// Get current Gregorian date
$gregorianDate = new DateTime();

// Convert Gregorian date to Julian day count
$julianDay = gregoriantojd($gregorianDate->format('m'), $gregorianDate->format('d'), $gregorianDate->format('Y'));

// Calculate Jewish date from Julian day count
$jDate = jdtojewish($julianDay);
//echo $jDate,"   ";

//change that str to  date
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
//get current month name in string form
$monthStr = $monthNames[$jewishDate['mon']];

// Store the final answer in a variable called "hebrewDate"
$hebrewDate = $monthStr . ' ' . $jewishDate['mday'] . ', ' . $jewishDate['year'];

//-=-=-=-=-=-=-=-//
function getHebrewDate()
{
    global $hebrewDate; //global gets variable from outside the function
    echo "Today is $hebrewDate!"; // Outputs todays date in "Nisan 2, 5783" format
}
//-=-=-=-=-=-=-=-//


//^V^V^V^V^V^V^V^V^V^//
