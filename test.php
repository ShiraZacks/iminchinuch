<?php
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
    11 => 'Tammuz',
    12 => 'Av',
    13 => 'Elul'
];
$monthStr = $monthNames[$jewishDate['mon']];
// Store the final answer in a variable called "hebrewDate"
$hebrewDate = $monthStr . ' ' . $jewishDate['mday'] . ', ' . $jewishDate['year'];

function getHebrewDate()
{
    global $hebrewDate; //global gets variable from outside the function
echo "Today is $hebrewDate!"; // Outputs todays date in "Nisan 2, 5783" format
}
getHebrewDate();


function monthPost(){
global $monthStr;

    if ($monthStr == "Tishri") {
        ('.Tishrei').css('display', 'block');
      } else if ($monthStr == "Heshvan") {
        ('.Cheshvan').css('display', 'block');
      } else if ($monthStr == "Kislev") {
        ('.Kislev').css('display', 'block');
      } else if ($monthStr == "Tevet") {
        ('.Teves').css('display', 'block');
      } else if ($monthStr == "Shevat") {
        ('.Shevat').css('display', 'block');
      } else if ($monthStr == "Adar I") {
        ('.AdarAleph').css('display', 'block');
      } else if ($monthStr == "Adar") {
        ('.Adar').css('display', 'block');
      } else if ($monthStr == "Nisan") {
        ('.Nissan').css('display', 'block');
      } else if ($monthStr == "Iyar") {
        ('.Iyar').css('display', 'block');
      } else if ($monthStr == "Sivan") {
        ('.Sivan').css('display', 'block');
      } else if ($monthStr == "Tamuz") {
        ('.Tamuz').css('display', 'block');
      } else if ($monthStr == "Av") {
        ('.Av').css('display', 'block');
      } else if ($monthStr == "Elul") {
      } else{
        print "Something went wrong... Is today not a date?? 🤨";
      }
}