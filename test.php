<?php
require 'vendor/autoload.php';
include 'dbconnect.php';

use Zman\Zman;

$year = date("y");

$shavuosString = Zman::firstDayOfShavuos($year)->toFormattedDateString();
$shavuosDate = strtotime($shavuosString);
$shavuos = date('m/d/Y', $shavuosDate);

echo $shavuos;
