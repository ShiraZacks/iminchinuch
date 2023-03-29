<?php header("Content-type: text/css; charset: UTF-8");
?><?php //^V^V^V^V^V^V^V^V^V^//
//this section gets currrent Hebrew calendar date using lots of other info.
// Get current Gregorian date
$gregorianDate =new DateTime();

// Convert Gregorian date to Julian day count
$julianDay =gregoriantojd($gregorianDate->format('m'), $gregorianDate->format('d'), $gregorianDate->format('Y'));

// Calculate Jewish date from Julian day count
$jDate =jdtojewish($julianDay);
//echo $jDate,"   ";

//change that str to  date
$toTime =strtotime($jDate);
$jewishDate =getdate($toTime);

// Convert month number to its string representation
$monthNames =[ 1=>'Tishrei',
2=>'Cheshvan',
3=>'Kislev',
4=>'Teves',
5=>'Shevat',
6=>'Adar Aleph',
7=>'Adar',
8=>'Nisan',
9=>'Iyar',
10=>'Sivan',
11=>'Tamuz',
12=>'Av',
13=>'Elul'
];
//get current month number
$monthNum =$jewishDate['mon'];
echo $monthNum;

//get current month name in string form
$monthStr =$monthNames[$jewishDate['mon']];

// Store the final answer in a variable called "hebrewDate"
$hebrewDate =$monthStr . ' ' . $jewishDate['mday'] . ', ' . $jewishDate['year'];

//-=-=-=-=-=-=-=-//
function getHebrewDate() {
    global $hebrewDate; //global gets variable from outside the function
    echo "Today is $hebrewDate!"; // Outputs todays date in "Nisan 2, 5783" format
}

//-=-=-=-=-=-=-=-//


//^V^V^V^V^V^V^V^V^V^//
?>< !--

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
* Months */

.Tishrei {
    display: block;
    margin: 500px;
}

.Cheshvan {
    display: none;
    <?php $displayCheshvan ="none";
    //echo $displayCheshvan; ?>;
}

.Kislev {
    display: none;
    <?php $displayKislev ="none";
    //echo $displayKislev; ?>;
}

.Teves {
    display: none;
    <?php $displayTeves ="none";
    //echo $displayTeves; ?>;
}

.Shevat {
    display: none;
    <?php $displayShevat ="none";
    //echo $displayShevat; ?>;
}

.AdarAleph {
    display: none;
    <?php $displayAdarAleph ="none";
    //echo $displayAdarAleph; ?>;
}

.Adar {
    display: none;
    <?php $displayAdar ="none";
    //echo $displayAdar; ?>;
}

.Nisan {
    display: none;
    <?php $displayNisan ="none";
    //echo $displayNisan; ?>;
}

.Iyar {
    display: none;
    <?php $displayIyar ="none";
    //echo $displayIyar; ?>;
}

.Sivan {
    display: none;
    <?php $displaySivan ="none";
    //echo $displaySivan; ?>;
}

.Tamuz {
    display: none;
    <?php $displayTamuz ="none";
    //echo $displayTamuz; ?>;
}

.Av {
    display: none;
    <?php $displayAv ="none";
    //echo $displayAv; ?>;
}

.Elul {
    display: none;
    <?php $displayElul ="none";
    //echo $displayElul; ?>;
}

<?php switch ($monthNum) {
    case 1:
        $displayTishrei ="block";
    echo '<script>console.log("Writing tishrei"); </script>';
    break;

    case 2:
        $displayCheshvan ="block";
    break;

    case 3:
        $displayKislev ="block";
    break;

    case 4:
        $displayTeves ="block";
    break;

    case 5:
        $displayShevat ="block";
    break;

    case 6:
        $displayAdarAleph ="block";
    break;

    case 7:
        $displayAdar ="block";
    break;

    case 8:
        $displayNisan ="block";
    break;

    case 9:
        $displayIyar ="block";
    break;

    case 10:
        $displaySivan ="block";
    break;

    case 11:
        $displayTamuz ="block";
    break;

    case 12:
        $displayAv ="block";
    break;

    case 13:
        $displayElul ="block";
    break;

    default:
        print "This is still under construction! Sorry!";
    break;
}

;

?>< !--

/*
  * Parshiyos
    */
-->.Bereshis {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Noach {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.LechLecha {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Vayera {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.ChayeiSara {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Toldos {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Vayetzei {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Vayishlach {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Vayeshev {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Miketz {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Vayigash {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Vayechi {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Shemos {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Vaera {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Bo {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Nijna {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Beshalach {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Yisro {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Mishpatim {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Terumah {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Tetzaveh {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.KiSisa {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Vayakhel {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Pekudei {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Vayikra {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Tzav {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Shmini {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Tazria {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Metzora {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.AchreiMos {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Kedoshim {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Emor {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Behar {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Bechukosai {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Bamidbar {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Naso {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Bahaloscha {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Shlach {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Korach {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Chukas {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Balak {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Pinchas {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Matos {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Masei {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Devarim {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Vaeschanan {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Eikev {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Reeh {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Shoftim {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.KiSeitzei {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.KiSavo {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Nitzavim {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Vayeilech {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.HaAzinu {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.VezosHabrachah {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

< !--

/*
  * Double Parshiyos
  */
-->.Vayakhel-Pekudei {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Tazria-Metzora {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.AchreiMos-Kedoshim {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Behar-Bechukosai {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Chukas-Balak {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Matos-Masei {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Nitzavim-Vayeilech {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

< !--

/*
  * Yontifs
  */
-->.Purim {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Pesach {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Shavuos {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.RoshHashana {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.YomKippur {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Sukkos {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Sukkos2 {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.Chanukah {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.PesachSheini {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.LagBaomer {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.ThreeWeeks {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.TuBav {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.TuBishvat {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.TishaBav {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.AsarahBeteves {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.NineDays {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.ShushanPurim {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.TzomGedalia {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}

.TaanisEsther {
    display: none;
    <?php $display ="none";
    //echo $display; ?>;
}