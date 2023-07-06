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
echo "The date of the upcoming Rosh Hashana is $roshHashana  ";                    //currently returns past date if it happened this year already
//                                                                                 //need to figure out how to change that, so if it already happened it adds a year to the $year variable
$yomKippurString = Zman::dayOfYomKippur($year)->toFormattedDateString();
$yomKippurDate = strtotime($yomKippurString);
$yomKippur = date('m/d/Y', $yomKippurDate);
echo "The date of the upcoming Yom Kippur is $yomKippur  ";

$sukkosString = Zman::firstDayOfSukkos($year)->toFormattedDateString();
$sukkosDate = strtotime($sukkosString);
$sukkos = date('m/d/Y', $sukkosDate);
echo "The date of the upcoming Sukkos is $sukkos  ";

$shminiAtzeresString = Zman::dayOfShminiAtzeres($year)->toFormattedDateString();
$shminiAtzeresDate = strtotime($shminiAtzeresString);
$shminiAtzeres = date('m/d/Y', $shminiAtzeresDate);
echo "The date of the upcoming Shmini Atzeres is $shminiAtzeres   ";

$simchasTorahString = Zman::dayOfSimchasTorah($year)->toFormattedDateString();
$simchasTorahDate = strtotime($simchasTorahString);
$simchasTorah = date('m/d/Y', $simchasTorahDate);
echo "The date of the upcoming Simchas Torah is $simchasTorah   ";

$chanukaString = Zman::firstDayOfChanuka($year)->toFormattedDateString();
$chanukaDate = strtotime($chanukaString);
$chanuka = date('m/d/Y', $chanukaDate);
echo "The date of the upcoming Chanuka is $chanuka   ";

$tuBishvatString = Zman::dayOfTuBishvat($year)->toFormattedDateString();
$tuBishvatDate = strtotime($tuBishvatString);
$tuBishvat = date('m/d/Y', $tuBishvatDate);
echo "The date of the upcoming Tu Bishvat is $tuBishvat   ";
/*
$shavuosString = Zman::firstDayOfShavuos($year)->toFormattedDateString();
$shavuosDate = strtotime($shavuosString);
$shavuos = date('m/d/Y', $shavuosDate);
echo "The date of the upcoming Shavuos is $shavuos   ";
/*
$shavuosString = Zman::firstDayOfShavuos($year)->toFormattedDateString();
$shavuosDate = strtotime($shavuosString);
$shavuos = date('m/d/Y', $shavuosDate);
echo "The date of the upcoming Shavuos is $shavuos   ";
/*
$shavuosString = Zman::firstDayOfShavuos($year)->toFormattedDateString();
$shavuosDate = strtotime($shavuosString);
$shavuos = date('m/d/Y', $shavuosDate);
echo "The date of the upcoming Shavuos is $shavuos   ";
/*
$shavuosString = Zman::firstDayOfShavuos($year)->toFormattedDateString();
$shavuosDate = strtotime($shavuosString);
$shavuos = date('m/d/Y', $shavuosDate);
echo "The date of the upcoming Shavuos is $shavuos   ";
/*
$shavuosString = Zman::firstDayOfShavuos($year)->toFormattedDateString();
$shavuosDate = strtotime($shavuosString);
$shavuos = date('m/d/Y', $shavuosDate);
echo "The date of the upcoming Shavuos is $shavuos   ";
*/