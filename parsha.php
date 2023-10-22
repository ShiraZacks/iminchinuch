<!DOCTYPE html>
<html lang="en">

<head>
    <title>I'M IN CHINUCH</title>
    <link rel="shortcut icon" type="image/jpeg" href="favcon.jpg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" charset="utf-8" src="toggleBars.js?<?=time()?>"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=David+Libre&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?<?=time()?>">
    <?php include 'menu.php';?>
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
    case $currentParsha: //this uses the variable to call the sql code below
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

$parshaThisWeekBool = is_null($result);
if ($parshaThisWeekBool == true) {
    print "<div class='firstTop noParshaText'>
                <h2 class='firstBold'>There is no Parsha this week because of Yontif!</h2>
                <h1 class='firstBold'>😊</h1>
            </div>"; //comeback
} else {?>
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
    <?php
}
;?>
    <!-- bottom footer -->
    <?php include "footer.php";?>

    </div>

</body>

</html>