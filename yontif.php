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
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Tzom Gedalia</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Yom Kippur</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Sukkos</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Shmini Atzeres<br>Simchas Torah</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Chanukah</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Tu Bishvat</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Taanis Esther</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Purim</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Shushan Purim</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Pesach</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Pesach Sheini</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Shavuos</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Shiva Asar Bitamuz</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>                <details>
                    <summary class="buttonStyles yontifStyles">Tisha Bav</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Tu Bav</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>
                <details>
                    <summary class="buttonStyles yontifStyles">Aseres Yemei Teshuva</summary>
                    <div class="details" ><?php include "yontifDropdown.php"?></div>
                </details>
                <br>

            </div>



            </div>
        </div>
    </div>
    <!-- bottom footer -->
    <?php include "footer.php";?>
</body>

</html>