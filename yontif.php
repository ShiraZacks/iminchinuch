<!DOCTYPE html>
<html lang="en">

<head>
    <title>I'M IN CHINUCH</title>
    <link rel="shortcut icon" type="image/jpeg" href="favcon.jpg" />
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script type="text/javascript" charset="utf-8" src="toggleBars.js"></script>
    <link rel="stylesheet" href="style.css?<?= time() ?>">
    <?php include 'menu.php'; ?>
</head>


<body>
<?php 
require 'vendor/autoload.php';
include 'dbconnect.php';

//gets this week's parsha in variable named $currentParsha
use Zman\Zman;

$today = new DateTime();
$currentYontif = Zman::parse('December 17, 2017')->isYuntif();

if ($currentYontif == true){
    print "yup!";}else{
        print "nope!";
    }?>
    <h3>This page is under construction. Sorry!!</h3>
<p><?php echo $currentYontif; ?></p>
    <div class="yontif">
        <div class="header2">
            <h1 class="bigHeader2">yontif coming up</h1>
        </div>
        <div class="firstMain2">
            <h5 class="firstBold2">reason for it</h5>
            <p class="firstSmall2">halachos or stuff like that</p>
        </div>
    </div>

    <!-- bottom footer -->
    <footer>
        <p class="footer">Website created by Shira Zacks. Please <a href="contact.php">contact me</a> if there are any mistakes; only Hashem
            is perfect!</p>
    </footer>
</body>

</html>