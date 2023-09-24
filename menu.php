<?php
echo ' <!-- Navbar  -->
    <div class="top">
        <div class="topBar">
            <div class="smaller">
                <a class="bar" onclick="myFunction()" title="Toggle Navigation Menu"><img
                        src="bars.svg" alt="MENU"></a>
            </div>
            <a href="index.php" class="buttons">Home</a>
            <a href="parsha.php" class="buttons">This Week\'s Parsha</a>
            <a href="month.php" class="buttons">This Month</a>
            <a href="yontif.php" class="buttons">Next Yom Tov</a>
            <a href="contact.php" class="buttons">Contact Me</a>
            <a href="quotes.php" class="buttons">Quote of the Day</a>
        </div>

        <!-- Navbar on small screens -->
        <div id="smallScreen" class="hide">
            <ul>
                <li><a href="index.php" class="button top">Home</a> </li>
                <li><a href="parsha.php" class="button">This Week\'s Parsha</a> </li>
                <li><a href="month.php" class="button">This Month</a></li>
                <li><a href="yontif.php" class="button">Next Yom Tov</a></li>
                <li><a href="contact.php" class="button">Contact Me</a></li>
                <li><a href="quotes.php" class="button bottom">Quote of the Day</a></li>
            </ul>
        </div>
    </div>
    <div class="under_the_menu"></div>
';
