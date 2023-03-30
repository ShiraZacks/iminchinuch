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

    <!-- First section of text -->

    <!-- Tishrei -->
    <div class="Tishrei" id="tishrei">
        <div class="header2">
            <h1 class="bigHeader2">חדש תשרי</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</h5>
            <p class="firstSmall2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</p>
        </div>
    </div>

    <!-- Cheshvan -->
    <div class="Cheshvan" id="cheshvan">
        <div class="header2">
            <h1 class="bigHeader2">חדש חשון</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</h5>
            <p class="firstSmall2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</p>
        </div>
    </div>

    <!-- Kislev -->
    <div class="Kislev" id="kislev">
        <div class="header2">
            <h1 class="bigHeader2">חדש כסלו</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</h5>
            <p class="firstSmall2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</p>
        </div>
    </div>

    <!-- Teves -->
    <div class="Teves" id="teves">
        <div class="header2">
            <h1 class="bigHeader2">חדש טבת</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">This month has Asara B'Teves. </h5>
            <p class="firstSmall2">This is also the month when Esther was taken to Achashveirosh and became queen.
                Also, Yocheved, Chana Aidel, and Tehilla have birthdays during this month!</p>
        </div>
    </div>

    <!-- Shevat -->
    <div class="Shevat" id="shevat">
        <div class="header2">
            <h1 class="bigHeader2">חדש שבט</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</h5>
            <p class="firstSmall2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</p>
        </div>
    </div>

    <!-- Adar Aleph -->
    <div class="AdarAleph" id="adarAleph">
        <div class="header2">
            <h1 class="bigHeader2">'חדש אדר א</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</h5>
            <p class="firstSmall2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</p>
        </div>
    </div>

    <!-- Adar -->
    <div class="Adar" id="adar">
        <div class="header2">
            <h1 class="bigHeader2">חדש אדר</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</h5>
            <p class="firstSmall2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</p>
        </div>
    </div>

    <!-- Nisan -->
    <div class="Nisan" id="nisan">
        <div class="header2">
            <h1 class="bigHeader2">חדש ניסן</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</h5>
            <p class="firstSmall2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</p>
        </div>
    </div>

    <!-- Iyar -->
    <div class="Iyar" id="iyar">
        <div class="header2">
            <h1 class="bigHeader2">חדש אייר</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</h5>
            <p class="firstSmall2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</p>
        </div>
    </div>

    <!-- Sivan -->
    <div class="Sivan" id="sivan">
        <div class="header2">
            <h1 class="bigHeader2">חדש סיון</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</h5>
            <p class="firstSmall2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</p>
        </div>
    </div>

    <!-- Tamuz -->
    <div class="Tamuz" id="tamuz">
        <div class="header2">
            <h1 class="bigHeader2">חדש תמוז</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</h5>
            <p class="firstSmall2">Cupcake ipsum dolor sit amet chupa chups dragée soufflé cheesecake. Donut cake jelly-o marshmallow cheesecake croissant tart jujubes jujubes. Jelly beans jelly beans lollipop oat cake danish. Tiramisu muffin tiramisu carrot cake chocolate lollipop pastry. Tart wafer candy cake icing cake shortbread. Donut carrot cake jelly beans liquorice cheesecake carrot cake dessert caramels danish. Lemon drops apple pie gummi bears tootsie roll cotton candy biscuit pastry. Jelly carrot cake chocolate cake lemon drops marzipan jelly-o candy canes. Donut soufflé caramels shortbread pastry jelly-o ice cream macaroon sesame snaps.</p>
        </div>
    </div>

    <!-- Av -->
    <div class="Av" id="av">
        <div class="header2">
            <h1 class="bigHeader2">חדש אב</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">This is the month beginning with the 9 days. Today is the yahrzeit of Ahron Hakohein, and it is the only yahrzeit mentioned straight out in the Torah. During this month, many many sad things happen. Bayis Rishon and Sheini were destroyed, and we begin the month with a time of aveilus. We don't eat meat or cut nails or get married or wear new clothes or do laundry or (for some people) shower or swim or do dangerous things or celebrate getting engaged.</h5>
            <p class="firstSmall2">After the sad part, though, this month contains one of the happiest days in the entire Jewish calendar, the 15th of Av! So we have that to look forward to... Also, not to freak anyone out of anything, but the next Rosh Chodesh email is going to be about Elul.</p>
        </div>
    </div>

    <!-- Elul -->
    <div class="Elul" id="elul">
        <div class="header2">
            <h1 class="bigHeader2">חדש אלול</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">Beginning now, we will be hearing the shofar in shul unless you are not going to shul like me (cuz I'm not a man), except Shabbos when we don't do it. But you can ask your fathers/brothers/husbands/sons about it. We add Ledavid Hashem into davening, and at the end of the month we (again, mostly meaning our fathers/brothers/husbands/sons) say selichos. We wish everyone a kesiva v'chasima tova. Also bein hazmanim ends. </h5>
            <p class="firstSmall2">The name Elul, as we know from Mrs. Bloch's song, stands for the words Ani Ledodi V'Dodi Li. I am for Hashem and Hashem is for me🎵🎶 . This month is a time when we take on kabbalos and work on ourselves, trying to be the best that we could be. I heard somewhere that it is not that we are being like hypocrites, "Oh, Rosh Hashana and Yom Kippur are coming, let's be good" like goyim do with a certain holiday where good kids get presents from a flying zaidy who keeps tabs on everyone just for that month. Instead, we are showing Hashem that this is what we wish we could be like. We are showing Hashem that we know that this is ideal, and we wish we could always live up to the ideal but unfortunately, it is often really hard to do it. This month is the month where we try our best, not because the other months don't count, but because we wish we could always be living our lives this way.</p>
        </div>
    </div>

    <!-- bottom footer -->
    <footer>
        <p class="footer">Website created by Shira Zacks. Please <a href="contact.php">contact me</a> if there are any mistakes; only Hashem
            is perfect!</p>
    </footer>

</body>

</html>