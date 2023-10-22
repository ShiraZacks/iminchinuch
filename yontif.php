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
    <link rel="stylesheet" href="style.css?<?=time()?>">
    <?php include 'menu.php';?>
</head>


<body>
    <div class="pageContainer">
        <div class="contentWrap">

            <div class="yontif">
                <div class="header2">
                    <h1 class="bigHeader2">CHOOSE A YONTIF</h1>
                </div>

                <div class="yontifOptions">
                <details>
                    <summary class="buttonStyles yontifStyles">Rosh Hashana</summary>
                    <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Tzom Gedalia</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Yom Kippur</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Sukkos</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Shmini Atzeres<br>Simchas Torah</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Chanukah</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Tu Bishvat</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Taanis Esther</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Purim</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Shushan Purim</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Pesach</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Pesach Sheini</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Shavuos</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Shiva Asar Bitamuz</summary>
                        <p><?php ?></p>
                </details>
                <br>                <details>
                    <summary class="buttonStyles yontifStyles">Tisha Bav</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Tu Bav</summary>
                        <p><?php ?></p>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Aseres Yemei Teshuva</summary>
                        <p><?php ?></p>
                </details>
                <br>

            </div>

                <h1><?php echo $currentYontif; ?></h1>



                <!-- get each one to call that sql section, put it in the below sections. -->
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
    <?php include "footer.php";?>
</body>

</html>