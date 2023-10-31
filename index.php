<!DOCTYPE html>
<html lang="en">

<head>
    <title>I'M IN CHINUCH</title>
    <link rel="shortcut icon" type="image/jpeg" href="favcon.jpg" />
    <meta charset="UTF-8">
    <meta title="Get ready to learn!">
    <meta name="description" content="Get ready to learn! Parsha, Rosh Chodesh, Yom Tov... Just because you left school doesn't mean you should stop learning!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" charset="utf-8" src="toggleBars.js?<?=time()?>"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=David+Libre&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?<?=time()?>">
    <?php include 'menu.php';
require 'vendor/autoload.php';
include 'dbconnect.php';
include 'hebrewDate.php';
//gets this week's parsha in variable named $currentParsha
use Zman\Zman;
?>
</head>

<body>
    <div class="pageContainer">
        <div class="contentWrap">

            <!-- Header -->
            <header class="header">
                <h1 class="bigHeader">I'M IN CHINUCH</h1>
                <p class="middleHeader">That means I'm qualified to teach you about important stuff.</p>
            </header>

            <!-- First section of text -->
            <div class="firstSmall"></div>
            <!-- today's date -->

            <!-- First section of text -->
            <div class="firstMain">
                <div class="firstTop">
                    <div class="firstHeader">
                        <h1>Just because you left school</h1>
                        <h5 class="firstBold">doesn't mean you need to stop learning.</h5>

                        <p class="firstSmall">Keep it up!</p>
                    </div>
                </div>
            </div>
            <hr>
            <!-- Second Grid -->
            <div class="secondMain">
                <div class="secondTop">
                    <div class="secondHeader">
                        <h1>Recent Updates</h1>
                        <h5 class="secondBold">Looked at a calendar recently? </h5>
                        <p id="date" class="secondSmall">
                            <?php
global $now;
echo "Today's date is " . $now;
?></p>
                        <div><?php include 'davening.php';
global $today;
$roshChodesh = Zman::parse($today)->isRoshChodesh();
if ($roshChodesh == true) {
    print " It's Rosh Chodesh - don't forget a Rosh Chodesh treat!";
}
;?></div>

                    </div>
                </div>
            </div>
            <hr>


            <div id="hebcal-shabbat"></div>
            <script defer>
                fetch('https://www.hebcal.com/shabbat?cfg=i2&geonameid=4990729&b=18&M=on&lg=a&tgt=_top')
                    .then(response => response.text())
                    .then(data => document.getElementById('hebcal-shabbat').innerHTML = data);
            </script>


            <hr>

<?php
include 'dbconnect.php';
$grabQuote = mysqli_query($conn, 'SELECT `quote` FROM `quotes` WHERE `day` = DAYOFYEAR(CURRENT_DATE())') or die();
$quote = mysqli_fetch_array($grabQuote);
?>
            <div class="bottomBar">
                <h1 class="bottomWords">Quote of the Day: <?php print $quote['quote'];?>.</h1>
                <a href="quotes.php">Send me your own quote of the day!</a>
            </div>
        </div>

        <!-- bottom footer -->
        <?php include "footer.php";?>

    </div>

</body>

</html>