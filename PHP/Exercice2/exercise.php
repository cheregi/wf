<?php
$password;
$salt;
//echo "$password<br>";
//echo $salt;

//echo strlen("$password");
//echo strlen("$salt");
$partOne = substr("$password", 0, -6);
$partTwo= substr("$password", -6);

$saltedPassword = "$partOne$salt$partTwo";
