<?php

require 'vendor/autoload.php';
include 'dbconnect.php';

use Zman\Zman;

function test()
{

    $today = date("m/d/Y");
    $year = Zman::parse($today)->jewishYear;
    echo "Current Jewish Year: $year    ";

    $roshHashanaString = Zman::firstDayOfRoshHashana($year)->toFormattedDateString();  //takes current jewish year and returns string of next yontif
    $roshHashanaDate = strtotime($roshHashanaString);                                  //turns string from above into date jd style of just numbers, not readable
    $roshHashana = date('m/d/Y', $roshHashanaDate);                                    //turns it into readable date in numbers
    if ($roshHashana > $today) {                                                       //IF PASSED
        $year = $year + 1;                                                             //ADD A YEAR
        $roshHashanaString = Zman::firstDayOfRoshHashana($year)->toFormattedDateString();  
        $roshHashanaDate = strtotime($roshHashanaString);                              //DOES IT AGAIN
        $roshHashana = date('m/d/Y', $roshHashanaDate);
        echo "The date of the upcoming Rosh Hashana is $roshHashana  ";                //RETURNS CORRECT DATE, {NEXT YEAR}ELSE{THIS YEAR}
    } else {
        echo "The date of the upcoming Rosh Hashana is $roshHashana  ";
    }
};

test();
/*
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

$purimString = Zman::dayOfPurim($year)->toFormattedDateString();
$purimDate = strtotime($purimString);
$purim = date('m/d/Y', $purimDate);
echo "The date of the upcoming Purim is $purim   ";

$shushanPurimString = Zman::dayOfShushanPurim($year)->toFormattedDateString();
$shushanPurimDate = strtotime($shushanPurimString);
$shushanPurim = date('m/d/Y', $shushanPurimDate);
echo "The date of the upcoming Shushan Purim is $shushanPurim   ";
/*
$purimKattanString = Zman::dayOfPurimKattan($year)->toFormattedDateString(); // TODO make purim kattan work if not leap year
$purimKattanDate = strtotime($purimKattanString);
$purimKattan = date('m/d/Y', $purimKattanDate);
if($month === 6 && !isJewishLeapYear($year)){
    echo "This is not a leap year, no Purim Kattan!";
}else{
    echo "The date of the upcoming Purim Kattan is $purimKattan   ";
}
*//*
$pesachString = Zman::firstDayOfPesach($year)->toFormattedDateString();
$pesachDate = strtotime($pesachString);
$pesach = date('m/d/Y', $pesachDate);
echo "The date of the upcoming Pesach is $pesach   ";

$pesachSheniString = Zman::dayOfPesachSheni($year)->toFormattedDateString();
$pesachSheniDate = strtotime($pesachSheniString);
$pesachSheni = date('m/d/Y', $pesachSheniDate);
echo "The date of the upcoming Pesach Sheni is $pesachSheni   ";

$shavuosString = Zman::firstDayOfShavuos($year)->toFormattedDateString();
$shavuosDate = strtotime($shavuosString);
$shavuos = date('m/d/Y', $shavuosDate);
echo "The date of the upcoming Shavuos is $shavuos   ";

$yomKippurString = Zman::dayOfYomKippur($year)->toFormattedDateString();
$yomKippurDate = strtotime($yomKippurString);
$yomKippur = date('m/d/Y', $yomKippurDate);
echo "The date of the upcoming Yom Kippur is $yomKippur   ";

$tzomGedaliahString = Zman::dayOfTzomGedaliah($year)->toFormattedDateString();
$tzomGedaliahDate = strtotime($tzomGedaliahString);
$tzomGedaliah = date('m/d/Y', $tzomGedaliahDate);
echo "The date of the upcoming Tzom Gedaliah is $tzomGedaliah   ";

$taanisEstherString = Zman::dayOfTaanisEsther($year)->toFormattedDateString();
$taanisEstherDate = strtotime($taanisEstherString);
$taanisEsther = date('m/d/Y', $taanisEstherDate);
echo "The date of the upcoming Taanis Esther is $taanisEsther   ";

$shivaAsarBitamuzString = Zman::dayOfShivaAsarBitamuz($year)->toFormattedDateString();
$shivaAsarBitamuzDate = strtotime($shivaAsarBitamuzString);
$shivaAsarBitamuz = date('m/d/Y', $shivaAsarBitamuzDate);
echo "The date of the upcoming Shiva Asar Bitamuz is $shivaAsarBitamuz   ";

$tishaBavString = Zman::dayOfTishaBav($year)->toFormattedDateString();
$tishaBavDate = strtotime($tishaBavString);
$tishaBav = date('m/d/Y', $tishaBavDate);
echo "The date of the upcoming Tisha Bav is $tishaBav   ";

if( Zman::parse($today)->isAseresYimeiTeshuva() == true){
    echo "We are currently in the time of the Aseres Yemei Teshuva.";
}else{
    echo "Not in the Aseres Yemei Teshuva";
};

//18 different yontifs, 19 with aseres yemei teshuva.  TODO need 3 weeks, 9 days, sefira.
*/