<?php
require 'vendor/autoload.php';

use Zman\Zman;
$today = new DateTime();
$hebrewYear = Zman::now()->jewishYear;
$elul = Zman::firstDayOfSfardiSlichos($hebrewYear)->toFormattedDateString();
$roshHashana = Zman::createFromJewishDate($hebrewYear, 1, 1);
$shminiAtzeres = Zman::dayOfShminiAtzeres($hebrewYear)->toFormattedDateString();
$mussaf = Zman::parse($today)->hasMussaf();
$hallel = Zman::parse($today)->hasHallel();
$slichos = Zman::parse($today)->hasSlichos();

print $roshHashana;
print $elul;
print $shminiAtzeres;

if (($mussaf == true) && ($hallel == true) && ($slichos == true)) {
    print "Today you should be davening Mussaf and Hallel! We also say S'lichos.";
} elseif (($mussaf == true) && ($hallel == true)) {
    print "Today you should be davening Mussaf and Hallel!";
} elseif ($hallel == true) {
    print "Today is a Hallel day, no Mussaf though.";
} elseif ($mussaf == true) {
    print "Today is a Mussaf day, no Hallel though.";
} elseif ($slichos == true) {
    print "We say S'lichos today.";
} else {
    print "No additions to the regular t'fillos";
}
;

if (($today > $roshHashana) && ($today < $shminiAtzeres)) {
    print "We add L'David today!";
} else {
    print "No L'David";
}
