<?php


function easterReverse(string $FilenameToEdit) {
//    $filenameOriginal="file.txt";
//    $filenameToWrite="fileTemp.txt";
//
//    copy($filenameOriginal, $filenameToWrite);


$fileContent =file_get_contents($FilenameToEdit);
//echo "$fileContent";
//echo "<br> Halfway: ".floor(strlen($fileContent)/2);

$secondPart=substr($fileContent, floor(strlen($fileContent)/2));
$firstPart=substr($fileContent,0, strlen($secondPart)-1);

//echo "<br> firstPart:<br>".$firstPart."\n";
//echo "<br> secondPart:<br>".$secondPart."\n";

//echo "<br> secondPartReversed:<br>".strrev($secondPart);

$file = fopen($FilenameToEdit,"r+");
fseek($file, strlen($firstPart), SEEK_SET);
fwrite($file, strrev($secondPart), strlen($secondPart));
fclose($file);
}
easterReverse("file.txt");

