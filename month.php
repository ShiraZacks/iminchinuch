<!DOCTYPE html>
<html lang="en">

<head>
    <title>I'M IN CHINUCH</title>
    <link rel="shortcut icon" type="image/jpeg" href="favcon.jpg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" charset="utf-8" src="toggleBars.js?<?= time() ?>"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type='text/css' href="style.css?<?= time() ?>">
    <?php include 'menu.php'; ?>
</head>
<!-- this part gets the text from the mySQL database -->
<?php
include 'dbconnect.php';
include 'hebrewDate.php';
switch ($monthNum) {
    case 1:
        $monthHebrew = mysqli_query($conn, 'SELECT monthHebrew FROM `month` WHERE id=1') or die();
        $monthAbout = mysqli_query($conn, 'SELECT monthAbout FROM `month` WHERE id=1') or die();
        $monthMore = mysqli_query($conn, 'SELECT monthMore FROM `month` WHERE id=1') or die();
        break;

    case 2:
        $monthHebrew = mysqli_query($conn, 'SELECT monthHebrew FROM `month` WHERE id=2') or die();
        $monthAbout = mysqli_query($conn, 'SELECT monthAbout FROM `month` WHERE id=2') or die();
        $monthMore = mysqli_query($conn, 'SELECT monthMore FROM `month` WHERE id=2') or die();
        break;

    case 3:
        $monthHebrew = mysqli_query($conn, 'SELECT monthHebrew FROM `month` WHERE id=3') or die();
        $monthAbout = mysqli_query($conn, 'SELECT monthAbout FROM `month` WHERE id=3') or die();
        $monthMore = mysqli_query($conn, 'SELECT monthMore FROM `month` WHERE id=3') or die();
        break;

    case 4:
        $monthHebrew = mysqli_query($conn, 'SELECT monthHebrew FROM `month` WHERE id=4') or die();
        $monthAbout = mysqli_query($conn, 'SELECT monthAbout FROM `month` WHERE id=4') or die();
        $monthMore = mysqli_query($conn, 'SELECT monthMore FROM `month` WHERE id=4') or die();
        break;

    case 5:
        $monthHebrew = mysqli_query($conn, 'SELECT monthHebrew FROM `month` WHERE id=5') or die();
        $monthAbout = mysqli_query($conn, 'SELECT monthAbout FROM `month` WHERE id=5') or die();
        $monthMore = mysqli_query($conn, 'SELECT monthMore FROM `month` WHERE id=5') or die();
        break;

    case 6:
        $monthHebrew = mysqli_query($conn, 'SELECT monthHebrew FROM `month` WHERE id=6') or die();
        $monthAbout = mysqli_query($conn, 'SELECT monthAbout FROM `month` WHERE id=6') or die();
        $monthMore = mysqli_query($conn, 'SELECT monthMore FROM `month` WHERE id=6') or die();
        break;

    case 7:
        $monthHebrew = mysqli_query($conn, 'SELECT monthHebrew FROM `month` WHERE id=7') or die();
        $monthAbout = mysqli_query($conn, 'SELECT monthAbout FROM `month` WHERE id=7') or die();
        $monthMore = mysqli_query($conn, 'SELECT monthMore FROM `month` WHERE id=7') or die();
        break;

    case 8:
        $monthHebrew = mysqli_query($conn, 'SELECT monthHebrew FROM `month` WHERE id=8') or die();
        $monthAbout = mysqli_query($conn, 'SELECT monthAbout FROM `month` WHERE id=8') or die();
        $monthMore = mysqli_query($conn, 'SELECT monthMore FROM `month` WHERE id=8') or die();
        break;

    case 9:
        $monthHebrew = mysqli_query($conn, 'SELECT monthHebrew FROM `month` WHERE id=9') or die();
        $monthAbout = mysqli_query($conn, 'SELECT monthAbout FROM `month` WHERE id=9') or die();
        $monthMore = mysqli_query($conn, 'SELECT monthMore FROM `month` WHERE id=9') or die(); 
        break;

    case 10:
        $monthHebrew = mysqli_query($conn, 'SELECT monthHebrew FROM `month` WHERE id=10') or die();
        $monthAbout = mysqli_query($conn, 'SELECT monthAbout FROM `month` WHERE id=10') or die();
        $monthMore = mysqli_query($conn, 'SELECT monthMore FROM `month` WHERE id=10') or die();
        break;

    case 11:
        $monthHebrew = mysqli_query($conn, 'SELECT monthHebrew FROM `month` WHERE id=11') or die();
        $monthAbout = mysqli_query($conn, 'SELECT monthAbout FROM `month` WHERE id=11') or die();
        $monthMore = mysqli_query($conn, 'SELECT monthMore FROM `month` WHERE id=11') or die();
        break;

    case 12:
        $monthHebrew = mysqli_query($conn, 'SELECT monthHebrew FROM `month` WHERE id=12') or die();
        $monthAbout = mysqli_query($conn, 'SELECT monthAbout FROM `month` WHERE id=12') or die();
        $monthMore = mysqli_query($conn, 'SELECT monthMore FROM `month` WHERE id=12') or die();
        break;

    case 13:
        $monthHebrew = mysqli_query($conn, 'SELECT monthHebrew FROM `month` WHERE id=13') or die();
        $monthAbout = mysqli_query($conn, 'SELECT monthAbout FROM `month` WHERE id=13') or die();
        $monthMore = mysqli_query($conn, 'SELECT monthMore FROM `month` WHERE id=13') or die();
        break;

    default:
        print "This is still under construction! Sorry!";
        break;
}
$result1 = mysqli_fetch_array($monthHebrew);
$result2 = mysqli_fetch_array($monthAbout);
$result3 = mysqli_fetch_array($monthMore);


?>


<body>
    <div class="header2">
        <h1 class="bigHeader2">
            <?php
            print $result1['monthHebrew'];
            ?>
        </h1>
    </div>
    <div class="firstMain2">
        <h5 class="firstBold2">
        <?php
            print $result2['monthAbout'];
            ?>
        </h5>
        <p class="firstSmall2">
        <?php
            print $result3['monthMore'];
            ?>
        </p>
    </div>
    </div>

    <!-- bottom footer -->
    <footer>
        <p class="footer">Website created by Shira Zacks. Please <a href="contact.php">contact me</a> if there are any mistakes; only Hashem
            is perfect!</p>
    </footer>

</body>

</html>