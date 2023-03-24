<?php
function getHebrewDate()
{
    // Get current Gregorian date
    $gregorianDate = new DateTime();

    // Convert Gregorian date to Julian day count
    $julianDay = gregoriantojd($gregorianDate->format('m'), $gregorianDate->format('d'), $gregorianDate->format('Y'));
    echo $julianDay;
    // Calculate Jewish date from Julian day count
    $jewishDate = jdtojewish($julianDay);
    echo $jewishDate;
    // Convert month number to its string representation
    $monthNames = [
        1 => 'Nisan',
        2 => 'Iyar',
        3 => 'Sivan',
        4 => 'Tammuz',
        5 => 'Av',
        6 => 'Elul',
        7 => 'Tishrei',
        8 => 'Cheshvan',
        9 => 'Kislev',
        10 => 'Tevet',
        11 => 'Shevat',
        12 => 'Adar',
        13 => 'Adar II'
    ];
    $monthStr = $monthNames[$jewishDate['month']];
    echo $monthNames;
    echo $monthStr;
    // Store the final answer in a variable called "hebrewDate"
    $hebrewDate = $monthStr . ' ' . $jewishDate['day'] . ', ' . $jewishDate['year'];

    return $hebrewDate;
echo $hebrewDate; // Outputs something like "Nisan 2, 5782"

}
getHebrewDate();