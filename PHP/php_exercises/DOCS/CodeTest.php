<?php
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 3/1/2019
 * Time: 9:09 AM
 */

function AddThingsToArray($ArrayIn, $StringIn) {

    array_push($ArrayIn, $StringIn);
//    print_r($ArrayIn);
    return $ArrayIn;
}

//without array_push
function AddStringToArrayExtra($ArrayIn, $StringIn) {

}
$myArray=['abc', 'def'];
$myArray=AddThingsToArray($myArray,"ghi");
print_r($myArray);
print_r("<br>");
print_r(AddThingsToArray($myArray, "jkl"));



function findInArrayAndChange($ArrayIn, $StringToFind, $NewValue){
//echo  $StringToFind;
    foreach ($ArrayIn as $key => $contentInArray){

        if($contentInArray==$StringToFind){
//            echo $contentInArray;
            $ArrayIn[$key]=$NewValue;
        }

//        echo $contentInArray;

    }
//print_r($ArrayIn);
return ($ArrayIn);
}
print_r("<br>");
print_r(findInArrayAndChange($myArray, "abc", "first"));
$myArray=findInArrayAndChange($myArray, "abc", "first");
print_r("<br>");

print_r(AddThingsToArray($myArray, "jkl"));
print_r("<br>");

//print_r ($myArray);
//print_r("<br>");
$newArray=findInArrayAndChange($myArray, "first", "second");
print_r ($newArray);