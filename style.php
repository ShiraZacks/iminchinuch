<?php
    header("Content-type: text/css; charset: UTF-8");

    $hide = "none";
    $view = "block";
?>

<!-- :root {
    --hide: none;
    --view: block;
} -->



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
    display: <?php echo $hide; ?>;
}

.Cheshvan {
    display: <?php echo $hide; ?>;
}

.Kislev {
    display: <?php echo $hide; ?>;
}

.Teves {
    display: <?php echo $hide; ?>;
}

.Shevat {
    display: <?php echo $hide; ?>;
}

.AdarAleph {
    display: <?php echo $hide; ?>;
}

.Adar {
    display: <?php echo $hide; ?>;
}

.Nissan {
    display: <?php echo $hide; ?>;
}

.Iyar {
    display: <?php echo $hide; ?>;
}

.Sivan {
    display: <?php echo $hide; ?>;
}

.Tamuz {
    display: <?php echo $hide; ?>;
}

.Av {
    display: <?php echo $hide; ?>;
}

.Elul {
    display: <?php echo $hide; ?>;
}


/*
  * Parshiyos
  */
.Bereshis {
    display: <?php echo $hide; ?>;
}

.Noach {
    display: <?php echo $hide; ?>;
}

.LechLecha {
    display: <?php echo $hide; ?>;
}

.Vayera {
    display: <?php echo $hide; ?>;
}

.ChayeiSara {
    display: <?php echo $hide; ?>;
}

.Toldos {
    display: <?php echo $hide; ?>;
}

.Vayetzei {
    display: <?php echo $hide; ?>;
}

.Vayishlach {
    display: <?php echo $hide; ?>;
}

.Vayeshev {
    display: <?php echo $hide; ?>;
}

.Miketz {
    display: <?php echo $hide; ?>;
}

.Vayigash {
    display: <?php echo $hide; ?>;
}

.Vayechi {
    display: <?php echo $hide; ?>;
}

.Shemos {
    display: <?php echo $hide; ?>;
}

.Vaera {
    display: <?php echo $hide; ?>;
}

.Bo {
    display: <?php echo $hide; ?>;
}

.Nijna {
    display: <?php echo $hide; ?>;
}

.Beshalach {
    display: <?php echo $hide; ?>;
}

.Yisro {
    display: <?php echo $hide; ?>;
}

.Mishpatim {
    display: <?php echo $hide; ?>;
}

.Terumah {
    display: <?php echo $hide; ?>;
}

.Tetzaveh {
    display: <?php echo $hide; ?>;
}

.KiSisa {
    display: <?php echo $hide; ?>;
}

.Vayakhel {
    display: <?php echo $hide; ?>;
}

.Pekudei {
    display: <?php echo $hide; ?>;
}

.Vayikra {
    display: <?php echo $hide; ?>;
}

.Tzav {
    display: <?php echo $hide; ?>;
}

.Shmini {
    display: <?php echo $hide; ?>;
}

.Tazria {
    display: <?php echo $hide; ?>;
}

.Metzora {
    display: <?php echo $hide; ?>;
}

.AchreiMos {
    display: <?php echo $hide; ?>;
}

.Kedoshim {
    display: <?php echo $hide; ?>;
}

.Emor {
    display: <?php echo $hide; ?>;
}

.Behar {
    display: <?php echo $hide; ?>;
}

.Bechukosai {
    display: <?php echo $hide; ?>;
}

.Bamidbar {
    display: <?php echo $hide; ?>;
}

.Naso {
    display: <?php echo $hide; ?>;
}

.Bahaloscha {
    display: <?php echo $hide; ?>;
}

.Shlach {
    display: <?php echo $hide; ?>;
}

.Korach {
    display: <?php echo $hide; ?>;
}

.Chukas {
    display: <?php echo $hide; ?>;
}

.Balak {
    display: <?php echo $hide; ?>;
}

.Pinchas {
    display: <?php echo $hide; ?>;
}

.Matos {
    display: <?php echo $hide; ?>;
}

.Masei {
    display: <?php echo $hide; ?>;
}

.Devarim {
    display: <?php echo $hide; ?>;
}

.Vaeschanan {
    display: <?php echo $hide; ?>;
}

.Eikev {
    display: <?php echo $hide; ?>;
}

.Reeh {
    display: <?php echo $hide; ?>;
}

.Shoftim {
    display: <?php echo $hide; ?>;
}

.KiSeitzei {
    display: <?php echo $hide; ?>;
}

.KiSavo {
    display: <?php echo $hide; ?>;
}

.Nitzavim {
    display: <?php echo $hide; ?>;
}

.Vayeilech {
    display: <?php echo $hide; ?>;
}

.HaAzinu {
    display: <?php echo $hide; ?>;
}

.VezosHabrachah {
    display: <?php echo $hide; ?>;
}

/*
  * Double Parshiyos
  */
.Vayakhel-Pekudei {
    display: <?php echo $hide; ?>;
}

.Tazria-Metzora {
    display: <?php echo $hide; ?>;
}

.AchreiMos-Kedoshim {
    display: <?php echo $hide; ?>;
}

.Behar-Bechukosai {
    display: <?php echo $hide; ?>;
}

.Chukas-Balak {
    display: <?php echo $hide; ?>;
}

.Matos-Masei {
    display: <?php echo $hide; ?>;
}

.Nitzavim-Vayeilech {
    display: <?php echo $hide; ?>;
}

/*
  * Yontifs
  */
.Purim {
    display: <?php echo $hide; ?>;
}

.Pesach {
    display: <?php echo $hide; ?>;
}

.Shavuos {
    display: <?php echo $hide; ?>;
}

.RoshHashana {
    display: <?php echo $hide; ?>;
}

.YomKippur {
    display: <?php echo $hide; ?>;
}

.Sukkos {
    display: <?php echo $hide; ?>;
}

.Sukkos2 {
    display: <?php echo $hide; ?>;
}

.Chanukah {
    display: <?php echo $hide; ?>;
}

.PesachSheini {
    display: <?php echo $hide; ?>;
}

.LagBaomer {
    display: <?php echo $hide; ?>;
}

.ThreeWeeks {
    display: <?php echo $hide; ?>;
}

.TuBav {
    display: <?php echo $hide; ?>;
}

.TuBishvat {
    display: <?php echo $hide; ?>;
}

.TishaBav {
    display: <?php echo $hide; ?>;
}

.AsarahBeteves {
    display: <?php echo $hide; ?>;
}

.NineDays {
    display: <?php echo $hide; ?>;
}

.ShushanPurim {
    display: <?php echo $hide; ?>;
}

.TzomGedalia {
    display: <?php echo $hide; ?>;
}

.TaanisEsther {
    display: <?php echo $hide; ?>;
}