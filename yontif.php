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
                    <p <?php $currentYontif = "ראש השנה" ?> class="buttonStyles yontifStyles">Rosh Hashana</p>
                    <p <?php $currentYontif = "צום גדליה" ?> class="buttonStyles yontifStyles">Tzom Gedalia</p>
                    <p <?php $currentYontif = "יום כפור" ?> class="buttonStyles yontifStyles">Yom Kippur</p>
                    <p <?php $currentYontif = "סוכות" ?> class="buttonStyles yontifStyles">Sukkos</p>
                    <p <?php $currentYontif = "שמיני עצרת" ?> class="buttonStyles yontifStyles">Shmini Atzeres</p>
                    <p <?php $currentYontif = "שמחת תורה" ?> class="buttonStyles yontifStyles">Simchas Torah</p>
                    <p <?php $currentYontif = "חנוכה" ?> class="buttonStyles yontifStyles">Chanuka</p>
                    <p <?php $currentYontif = "טו בשבת" ?> class="buttonStyles yontifStyles">Tu Bishvat</p>
                    <p <?php $currentYontif = "תענית אסתר" ?> class="buttonStyles yontifStyles">Taanis Esther</p>
                    <p <?php $currentYontif = "פורים" ?> class="buttonStyles yontifStyles">Purim</p>
                    <p <?php $currentYontif = "שושן פורים" ?> class="buttonStyles yontifStyles">Shushan Purim</p>
                    <p <?php $currentYontif = "פסח" ?> class="buttonStyles yontifStyles">Pesach</p>
                    <p <?php $currentYontif = "פסח שני" ?> class="buttonStyles yontifStyles">Pesach Sheini</p>
                    <p <?php $currentYontif = "שבעות" ?> class="buttonStyles yontifStyles">Shavuos</p>
                    <p <?php $currentYontif = "שבע עשר בתמוז" ?> class="buttonStyles yontifStyles">Shiva Asar Bitamuz</p>
                    <p <?php $currentYontif = "תשע באב" ?> class="buttonStyles yontifStyles">Tisha Bav</p>
                    <p <?php $currentYontif = "טו באב" ?> class="buttonStyles yontifStyles">Tu Bav</p>
                    <p <?php $currentYontif = "עשרת ימי תשובה" ?> class="buttonStyles yontifStyles">Aseres Yemei Teshuva</p>

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

                <div class="header2">
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