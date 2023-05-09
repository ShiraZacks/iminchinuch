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
    <h3>This page is under construction. Sorry!!</h3>

    <?php
    require 'vendor/autoload.php';
    include 'dbconnect.php';

    //gets this week's parsha in variable named $currentParsha
    use Zman\Zman;

    $today = new DateTime();
    $currentParsha = Zman::parse($today)->parshaHebrew;




    switch ($currentParsha) {
        case $currentParsha:
            echo "This week's Parsha is ", $currentParsha;

            $stmt = $conn->prepare('SELECT parshaHebrew FROM `parsha` WHERE parshaHebrew=?');
            $stmt->bind_param("s", $currentParsha);
            $stmt->execute();
            $parshaHebrew = $stmt->get_result();
           /// $parshaHebrew = $result->fetch_assoc();
        



            $parshaAbout = mysqli_query($conn, 'SELECT parshaAbout FROM `parsha` WHERE id=1') or die();
            $parshaDeeper = mysqli_query($conn, 'SELECT parshaDeeper FROM `parsha` WHERE id=1') or die();
            break;

        case 2:
            $parshaHebrew = mysqli_query($conn, 'SELECT parshaHebrew FROM `parsha` WHERE id=2') or die();
            $parshaAbout = mysqli_query($conn, 'SELECT parshaAbout FROM `parsha` WHERE id=2') or die();
            $parshaDeeper = mysqli_query($conn, 'SELECT parshaDeeper FROM `parsha` WHERE id=2') or die();
            break;

        case 3:
            $parshaHebrew = mysqli_query($conn, 'SELECT parshaHebrew FROM `parsha` WHERE id=3') or die();
            $parshaAbout = mysqli_query($conn, 'SELECT parshaAbout FROM `parsha` WHERE id=3') or die();
            $parshaDeeper = mysqli_query($conn, 'SELECT parshaDeeper FROM `parsha` WHERE id=3') or die();
            break;

        case 4:
            $parshaHebrew = mysqli_query($conn, 'SELECT parshaHebrew FROM `parsha` WHERE id=4') or die();
            $parshaAbout = mysqli_query($conn, 'SELECT parshaAbout FROM `parsha` WHERE id=4') or die();
            $parshaDeeper = mysqli_query($conn, 'SELECT parshaDeeper FROM `parsha` WHERE id=4') or die();
            break;

        case 5:
            $parshaHebrew = mysqli_query($conn, 'SELECT parshaHebrew FROM `parsha` WHERE id=5') or die();
            $parshaAbout = mysqli_query($conn, 'SELECT parshaAbout FROM `parsha` WHERE id=5') or die();
            $parshaDeeper = mysqli_query($conn, 'SELECT parshaDeeper FROM `parsha` WHERE id=5') or die();
            break;

        case 6:
            $parshaHebrew = mysqli_query($conn, 'SELECT parshaHebrew FROM `parsha` WHERE id=6') or die();
            $parshaAbout = mysqli_query($conn, 'SELECT parshaAbout FROM `parsha` WHERE id=6') or die();
            $parshaDeeper = mysqli_query($conn, 'SELECT parshaDeeper FROM `parsha` WHERE id=6') or die();
            break;

        case 7:
            $parshaHebrew = mysqli_query($conn, 'SELECT parshaHebrew FROM `parsha` WHERE id=7') or die();
            $parshaAbout = mysqli_query($conn, 'SELECT parshaAbout FROM `parsha` WHERE id=7') or die();
            $parshaDeeper = mysqli_query($conn, 'SELECT parshaDeeper FROM `parsha` WHERE id=7') or die();
            break;

        case 8:
            $parshaHebrew = mysqli_query($conn, 'SELECT parshaHebrew FROM `parsha` WHERE id=8') or die();
            $parshaAbout = mysqli_query($conn, 'SELECT parshaAbout FROM `parsha` WHERE id=8') or die();
            $parshaDeeper = mysqli_query($conn, 'SELECT parshaDeeper FROM `parsha` WHERE id=8') or die();
            break;

        case 9:
            $parshaHebrew = mysqli_query($conn, 'SELECT parshaHebrew FROM `parsha` WHERE id=9') or die();
            $parshaAbout = mysqli_query($conn, 'SELECT parshaAbout FROM `parsha` WHERE id=9') or die();
            $parshaDeeper = mysqli_query($conn, 'SELECT parshaDeeper FROM `parsha` WHERE id=9') or die();
            break;

        case 10:
            $parshaHebrew = mysqli_query($conn, 'SELECT parshaHebrew FROM `parsha` WHERE id=10') or die();
            $parshaAbout = mysqli_query($conn, 'SELECT parshaAbout FROM `parsha` WHERE id=10') or die();
            $parshaDeeper = mysqli_query($conn, 'SELECT parshaDeeper FROM `parsha` WHERE id=10') or die();
            break;

        case 11:
            $parshaHebrew = mysqli_query($conn, 'SELECT parshaHebrew FROM `parsha` WHERE id=11') or die();
            $parshaAbout = mysqli_query($conn, 'SELECT parshaAbout FROM `parsha` WHERE id=11') or die();
            $parshaDeeper = mysqli_query($conn, 'SELECT parshaDeeper FROM `parsha` WHERE id=11') or die();
            break;

        case 12:
            $parshaHebrew = mysqli_query($conn, 'SELECT parshaHebrew FROM `parsha` WHERE id=12') or die();
            $parshaAbout = mysqli_query($conn, 'SELECT parshaAbout FROM `parsha` WHERE id=12') or die();
            $parshaDeeper = mysqli_query($conn, 'SELECT parshaDeeper FROM `parsha` WHERE id=12') or die();
            break;

        case 13:
            $parshaHebrew = mysqli_query($conn, 'SELECT parshaHebrew FROM `parsha` WHERE id=13') or die();
            $parshaAbout = mysqli_query($conn, 'SELECT parshaAbout FROM `parsha` WHERE id=13') or die();
            $parshaDeeper = mysqli_query($conn, 'SELECT parshaDeeper FROM `parsha` WHERE id=13') or die();
            break;

        default:
            print "This is still under construction! Sorry!";
            break;
    }
    $result1 = mysqli_fetch_array($parshaHebrew);
    $result2 = mysqli_fetch_array($parshaAbout);
    $result3 = mysqli_fetch_array($parshaDeeper);
    ?>

    <body>
        <div class="header2">
            <h1 class="bigHeader2">
                <?php
                print "פרשת ";
                print $result1['parshaHebrew'];
                ?>
            </h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">
                <?php
                print $result2['parshaAbout'];
                ?>
            </h5>
            <p class="firstSmall2">
                <?php
                print $result3['parshaDeeper'];
                ?>
            </p>
        </div>
        </div>
        </div>


        <!-- bottom footer -->
        <footer>
            <p class="footer">Website created by Shira Zacks. Please <a href="contact.php">contact me</a> if there are any mistakes; only Hashem
                is perfect!</p>
        </footer>


    </body>

</html>