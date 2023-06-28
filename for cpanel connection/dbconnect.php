<?php
$servername = 'localhost:3306';
$username = 'iminchin_misszacks';  
$password = 'MissZacksPass';
$DBName = 'iminchin_iminchinuch';
$conn = mysqli_connect($servername, $username, $password, $DBName);
if(mysqli_connect_errno()){
    echo "Something went wrong... Please contact me to let me know you see this message!! 10 points if you are the first one!" . mysqli_connect_error();
    exit();
}
