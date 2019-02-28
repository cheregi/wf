<?php
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 2/28/2019
 * Time: 9:41 AM
 */
echo "WHERE AM 1 ".getcwd(). "\n";
$filename ="Files/diana.txt";
echo "<br><br>filesize: ".filesize($filename)."\n";
echo "<br><br>filename: $filename";

//1.method of reading the file- first 50 characters from the file
$handle=fopen($filename, "r");
//$contents =fread($handle, filesize($filename));
//print_r($contents);
//
//$handle2=fopen($filename, "r");
//$contents2=fread($handle2, 50);
//
//echo "<br><br>".($contents2);

//2.method of reading the file one letter at a time
//for ($i=0; $i <filesize($filename); $i++) {
//    echo "<br>".fgetc($handle);
//}

//3.method goes together with method .2-check the end of the file
echo "<br><br>ftell:".ftell($handle)."<br>";
//rewind($handle);

fseek($handle, 10, SEEK_SET);


//4.method of reading the file one line at a time
while (false !==($char =fgets($handle))) {
    echo "<br>$char";
}



