<?php
require 'vendor/autoload.php';
include 'dbconnect.php';

use Zman\Zman;

$today = date("m/d/Y");
$year = Zman::parse($today)->jewishYear;
echo "Current Jewish Year: $year    ";

$roshHashanaString = Zman::firstDayOfRoshHashana($year)->toFormattedDateString();  //takes current jewish year and returns string of next yontif
$roshHashanaDate = strtotime($roshHashanaString);                                  //turns string from above into date jd style of just numbers, not readable
$roshHashana = date('m/d/Y', $roshHashanaDate);                                    //turns it into readable date in numbers
echo "The date of the upcoming Rosh Hashana is $roshHashana  ";
echo "    $roshHashanaDate    ";

$yomKippurString = Zman::dayOfYomKippur($year)->toFormattedDateString();
$yomKippurDate = strtotime($yomKippurString);
$yomKippur = date('m/d/Y', $yomKippurDate);
echo "The date of the upcoming Yom Kippur is $yomKippur  ";

$sukkosString = Zman::firstDayOfSukkos($year)->toFormattedDateString();
$sukkosDate = strtotime($sukkosString);
$sukkos = date('m/d/Y', $sukkosDate);
echo "The date of the upcoming Sukkos is $sukkos  ";
/*
$shavuosString = Zman::firstDayOfShavuos($year)->toFormattedDateString();
$shavuosDate = strtotime($shavuosString);
$shavuos = date('m/d/Y', $shavuosDate);
echo "The date of the upcoming Shavuos is $shavuos";
/*
$shavuosString = Zman::firstDayOfShavuos($year)->toFormattedDateString();
$shavuosDate = strtotime($shavuosString);
$shavuos = date('m/d/Y', $shavuosDate);
echo "The date of the upcoming Shavuos is $shavuos";
/*
$shavuosString = Zman::firstDayOfShavuos($year)->toFormattedDateString();
$shavuosDate = strtotime($shavuosString);
$shavuos = date('m/d/Y', $shavuosDate);
echo "The date of the upcoming Shavuos is $shavuos";
/*
$shavuosString = Zman::firstDayOfShavuos($year)->toFormattedDateString();
$shavuosDate = strtotime($shavuosString);
$shavuos = date('m/d/Y', $shavuosDate);
echo "The date of the upcoming Shavuos is $shavuos";
/*
$shavuosString = Zman::firstDayOfShavuos($year)->toFormattedDateString();
$shavuosDate = strtotime($shavuosString);
$shavuos = date('m/d/Y', $shavuosDate);
echo "The date of the upcoming Shavuos is $shavuos";
*/