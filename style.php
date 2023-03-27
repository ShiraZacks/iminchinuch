<?php
    header("Content-type: text/css; charset: UTF-8");
?>

:root {
    --hide: none;
    --view: block;
}





/*
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
*/

/*
* Months
*/
.Tishrei {
    display: var(--hide);
}

.Cheshvan {
    display: var(--hide);
}

.Kislev {
    display: var(--hide);
}

.Teves {
    display: var(--hide);
}

.Shevat {
    display: var(--hide);
}

.AdarAleph {
    display: var(--hide);
}

.Adar {
    display: var(--hide);
}

.Nissan {
    display: var(--hide);
}

.Iyar {
    display: var(--hide);
}

.Sivan {
    display: var(--hide);
}

.Tamuz {
    display: var(--hide);
}

.Av {
    display: var(--hide);
}

.Elul {
    display: var(--hide);
}


/*
  * Parshiyos
  */
.Bereshis {
    display: var(--hide);
}

.Noach {
    display: var(--hide);
}

.LechLecha {
    display: var(--hide);
}

.Vayera {
    display: var(--hide);
}

.ChayeiSara {
    display: var(--hide);
}

.Toldos {
    display: var(--hide);
}

.Vayetzei {
    display: var(--hide);
}

.Vayishlach {
    display: var(--hide);
}

.Vayeshev {
    display: var(--hide);
}

.Miketz {
    display: var(--hide);
}

.Vayigash {
    display: var(--hide);
}

.Vayechi {
    display: var(--hide);
}

.Shemos {
    display: var(--hide);
}

.Vaera {
    display: var(--hide);
}

.Bo {
    display: var(--hide);
}

.Nijna {
    display: var(--hide);
}

.Beshalach {
    display: var(--hide);
}

.Yisro {
    display: var(--hide);
}

.Mishpatim {
    display: var(--hide);
}

.Terumah {
    display: var(--hide);
}

.Tetzaveh {
    display: var(--hide);
}

.KiSisa {
    display: var(--hide);
}

.Vayakhel {
    display: var(--hide);
}

.Pekudei {
    display: var(--hide);
}

.Vayikra {
    display: var(--hide);
}

.Tzav {
    display: var(--hide);
}

.Shmini {
    display: var(--hide);
}

.Tazria {
    display: var(--hide);
}

.Metzora {
    display: var(--hide);
}

.AchreiMos {
    display: var(--hide);
}

.Kedoshim {
    display: var(--hide);
}

.Emor {
    display: var(--hide);
}

.Behar {
    display: var(--hide);
}

.Bechukosai {
    display: var(--hide);
}

.Bamidbar {
    display: var(--hide);
}

.Naso {
    display: var(--hide);
}

.Bahaloscha {
    display: var(--hide);
}

.Shlach {
    display: var(--hide);
}

.Korach {
    display: var(--hide);
}

.Chukas {
    display: var(--hide);
}

.Balak {
    display: var(--hide);
}

.Pinchas {
    display: var(--hide);
}

.Matos {
    display: var(--hide);
}

.Masei {
    display: var(--hide);
}

.Devarim {
    display: var(--hide);
}

.Vaeschanan {
    display: var(--hide);
}

.Eikev {
    display: var(--hide);
}

.Reeh {
    display: var(--hide);
}

.Shoftim {
    display: var(--hide);
}

.KiSeitzei {
    display: var(--hide);
}

.KiSavo {
    display: var(--hide);
}

.Nitzavim {
    display: var(--hide);
}

.Vayeilech {
    display: var(--hide);
}

.HaAzinu {
    display: var(--hide);
}

.VezosHabrachah {
    display: var(--hide);
}

/*
  * Double Parshiyos
  */
.Vayakhel-Pekudei {
    display: var(--hide);
}

.Tazria-Metzora {
    display: var(--hide);
}

.AchreiMos-Kedoshim {
    display: var(--hide);
}

.Behar-Bechukosai {
    display: var(--hide);
}

.Chukas-Balak {
    display: var(--hide);
}

.Matos-Masei {
    display: var(--hide);
}

.Nitzavim-Vayeilech {
    display: var(--hide);
}

/*
  * Yontifs
  */
.Purim {
    display: var(--hide);
}

.Pesach {
    display: var(--hide);
}

.Shavuos {
    display: var(--hide);
}

.RoshHashana {
    display: var(--hide);
}

.YomKippur {
    display: var(--hide);
}

.Sukkos {
    display: var(--hide);
}

.Sukkos2 {
    display: var(--hide);
}

.Chanukah {
    display: var(--hide);
}

.PesachSheini {
    display: var(--hide);
}

.LagBaomer {
    display: var(--hide);
}

.ThreeWeeks {
    display: var(--hide);
}

.TuBav {
    display: var(--hide);
}

.TuBishvat {
    display: var(--hide);
}

.TishaBav {
    display: var(--hide);
}

.AsarahBeteves {
    display: var(--hide);
}

.NineDays {
    display: var(--hide);
}

.ShushanPurim {
    display: var(--hide);
}

.TzomGedalia {
    display: var(--hide);
}

.TaanisEsther {
    display: var(--hide);
}