<?php
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 2/28/2019
 * Time: 11:32 AM
 */
$file="FileToGetPut.txt";
file_put_contents($file, "Hi");

//open the file to get the existing content
$current =file_get_contents($file);


//append a new person to the file
$current .="\njohn smith\n";
print_r($current);

//write teh content back to the file
file_put_contents($file, $current);