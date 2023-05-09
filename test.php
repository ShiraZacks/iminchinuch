<?php
require 'vendor/autoload.php';

use Zman\Zman;
$today = new DateTime();
$currentParsha = Zman::parse($today)->parshaHebrew;

echo $currentParsha;