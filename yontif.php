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

                <script>
                    // when i click the button it should set the variable $currentYontif to the value
                    $(document).ready(function() {
                        //when the <button> button is clicked
                        $('input').click(function() {
                            //store the user's entry in a variable
                            var currentYontif = document.getElementById('yontifButton').value;
                        });

                    });
                </script>

                <!-- <form action="<?php //yontif(); ?>" method="post"> -->
                    <div class="yontifOptions">
                        <input type="button" href="#header1" <?php $currentYontif = "ראש השנה" ?> class="buttonStyles yontifStyles" id="<?php $currentYontif ?>" value="Rosh Hashana"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "צום גדליה" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Tzom Gedalia"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "יום כפור" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Yom Kippur"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "סוכות" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Sukkos"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "שמיני עצרת" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Shmini Atzeres"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "שמחת תורה" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Simchas Torah"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "חנוכה" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Chanuka"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "טו בשבת" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Tu Bishvat"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "תענית אסתר" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Taanis Esther"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "פורים" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Purim"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "שושן פורים" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Shushan Purim"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "פסח" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Pesach"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "פסח שני" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Pesach Sheini"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "שבעות" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Shavuos"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "שבע עשר בתמוז" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Shiva Asar Bitamuz"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "תשע באב" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Tisha Bav"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "טו באב" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Tu Bav"></input>
                        <input type="button" href="#header1" <?php $currentYontif = "עשרת ימי תשובה" ?> class="buttonStyles yontifStyles" id="yontifButton" value="Aseres Yemei Teshuva"></input>
                <!-- </form> -->
                <h1><?php echo $currentYontif; ?></h1>
            </div>
            <!-- get each one to call that sql section, put it in the below sections. -->
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