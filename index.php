<!DOCTYPE html>
<html lang="en">

<head>
    <title>I'M IN CHINUCH</title>
    <link rel="shortcut icon" type="image/jpeg" href="favcon.jpg" />
    <meta charset="UTF-8">
    <meta title="Get ready to learn!">
    <meta name="description" content="Get ready to learn! Parsha, Rosh Chodesh, Yom Tov... Just because you left school doesn't mean you should stop learning!">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" charset="utf-8" src="toggleBars.js?<?= time() ?>"></script>
    <link rel="stylesheet" href="style.css?<?= time() ?>">
    <?php include 'menu.php';
    require 'vendor/autoload.php';
    include 'dbconnect.php';
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
        <!-- <h5 class="middleHeader">For example....</h5>
        <img class="headerPic" src="I_LOVE_HASHEM.jpg" alt="I LOVE HASHEM!!">
        <p class="littleHeader">'דברים ו':ה</p> -->
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
                    include 'hebrewDate.php';
                    getHebrewDate();
                    global $today;
                    $roshChodesh = Zman::parse($today)->isRoshChodesh();
                    if ($roshChodesh == true) {
                        print " It's Rosh Chodesh - don't forget a Rosh Chodesh treat!";
                    }; ?>
                <div><?php include 'davening.php'; ?></div>

                </p>
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
    <div class="bottomBar">
        <h1 class="bottomWords">Words To Live By: A day without laughing is a day wasted.</h1>
    </div>
    </div>

    <!-- bottom footer -->
    <footer>
        <p class="footer">Website created by Shira Zacks. Please <a href="contact.php">contact me</a> if there are any mistakes; only Hashem
            is perfect!</p>
    </footer>
</div>

</body>

</html>