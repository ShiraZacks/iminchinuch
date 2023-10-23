
<?php
//gets the selected yontif in variable named $SelectedYontif
$SelectedYontif = ["ראש השנה", "צום גדליה", "יום כיפור"];

foreach ($SelectedYontif as $Yontif) {
    $stmt = $conn->prepare('SELECT yontifHebrew, yontifAbout, yontifDeeper FROM `yontif` WHERE yontifHebrew=?');
    $stmt->bind_param("s", $SelectedYontif);
    $stmt->execute(array($Yontif));
    $parshaInfo = $stmt->get_result();
    break;

}
$result = mysqli_fetch_array($parshaInfo);
?>




                <!-- get each one to call that sql section, put it in the below sections. -->
                <div class="header2" id="header1">
                    <h1 class="bigHeader2">
                        <?php
print $result['yontifHebrew'];
?>
                    </h1>
                </div>
                <div class="firstMain2">
                    <h5 class="firstBold2">
                        <?php
print $result['yontifAbout'];
?>
                    </h5>
                    <p class="firstSmall2">
                        <?php
print $result['yontifDeeper'];
?>
                    </p>
                </div>