<?php
header("Content-type: text/css; charset: UTF-8");

include "test.php";
global $monthStr;
if ($monthStr = "Tishrei") {
    $displayTishrei = "block";
} elseif ($monthStr = "Iyar") {
    $displayIyar = "block";
} elseif ($monthStr = "Sivan") {
    $displaySivan = "block";
} elseif ($monthStr = "Tamuz") {
    $displayTamuz = "block";
} elseif ($monthStr = "Av") {
    $displayAv = "block";//till here
} elseif ($monthStr = "Iyar") {
    $displayIyar = "block";
} elseif ($monthStr = "Iyar") {
    $displayIyar = "block";
} elseif ($monthStr = "Iyar") {
    $displayIyar = "block";
} elseif ($monthStr = "Iyar") {
    $displayIyar = "block";
} elseif ($monthStr = "Iyar") {
    $displayIyar = "block";
} elseif ($monthStr = "Iyar") {
    $displayIyar = "block";
} elseif ($monthStr = "Iyar") {
    $displayIyar = "block";
} elseif ($monthStr = "Iyar") {
    $displayIyar = "block";
} else {
    print "This is still under construction! Sorry!";
}
?>



<!-- 
* stuff that hopefully will work- 
* classes to make stuff hidden or visible,
* depending on if its that week/month/yontif or not
*
* https://stackoverflow.com/questions/22576927/how-to-dynamically-change-css-class-of-an-html-tag
*
* visibility:hidden takes out the stuff but keeps the space there,
* display:none won't leave the space.
* Keep it with display:none cuz otherwise the space will still be there
* and that would just be awkward
*
*it needs individual classes, otherwise it will change all of them
-->

<!-- /*
* Months
*/ -->
.Tishrei {
display: <?php $displayTishrei = "none";
            echo $displayTishrei; ?>;
}

.Cheshvan {
display: <?php $displayCheshvan = "none";
            echo $displayCheshvan; ?>;
}

.Kislev {
display: <?php $displayKislev = "none";
            echo $displayKislev; ?>;
}

.Teves {
display: <?php $displayTeves = "none";
            echo $displayTeves; ?>;
}

.Shevat {
display: <?php $displayShevat = "none";
            echo $displayShevat; ?>;
}

.AdarAleph {
display: <?php $displayAdarAleph = "none";
            echo $displayAdarAleph; ?>;
}

.Adar {
display: <?php $displayAdar = "none";
            echo $displayAdar; ?>;
}

.Nisan {
display: <?php $displayNisan = "none";
            echo $displayNisan; ?>;
}

.Iyar {
display: <?php $displayIyar = "none";
            echo $displayIyar; ?>;
}

.Sivan {
display: <?php $displaySivan = "none";
            echo $displaySivan; ?>;
}

.Tamuz {
display: <?php $displayTamuz = "none";
            echo $displayTamuz; ?>;
}

.Av {
display: <?php $displayAv = "none";
            echo $displayAv; ?>;
}

.Elul {
display: <?php $displayElul = "none";
            echo $displayElul; ?>;
}


<!-- /*
  * Parshiyos
    */ -->
.Bereshis {
display: <?php $display = "none";
            echo $display; ?>;
}

.Noach {
display: <?php $display = "none";
            echo $display; ?>;
}

.LechLecha {
display: <?php $display = "none";
            echo $display; ?>;
}

.Vayera {
display: <?php $display = "none";
            echo $display; ?>;
}

.ChayeiSara {
display: <?php $display = "none";
            echo $display; ?>;
}

.Toldos {
display: <?php $display = "none";
            echo $display; ?>;
}

.Vayetzei {
display: <?php $display = "none";
            echo $display; ?>;
}

.Vayishlach {
display: <?php $display = "none";
            echo $display; ?>;
}

.Vayeshev {
display: <?php $display = "none";
            echo $display; ?>;
}

.Miketz {
display: <?php $display = "none";
            echo $display; ?>;
}

.Vayigash {
display: <?php $display = "none";
            echo $display; ?>;
}

.Vayechi {
display: <?php $display = "none";
            echo $display; ?>;
}

.Shemos {
display: <?php $display = "none";
            echo $display; ?>;
}

.Vaera {
display: <?php $display = "none";
            echo $display; ?>;
}

.Bo {
display: <?php $display = "none";
            echo $display; ?>;
}

.Nijna {
display: <?php $display = "none";
            echo $display; ?>;
}

.Beshalach {
display: <?php $display = "none";
            echo $display; ?>;
}

.Yisro {
display: <?php $display = "none";
            echo $display; ?>;
}

.Mishpatim {
display: <?php $display = "none";
            echo $display; ?>;
}

.Terumah {
display: <?php $display = "none";
            echo $display; ?>;
}

.Tetzaveh {
display: <?php $display = "none";
            echo $display; ?>;
}

.KiSisa {
display: <?php $display = "none";
            echo $display; ?>;
}

.Vayakhel {
display: <?php $display = "none";
            echo $display; ?>;
}

.Pekudei {
display: <?php $display = "none";
            echo $display; ?>;
}

.Vayikra {
display: <?php $display = "none";
            echo $display; ?>;
}

.Tzav {
display: <?php $display = "none";
            echo $display; ?>;
}

.Shmini {
display: <?php $display = "none";
            echo $display; ?>;
}

.Tazria {
display: <?php $display = "none";
            echo $display; ?>;
}

.Metzora {
display: <?php $display = "none";
            echo $display; ?>;
}

.AchreiMos {
display: <?php $display = "none";
            echo $display; ?>;
}

.Kedoshim {
display: <?php $display = "none";
            echo $display; ?>;
}

.Emor {
display: <?php $display = "none";
            echo $display; ?>;
}

.Behar {
display: <?php $display = "none";
            echo $display; ?>;
}

.Bechukosai {
display: <?php $display = "none";
            echo $display; ?>;
}

.Bamidbar {
display: <?php $display = "none";
            echo $display; ?>;
}

.Naso {
display: <?php $display = "none";
            echo $display; ?>;
}

.Bahaloscha {
display: <?php $display = "none";
            echo $display; ?>;
}

.Shlach {
display: <?php $display = "none";
            echo $display; ?>;
}

.Korach {
display: <?php $display = "none";
            echo $display; ?>;
}

.Chukas {
display: <?php $display = "none";
            echo $display; ?>;
}

.Balak {
display: <?php $display = "none";
            echo $display; ?>;
}

.Pinchas {
display: <?php $display = "none";
            echo $display; ?>;
}

.Matos {
display: <?php $display = "none";
            echo $display; ?>;
}

.Masei {
display: <?php $display = "none";
            echo $display; ?>;
}

.Devarim {
display: <?php $display = "none";
            echo $display; ?>;
}

.Vaeschanan {
display: <?php $display = "none";
            echo $display; ?>;
}

.Eikev {
display: <?php $display = "none";
            echo $display; ?>;
}

.Reeh {
display: <?php $display = "none";
            echo $display; ?>;
}

.Shoftim {
display: <?php $display = "none";
            echo $display; ?>;
}

.KiSeitzei {
display: <?php $display = "none";
            echo $display; ?>;
}

.KiSavo {
display: <?php $display = "none";
            echo $display; ?>;
}

.Nitzavim {
display: <?php $display = "none";
            echo $display; ?>;
}

.Vayeilech {
display: <?php $display = "none";
            echo $display; ?>;
}

.HaAzinu {
display: <?php $display = "none";
            echo $display; ?>;
}

.VezosHabrachah {
display: <?php $display = "none";
            echo $display; ?>;
}

<!-- /*
  * Double Parshiyos
  */ -->
.Vayakhel-Pekudei {
display: <?php $display = "none";
            echo $display; ?>;
}

.Tazria-Metzora {
display: <?php $display = "none";
            echo $display; ?>;
}

.AchreiMos-Kedoshim {
display: <?php $display = "none";
            echo $display; ?>;
}

.Behar-Bechukosai {
display: <?php $display = "none";
            echo $display; ?>;
}

.Chukas-Balak {
display: <?php $display = "none";
            echo $display; ?>;
}

.Matos-Masei {
display: <?php $display = "none";
            echo $display; ?>;
}

.Nitzavim-Vayeilech {
display: <?php $display = "none";
            echo $display; ?>;
}

<!-- /*
  * Yontifs
  */ -->
.Purim {
display: <?php $display = "none";
            echo $display; ?>;
}

.Pesach {
display: <?php $display = "none";
            echo $display; ?>;
}

.Shavuos {
display: <?php $display = "none";
            echo $display; ?>;
}

.RoshHashana {
display: <?php $display = "none";
            echo $display; ?>;
}

.YomKippur {
display: <?php $display = "none";
            echo $display; ?>;
}

.Sukkos {
display: <?php $display = "none";
            echo $display; ?>;
}

.Sukkos2 {
display: <?php $display = "none";
            echo $display; ?>;
}

.Chanukah {
display: <?php $display = "none";
            echo $display; ?>;
}

.PesachSheini {
display: <?php $display = "none";
            echo $display; ?>;
}

.LagBaomer {
display: <?php $display = "none";
            echo $display; ?>;
}

.ThreeWeeks {
display: <?php $display = "none";
            echo $display; ?>;
}

.TuBav {
display: <?php $display = "none";
            echo $display; ?>;
}

.TuBishvat {
display: <?php $display = "none";
            echo $display; ?>;
}

.TishaBav {
display: <?php $display = "none";
            echo $display; ?>;
}

.AsarahBeteves {
display: <?php $display = "none";
            echo $display; ?>;
}

.NineDays {
display: <?php $display = "none";
            echo $display; ?>;
}

.ShushanPurim {
display: <?php $display = "none";
            echo $display; ?>;
}

.TzomGedalia {
display: <?php $display = "none";
            echo $display; ?>;
}

.TaanisEsther {
display: <?php $display = "none";
            echo $display; ?>;
}