<?php

require 'vendor/autoload.php';
include 'dbconnect.php';

use Zman\Zman;


$today = Zman::parse()->toFormattedDateString();
$month = Zman::parse($today)->jewishMonth;
$year = Zman::parse($today)->jewishYear;
$yearNext = date($year + 1);
echo $yearNext;
echo "Current Jewish Year: $year. ";

//takes current jewish year and returns string of next yontif, turns string to date jd style of just numbers, not readable, turns it into readable date in numbers
$roshHashana = date("m/d/Y", strtotime(Zman::firstDayOfRoshHashana($year)->toFormattedDateString()));
//if date already passed, add a year and run code again.
if ($roshHashana < $today) {
    $roshHashanaNext = date('m/d/Y', strtotime(Zman::firstDayOfRoshHashana($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Rosh Hashana is $roshHashanaNext  ";
} else {
    echo "The date of the upcoming Rosh Hashana is $roshHashana  ";
};

$yomKippur = date("m/d/Y", strtotime(Zman::dayOfYomKippur($year)->toFormattedDateString()));
if ($yomKippur < $today) {
    $yomKippurNext = date('m/d/Y', strtotime(Zman::dayOfYomKippur($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Yom Kippur is $yomKippurNext  ";
} else {
    echo "The date of the upcoming Yom Kippur is $yomKippur  ";
};

$sukkos = date("m/d/Y", strtotime(Zman::firstDayOfSukkos($year)->toFormattedDateString()));
if ($sukkos < $today) {
    $sukkosNext = date('m/d/Y', strtotime(Zman::firstDayOfSukkos($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Sukkos is $sukkosNext  ";
} else {
    echo "The date of the upcoming Sukkos is $sukkos  ";
};

$shminiAtzeres = date("m/d/Y", strtotime(Zman::dayOfShminiAtzeres($year)->toFormattedDateString()));
if ($shminiAtzeres < $today) {
    $shminiAtzeresNext = date('m/d/Y', strtotime(Zman::dayOfShminiAtzeres($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Shmini Atzeres is $shminiAtzeresNext  ";
} else {
    echo "The date of the upcoming Shmini Atzeres is $shminiAtzeres  ";
};

$simchasTorah = date("m/d/Y", strtotime(Zman::dayOfSimchasTorah($year)->toFormattedDateString()));
if ($simchasTorah < $today) {
    $simchasTorahNext = date('m/d/Y', strtotime(Zman::dayOfSimchasTorah($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Simchas Torah is $simchasTorahNext  ";
} else {
    echo "The date of the upcoming Simchas Torah is $simchasTorah  ";
};

$chanuka = date("m/d/Y", strtotime(Zman::firstDayOfChanuka($year)->toFormattedDateString()));
if ($chanuka < $today) {
    $chanukaNext = date('m/d/Y', strtotime(Zman::firstDayOfChanuka($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Chanuka is $chanukaNext  ";
} else {
    echo "The date of the upcoming Chanuka is $chanuka  ";
};

$tuBishvat = date("m/d/Y", strtotime(Zman::dayOfTuBishvat($year)->toFormattedDateString()));
if ($tuBishvat < $today) {
    $tuBishvatNext = date('m/d/Y', strtotime(Zman::dayOfTuBishvat($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Tu Bishvat is $tuBishvatNext  ";
} else {
    echo "The date of the upcoming Tu Bishvat is $tuBishvat  ";
};

$purim = date("m/d/Y", strtotime(Zman::dayOfPurim($year)->toFormattedDateString()));
if ($purim < $today) {
    $purimNext = date('m/d/Y', strtotime(Zman::dayOfPurim($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Purim is $purimNext  ";
} else {
    echo "The date of the upcoming Purim is $purim  ";
};

$shushanPurim = date("m/d/Y", strtotime(Zman::dayOfShushanPurim($year)->toFormattedDateString()));
if ($shushanPurim < $today) {
    $shushanPurimNext = date('m/d/Y', strtotime(Zman::dayOfShushanPurim($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Shushan Purim is $shushanPurimNext  ";
} else {
    echo "The date of the upcoming Shushan Purim is $shushanPurim  ";
};

// if ((!isJewishLeapYear($year)) == true) {
//     $purimKattan = date('m/d/Y', strtotime(Zman::dayOfPurimKattan($year)->toFormattedDateString()));
//          echo "The date of the upcoming Purim Kattan is $purimKattan  ";
// } else {
//          echo 'Not a leap year! No Purim Kattan!  ';
// };

$pesach = date("m/d/Y", strtotime(Zman::firstDayOfPesach($year)->toFormattedDateString()));
if ($pesach < $today) {
    $pesachNext = date('m/d/Y', strtotime(Zman::firstDayOfPesach($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Pesach is $pesachNext  ";
} else {
    echo "The date of the upcoming Pesach is $pesach  ";
};

$pesachSheni = date("m/d/Y", strtotime(Zman::dayOfPesachSheni($year)->toFormattedDateString()));
if ($pesachSheni < $today) {
    $pesachSheniNext = date('m/d/Y', strtotime(Zman::dayOfPesachSheni($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Pesach Sheni is $pesachSheniNext  ";
} else {
    echo "The date of the upcoming Pesach Sheni is $pesachSheni  ";
};

$shavuos = date("m/d/Y", strtotime(Zman::firstDayOfShavuos($year)->toFormattedDateString()));
if ($shavuos < $today) {
    $shavuosNext = date('m/d/Y', strtotime(Zman::firstDayOfShavuos($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Shavuos is $shavuosNext  ";
} else {
    echo "The date of the upcoming Shavuos is $shavuos  ";
};

$tzomGedaliah = date("m/d/Y", strtotime(Zman::dayOfTzomGedaliah($year)->toFormattedDateString()));
if ($tzomGedaliah < $today) {
    $tzomGedaliahNext = date('m/d/Y', strtotime(Zman::dayOfTzomGedaliah($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Tzom Gedaliah is $tzomGedaliahNext  ";
} else {
    echo "The date of the upcoming Tzom Gedaliah is $tzomGedaliah  ";
};

$taanisEsther = date("m/d/Y", strtotime(Zman::dayOfTaanisEsther($year)->toFormattedDateString()));
if ($taanisEsther < $today) {
    $taanisEstherNext = date('m/d/Y', strtotime(Zman::dayOfTaanisEsther($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Taanis Esther is $taanisEstherNext  ";
} else {
    echo "The date of the upcoming Taanis Esther is $taanisEsther  ";
};

$shivaAsarBitamuz = date("m/d/Y", strtotime(Zman::dayOfShivaAsarBitamuz($year)->toFormattedDateString()));
if ($shivaAsarBitamuz < $today) {
    $shivaAsarBitamuzNext = date('m/d/Y', strtotime(Zman::dayOfShivaAsarBitamuz($yearNext)->toFormattedDateString()));
    echo "The date of the upcoming Shiva Asar Bitamuz is $shivaAsarBitamuzNext  ";
} else {
    echo "The date of the upcoming Shiva Asar Bitamuz is $shivaAsarBitamuz  ";
};

$tishaBav = date('m/d/Y', strtotime(Zman::dayOfTishaBav($year)->toFormattedDateString()));
if ($tishaBav <= $today) {
    $tishaBavNext = (date('m/d/Y', strtotime(Zman::dayOfTishaBav($yearNext)->toFormattedDateString())));
    echo "The date of the upcoming Tisha Bav is $tishaBavNext  ";
} else {
    echo "The date of the upcoming Tisha Bav is $tishaBav  ";
};

$tuBav = date("m/d/Y", strtotime(Zman::createFromJewishDate($year, 12, 16)));
echo "Tu Bav is coming up! on ", $tuBav;


if (Zman::parse($today)->isAseresYimeiTeshuva() == true) {
    echo "   We are currently in the time of the Aseres Yemei Teshuva.";
} else {
    echo "   Not in the Aseres Yemei Teshuva   ";
};

// list of all yontifs. general  idea is to go through all dates and find which one is the next one,
// the abs lowest difference, and access that part of the database. 
// We got this!
$allDates = array(   //changed from yontifs
    array($roshHashana, "Rosh Hashana"),
    array($tzomGedaliah, "Tzom Gedalia"),
    array($yomKippur, "Yom Kippur"),
    array($sukkos, "Sukkos"),
    array($shminiAtzeres, "Shmini Atzeres"),
    array($simchasTorah, "Simchas Torah"),
    array($chanuka, "Chanuka"),
    array($tuBishvat, "Tu Bishvat"),
    array($taanisEsther, "Taanis Esther"),
    array($purim, "Purim"),
    array($shushanPurim, "Shushan Purim"),
    array($pesach, "Pesach"),
    array($pesachSheni, "Pesach Sheini"),
    array($shavuos, "Shavuos"),
    array($shivaAsarBitamuz, "Shiva Asar Bitamuz"),
    array($tishaBav, "Tisha Bav"),
    array($tuBav, "Tu Bav")
);

function dates($allDates)
{
    $i = 0;
    foreach ($allDates[$i] as $var) {
        time() - strtotime($var);
        if ((time() - (60 * 60 * 24)) > strtotime($var)) {
            print_r($allDates[$i]);
        } else {
            print_r($allDates[$i]);
        }
        $i++;
    };
}

dates($allDates);


// prints name of variable, not variable contents
// function getVariableName($var)
// {
//     foreach ($GLOBALS as $varName => $value) {
//         if ($value === $var) {
//             return $varName;
//         }
//     }
//     return;
// }

// print getVariableName($tishaBav);

// pretty cool:)

// TODO need 3 weeks, 9 days, sefira, and aseres yemei teshuva with their own things, not part of this.  Add Tu B'av