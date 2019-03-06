<?php
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 3/6/2019
 * Time: 9:21 AM
 */
include 'dbconnect.php';
//var_dump($_GET);

//foreach ($_GET as $key => $value) {
//    echo "<br><br>MyParam: $key Value: $value";
//}
//echo "idtodosomething" . $_GET['idtodosomething'];
/////http://127.0.0.1/wf/php_extra/DbWorkExample2/php/getTest.php?titletosearch=intellinote
echo "title to search for" . $_GET['titletosearch'];



$SQL = $connection->prepare('SELECT id, title FROM article WHERE title LIKE :TITLE');
$SQL->bindParam(':TITLE',$_GET['titletosearch'], PDO::PARAM_STR);
$SQL->execute();
$SQL->setFetchMode(PDO::FETCH_ASSOC);
print_r($SQL->rowCount());
$result = $SQL->fetchAll();
var_dump($result);


for ($count = 0; $count < count($result); $count++) {
    //for($ArrayIndex=0; $ArrayInddex<count($result);$ArrayIndex++){
//    echo "<br>ArrayIndex".$ArrayIndex;
    // echo"<br><a href="view.php"'>'.$result[$ArrayIndex]['title'].'</a>";
    //}
    echo "<div class='row'>";
    if(is_array($result[$count]) == true ) {
        //Loop and Create HTML
//    print_r($result[$count]);
        echo"<a href='view.php?id=".$result[$count]['id']."'><h1>".$result[$count]['title']."</h1></a>";
    }
    echo "</div>";
}