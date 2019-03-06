<?php
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 3/6/2019
 * Time: 11:54 AM
 */


$multiCity=array (
    array ('City', 'Country', 'Continent'),
    array ('Tokyo', 'Japan', 'Asia'),
    array ('Mexico City','Mexico', 'North America'),
    array ('New York City', 'USA', 'North America'),
    array ('Mumbai', 'India', 'Asia'),
    array ('Seoul', 'Korea', 'Asia'),
);
?>


    <h2>City Table<br /></h2>


<?php
echo $multiCity[0][0] ."</br>";
echo $multiCity[0][1] ."</br>";
echo $multiCity[0][2] ."</br>";
$multiCity[]=array("adsa", "adsa");
var_dump($multiCity);
?>

<?php
//Find the number of rows in the array. Using this variable in the for loop

//instead of the exact number gives you the option of adding to the array
//at a later date without changing the for loop.
array_push($multiCity,['Chemistry','Biology']);
print_r($multiCity);
$num = count ($multiCity);
echo $num;
//For loops begin with "0" to iterate over an entire array. In this case,
//you need to begin with the second item in the array and must start with "1".

for ($row=1; $row<$num; $row++){
    echo "<tr>\n";

    foreach ($multiCity[$row] as $value){
        echo "<br>$value</br>\n";
    }

}

echo count($multiCity);

?>