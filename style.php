<?php
    header("Content-type: text/css; charset: UTF-8");

    $display = "none";

    include "test.php";
    global $monthStr;
    if($monthStr = "Nisan"){
        $display = "block";
    }else{
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

/*
* Months
*/
.Tishrei {
    display: <?php echo $display; ?>;
}

.Cheshvan {
    display: <?php echo $display; ?>;
}

.Kislev {
    display: <?php echo $display; ?>;
}

.Teves {
    display: <?php echo $display; ?>;
}

.Shevat {
    display: <?php echo $display; ?>;
}

.AdarAleph {
    display: <?php echo $display; ?>;
}

.Adar {
    display: <?php echo $display; ?>;
}

.Nissan {
    display: <?php echo $display; ?>;
}

.Iyar {
    display: <?php echo $display; ?>;
}

.Sivan {
    display: <?php echo $display; ?>;
}

.Tamuz {
    display: <?php echo $display; ?>;
}

.Av {
    display: <?php echo $display; ?>;
}

.Elul {
    display: <?php echo $display; ?>;
}


/*
  * Parshiyos
  */
.Bereshis {
    display: <?php echo $display; ?>;
}

.Noach {
    display: <?php echo $display; ?>;
}

.LechLecha {
    display: <?php echo $display; ?>;
}

.Vayera {
    display: <?php echo $display; ?>;
}

.ChayeiSara {
    display: <?php echo $display; ?>;
}

.Toldos {
    display: <?php echo $display; ?>;
}

.Vayetzei {
    display: <?php echo $display; ?>;
}

.Vayishlach {
    display: <?php echo $display; ?>;
}

.Vayeshev {
    display: <?php echo $display; ?>;
}

.Miketz {
    display: <?php echo $display; ?>;
}

.Vayigash {
    display: <?php echo $display; ?>;
}

.Vayechi {
    display: <?php echo $display; ?>;
}

.Shemos {
    display: <?php echo $display; ?>;
}

.Vaera {
    display: <?php echo $display; ?>;
}

.Bo {
    display: <?php echo $display; ?>;
}

.Nijna {
    display: <?php echo $display; ?>;
}

.Beshalach {
    display: <?php echo $display; ?>;
}

.Yisro {
    display: <?php echo $display; ?>;
}

.Mishpatim {
    display: <?php echo $display; ?>;
}

.Terumah {
    display: <?php echo $display; ?>;
}

.Tetzaveh {
    display: <?php echo $display; ?>;
}

.KiSisa {
    display: <?php echo $display; ?>;
}

.Vayakhel {
    display: <?php echo $display; ?>;
}

.Pekudei {
    display: <?php echo $display; ?>;
}

.Vayikra {
    display: <?php echo $display; ?>;
}

.Tzav {
    display: <?php echo $display; ?>;
}

.Shmini {
    display: <?php echo $display; ?>;
}

.Tazria {
    display: <?php echo $display; ?>;
}

.Metzora {
    display: <?php echo $display; ?>;
}

.AchreiMos {
    display: <?php echo $display; ?>;
}

.Kedoshim {
    display: <?php echo $display; ?>;
}

.Emor {
    display: <?php echo $display; ?>;
}

.Behar {
    display: <?php echo $display; ?>;
}

.Bechukosai {
    display: <?php echo $display; ?>;
}

.Bamidbar {
    display: <?php echo $display; ?>;
}

.Naso {
    display: <?php echo $display; ?>;
}

.Bahaloscha {
    display: <?php echo $display; ?>;
}

.Shlach {
    display: <?php echo $display; ?>;
}

.Korach {
    display: <?php echo $display; ?>;
}

.Chukas {
    display: <?php echo $display; ?>;
}

.Balak {
    display: <?php echo $display; ?>;
}

.Pinchas {
    display: <?php echo $display; ?>;
}

.Matos {
    display: <?php echo $display; ?>;
}

.Masei {
    display: <?php echo $display; ?>;
}

.Devarim {
    display: <?php echo $display; ?>;
}

.Vaeschanan {
    display: <?php echo $display; ?>;
}

.Eikev {
    display: <?php echo $display; ?>;
}

.Reeh {
    display: <?php echo $display; ?>;
}

.Shoftim {
    display: <?php echo $display; ?>;
}

.KiSeitzei {
    display: <?php echo $display; ?>;
}

.KiSavo {
    display: <?php echo $display; ?>;
}

.Nitzavim {
    display: <?php echo $display; ?>;
}

.Vayeilech {
    display: <?php echo $display; ?>;
}

.HaAzinu {
    display: <?php echo $display; ?>;
}

.VezosHabrachah {
    display: <?php echo $display; ?>;
}

/*
  * Double Parshiyos
  */
.Vayakhel-Pekudei {
    display: <?php echo $display; ?>;
}

.Tazria-Metzora {
    display: <?php echo $display; ?>;
}

.AchreiMos-Kedoshim {
    display: <?php echo $display; ?>;
}

.Behar-Bechukosai {
    display: <?php echo $display; ?>;
}

.Chukas-Balak {
    display: <?php echo $display; ?>;
}

.Matos-Masei {
    display: <?php echo $display; ?>;
}

.Nitzavim-Vayeilech {
    display: <?php echo $display; ?>;
}

/*
  * Yontifs
  */
.Purim {
    display: <?php echo $display; ?>;
}

.Pesach {
    display: <?php echo $display; ?>;
}

.Shavuos {
    display: <?php echo $display; ?>;
}

.RoshHashana {
    display: <?php echo $display; ?>;
}

.YomKippur {
    display: <?php echo $display; ?>;
}

.Sukkos {
    display: <?php echo $display; ?>;
}

.Sukkos2 {
    display: <?php echo $display; ?>;
}

.Chanukah {
    display: <?php echo $display; ?>;
}

.PesachSheini {
    display: <?php echo $display; ?>;
}

.LagBaomer {
    display: <?php echo $display; ?>;
}

.ThreeWeeks {
    display: <?php echo $display; ?>;
}

.TuBav {
    display: <?php echo $display; ?>;
}

.TuBishvat {
    display: <?php echo $display; ?>;
}

.TishaBav {
    display: <?php echo $display; ?>;
}

.AsarahBeteves {
    display: <?php echo $display; ?>;
}

.NineDays {
    display: <?php echo $display; ?>;
}

.ShushanPurim {
    display: <?php echo $display; ?>;
}

.TzomGedalia {
    display: <?php echo $display; ?>;
}

.TaanisEsther {
    display: <?php echo $display; ?>;
}