<?php
$password;
$salt;
echo strlen($password);
echo strlen($salt);

//when the length of the passsword is odd:
//$pos=ceil(strlen($password)/2);
//$firstpart=substr($password,0 , $pos);
//$secondpart= substr ($password, $pos);

//when the legth of the password is even:
//$firstpart=substr($password,0 , strlen($password)/2);
//$secondpart= substr ($password, strlen($password)/2);
//
//$saltedPassword = $firstpart.$salt.$secondpart;


//another version
$middle=floor(strlen($password)/2);
$saltedPassword = substr($password,0,$middle).$salt.substr($password,$middle,strlen($password));


//the bonus part:
$firstpart=substr(
    $password,
    0,
    floor(strlen($password)/2)+(strlen($password)%2)
);
$lastpart=substr($password, ceil(strlen($password)/2));

$saltedPassword = $firstpart.$salt.$lastpart;



