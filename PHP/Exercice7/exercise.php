<?php
function divide (int $value, int $divisor):float
{
    if ($divisor == 0) {
        throw new RuntimeException('Deivision by 0 is not allowed');
    }
    return (float)($value / $divisor);
}
//    try {
//        divide(10,0);
//    } catch (RuntimeException $exception) {
//        echo $exception->getMessage();
//    }
//}
function arrayDivide(array $baseArray, int $divisor) : array {
    $result =[];
    foreach ($baseArray as $base) {
            try {
                $result[]=divide($base, $divisor);
            } catch (RuntimeException $exception) {
                echo "<br>".$exception->getMessage();
                echo"<br> Using ".$base;
                $result[]=$base;
            }
        }
    return $result;
    }


print_r( arrayDivide([16,5.6], 0));