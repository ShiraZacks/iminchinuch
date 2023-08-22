<?php
require 'vendor/autoload.php';
include 'dbconnect.php';

use Zman\Zman;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>I'M IN CHINUCH</title>
    <link rel="shortcut icon" type="image/jpeg" href="favcon.jpg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" charset="utf-8" src="toggleBars.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=David+Libre&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?<?= time() ?>">
    <?php include 'menu.php'; ?>
</head>


<body>
    <div class="pageContainer">
        <div class="contentWrap">

            <div class="yontif">
                <div class="header2">
                    <h1 class="bigHeader2">CHOOSE A YONTIF</h1>
                </div>

                <div class="yontifOptions">
                    <input type="button" href="#header1" class="buttonStyles yontifStyles" id="RoshHashana" value="Rosh Hashana"></input>
                    <input type="button" href="#header1" class="buttonStyles yontifStyles" id="TzomGedalia" value="Tzom Gedalia"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "יום כפור" ?> class="buttonStyles yontifStyles" id="YomKippur" value="Yom Kippur"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "סוכות" ?> class="buttonStyles yontifStyles" id="Sukkos" value="Sukkos"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "שמיני עצרת" ?> class="buttonStyles yontifStyles" id="ShminiAtzeres" value="Shmini Atzeres"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "שמחת תורה" ?> class="buttonStyles yontifStyles" id="SimchasTorah" value="Simchas Torah"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "חנוכה" ?> class="buttonStyles yontifStyles" id="Chanuka" value="Chanuka"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "טו בשבת" ?> class="buttonStyles yontifStyles" id="TuBishvat" value="Tu Bishvat"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "תענית אסתר" ?> class="buttonStyles yontifStyles" id="TaanisEsther" value="Taanis Esther"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "פורים" ?> class="buttonStyles yontifStyles" id="Purim" value="Purim"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "שושן פורים" ?> class="buttonStyles yontifStyles" id="ShushanPurim" value="Shushan Purim"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "פסח" ?> class="buttonStyles yontifStyles" id="Pesach" value="Pesach"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "פסח שני" ?> class="buttonStyles yontifStyles" id="PesachSheini" value="Pesach Sheini"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "שבעות" ?> class="buttonStyles yontifStyles" id="Shavuos" value="Shavuos"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "שבע עשר בתמוז" ?> class="buttonStyles yontifStyles" id="ShivaAsarBitamuz" value="Shiva Asar Bitamuz"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "תשע באב" ?> class="buttonStyles yontifStyles" id="TishaBav" value="Tisha Bav"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "טו באב" ?> class="buttonStyles yontifStyles" id="TuBav" value="Tu Bav"></input>
                    <input type="button" href="#header1" <?php $currentYontif = "עשרת ימי תשובה" ?> class="buttonStyles yontifStyles" id="AseresYemeiTeshiva" value="Aseres Yemei Teshuva"></input>
                    <h1><?php echo $currentYontif; ?></h1>
                </div>
                <!-- get each one to call that sql section, put it in the below sections. -->

                <script>
                    // when i click the button it should set the variable $currentYontif to the value
                    $(document).ready(function() {
                        //when the <button> button is clicked
                        $('input').click(function() {
                            switch (id) {
                                case "RoshHashana":
                                    <?php $currentYontif = "ראש השנה" ?>;
                                    break;
                                case "TzomGedalia":
                                    <?php $currentYontif = "צום גדליה" ?>;
                                    break;
                            }
                        });

                    }); //click the button, if statement to set the variable to whatever was clicked, might hafta manually write it out.
                </script>



                <?php




                switch ($currentYontif) {
                    case $currentYontif:  //this uses the variable to call the sql code, super exciting it works!!!
                        $stmt = $conn->prepare('SELECT yontifHebrew, yontifAbout, yontifDeeper FROM `yontif` WHERE yontifHebrew=?');
                        $stmt->bind_param("s", $currentYontif);
                        $stmt->execute();
                        $yontifInfo = $stmt->get_result();
                        break;

                    default:
                        print "This is still under construction! Sorry!";
                        break;
                }
                $result = mysqli_fetch_array($yontifInfo);
                ?>

                <div class="header2" id="header1">
                    <h1 class="bigHeader2">
                        <?php
                        print $result['yontifHebrew'];
                        ?>
                    </h1>
                </div>
                <div class="firstMain2">
                    <h5 class="firstBold2">
                        <?php
                        print $result['yontifAbout'];
                        ?>
                    </h5>
                    <p class="firstSmall2">
                        <?php
                        print $result['yontifDeeper'];
                        ?>
                    </p>
                </div>
            </div>


        </div>





    </div>
    <!-- bottom footer -->
    <?php include "footer.php"; ?>

    </div>

</body>

</html>