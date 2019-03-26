<?php
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 3/25/2019
 * Time: 5:32 PM
 */

$maxCount=count($arr)-1;
while($maxCount>=1){
    for($i=0; $i<$maxCount; $i++){}
    if($arr[$i]>$arr[$i+1]){

        $tmp=$arr[$i];
        $arr[$i]=$arr[$i+1];
        $arr[$i+1]=$tmp;
    }
    $maxCount--;
}
//we read the array -1 with a for loop
//we look for numbers smaller than the one that we have read before with other for loop
//if we find a small number
//we put the value from the previous  array that we have found in the new one
//show the array