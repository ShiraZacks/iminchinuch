<!DOCTYPE html>
<html lang="en">

<head>
    <title>I'M IN CHINUCH</title>
    <link rel="shortcut icon" type="image/jpeg" href="favcon.jpg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" charset="utf-8" src="toggleBars.js?<?= time() ?>"></script>
    <link rel="stylesheet" href="style.css?<?= time() ?>">
    <?php include 'menu.php'; ?>
</head>

<body>
<div class="pageContainer">
<div class="contentWrap">
    
    <?php
    require 'vendor/autoload.php';
    include 'dbconnect.php';

    //gets this week's parsha in variable named $currentParsha
    use Zman\Zman;

    $today = new DateTime();
    $currentParsha = Zman::parse($today)->parshaHebrew;




    switch ($currentParsha) {
        case $currentParsha:  //this uses the variable to call the sql code, super exciting it works!!!
            $stmt = $conn->prepare('SELECT parshaHebrew, parshaAbout, parshaDeeper FROM `parsha` WHERE parshaHebrew=?');
            $stmt->bind_param("s", $currentParsha);
            $stmt->execute();
            $parshaInfo = $stmt->get_result();


            break;

        default:
            print "This is still under construction! Sorry!";
            break;
    }
    $result = mysqli_fetch_array($parshaInfo);
    ?>


        <?php
        global $currentYontif;
        $parshaThisWeekBool = is_null($result);
        if ( $parshaThisWeekBool == true){
            print "There is no Parsha this week because of $currentYontif";
        }
            else{?>
        <div class="header2">
            <h1 class="bigHeader2">
                <?php
                print "פרשת ";
                print $result['parshaHebrew'];
                ?>
            </h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">
                <?php
                print $result['parshaAbout'];
                ?>
            </h5>
            <p class="firstSmall2">
                <?php
                print $result['parshaDeeper'];
                ?>
            </p>
        </div>
        </div>
]<?php
};?>
        <!-- bottom footer -->
        <footer>
            <p class="footer">Website created by Shira Zacks. Please <a href="contact.php">contact me</a> if there are any mistakes; only Hashem
                is perfect!</p>
        </footer>

        </div>

    </body>

</html>