<?php
include "dbconnect.php";
include "header.php";
include "functions.php";


$SQL = $connection->prepare('SELECT * FROM projects');
$SQL->execute();
$SQL->setFetchMode(PDO::FETCH_ASSOC);
//print_r($SQL->rowCount());
$result = $SQL->fetchAll();

for($arrayCounter=0; $arrayCounter<count($result); $arrayCounter++) {
    echo "<div class='row'>";
    if(is_array($result[$arrayCounter]) == true){
        echo"<a href='view.php?id=".$result[$arrayCounter]['id']."'><h1>".$result[$arrayCounter]['title']."</h1></a>";
        echo'<p>'.$result[$arrayCounter]['description'].'</p>';


        echo'<img src="'.$result[$arrayCounter]['image'].'"</img>';

        echo "</div>";
    }

}

