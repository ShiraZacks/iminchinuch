<!DOCTYPE html>
<html lang="en">

<head>
    <title>I'M IN CHINUCH</title>
    <link rel="shortcut icon" type="image/jpeg" href="favcon.jpg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" charset="utf-8" src="hebcal.js?<?=time()?>"></script>
    <script type="text/javascript" charset="utf-8" src="toggleBars.js?<?=time()?>"></script>
    <link rel="stylesheet" href="style.css?<?=time()?>">
    <?php include 'menu.php'; ?>
</head>


<body>
    <!-- Header -->
    <header class="header">
        <h1 class="bigHeader">I'M IN CHINUCH</h1>
        <p class="middleHeader">That means I'm qualified to teach you about important stuff.</p>
        <!-- <h5 class="middleHeader">For example....</h5>
        <img class="headerPic" src="I_LOVE_HASHEM.jpg" alt="I LOVE HASHEM!!">
        <p class="littleHeader">'דברים ו':ה</p> -->
    </header>

    <!-- First section of text -->
    <div class="firstSmall">
        <!-- today's date -->
<!--Start MyZmanim Widget for: https://iminchinuch.herokuapp.com/  -->
    <script type="text/javascript" charset="UTF-8" language="javascript" src="https://www.myzmanim.com/widget.aspx?lang=en&mode=CandlesOnly&fsize=9&fcolor=f44336&hcolor=ff9a9a&bcolor=f44336&suf=s&key=oemDHmhHjMIzKzgvjacxn6n7DtZbV9WcOknBZ%2b%2fQrNt9%2bl7VvsBY9MxMagxAVoHxaBmjN9Nn3FL90m6QUto5NdGhivm1Y4RaIsfy3%2fvj%2fnqVGj2j84kXN17AQ%2bVngL93"></script><noscript style="font-family:verdana;">Find your daily zmanim at <a href="http://www.myzmanim.com/">MyZmanim.com</a>.</noscript>
<!--End MyZmanim Widget-->


        <h2 id="hebrewDate"></h2>

        <!-- First section of text -->
        <div class="firstMain">
            <div class="firstTop">
                <div class="firstHeader">
                    <h1>Welcome to this AMAZING website!</h1>
                    <h5 class="firstBold">Created in entirety by Shira Zacks</h5>

                    <p class="firstSmall">(who is amazing)</p>
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
                    <div id="hebcal" onload="shira()"></div>
                    

                    <p class="secondSmall">This week's Parsha is .</p>
                    <p class="secondSmall">This month is .</p>
                    <p class="secondSmall">The next Yom Tov is .</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="bottomBar">
            <h1 class="bottomWords">Words To Live By: A day without laughing is a day wasted.</h1>
        </div>

        <!-- bottom footer -->
        <footer>
        <p class="footer">Website created by Shira Zacks. Please <a href="contact.php">contact me</a> if there are any mistakes; only Hashem
            is perfect!</p>
        </footer>
</body>

</html>