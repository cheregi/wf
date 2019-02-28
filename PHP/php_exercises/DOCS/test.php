<?php
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 2/28/2019
 * Time: 4:29 PM
 */
$arrayTest=['1.10', 12.4, 1.13];
print_r($arrayTest);

echo count ($arrayTest);
for ($a=0; $a<5; $a++) {
    echo "<br> a is: ".$a;
    if($a==3) {echo "a 33333";
    } else

}
for ($i=0; $i<count($arrayTest); $i++) {
    echo"<br> i: ".$i;
    echo"<br> arrayTest :".$arrayTest[$i];
    if($i==1) {$arrayTest[$i]= "new value";}

}
print_r($arrayTest);
array_push($arrayTest, "new values from array_push");
print_r($arrayTest);
//function AddToArray() {
//    array_push($arrayTest,);
//}
