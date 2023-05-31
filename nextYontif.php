<?php
require 'vendor/autoload.php';
include 'dbconnect.php';
//gets this week's parsha in variable named $currentParsha
use Zman\Zman;

$today = Zman::now();
$currentYontif = Zman::parse($today)->isYuntif();

if ($currentYontif == true) {
    $result = Zman::parse($today)->holidays;
    $yontifName = implode(', ', $result); //this makes a comma-separated string as opposed to an array
    $printYontif = print_r($yontifName);
} else {
    print 'nothing going on today!';
};

/*
    $dates = array
    (
        '0' => "2013-02-18 05:14:54",
        '1' => "2013-02-12 01:44:03",
        '2' => "2013-02-05 16:25:07",
        '3' => "2013-01-29 02:00:15",
        '4' => "2013-01-27 18:33:45"
    );

    function closest($dates, $findate)
    {
        $newDates = array();

        foreach($dates as $date)
        {
            $newDates[] = strtotime($date);
        }

        echo "<pre>";
        print_r($newDates);
        echo "</pre>";

        sort($newDates);
        foreach ($newDates as $a)
        {
            if ($a >= strtotime($findate))
                return $a;
        }
        return end($newDates);
    }

    $values = closest($dates, date('2013-02-04 14:11:16'));
    echo date('Y-m-d h:i:s', $values);
*/

/*

$date = '02/21/2019';
$allDates = array(
    '2019-02-17',
    '02/09/2019',
    '02/23/2019',
    '02/18/2019',
    '02/25/2019',
    '03/04/2019',
    '03/11/2019',
    '03/18/2019',
    '03/25/2019',
    '04/01/2019',
    '04/08/2019',
);
function date_sort($a, $b)
{
    return strtotime($a) - strtotime($b);
}
usort($allDates, "date_sort");
foreach ($allDates as $count => $dateSingle) {
    if (strtotime($date) < strtotime($dateSingle)) {
        $nextDate = date('m-d', strtotime($dateSingle));
        break;
    }
}
echo $nextDate;
*/