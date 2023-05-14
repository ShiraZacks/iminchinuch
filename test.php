<?php
require 'vendor/autoload.php';

use Zman\Zman;

$today = new DateTime();
$currentParsha = Zman::parse($today)->parshaHebrew;

echo $currentParsha; ?>

<div id="ff-compose"></div>
<script async defer src="https://formfacade.com/include/106653794063306018762/form/1FAIpQLSfhlzyL89_TbtMNHuKaMxkgQBc132raQnrwZm0sdXt-Dh3Mlg/classic.js?div=ff-compose"></script>