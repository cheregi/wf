<?php 
session_start();
include 'dbconnect.php';
include 'functions.php';
include 'header.php';

//FillIn SQL //////////////////////
$SQL = $connection->prepare('SELECT * FROM article');
$SQL->execute();
$SQL->setFetchMode(PDO::FETCH_ASSOC);
//print_r($SQL->rowCount());
$result = $SQL->fetchAll();

//print_r($_SESSION);
//var_dump($result);
//showing content/////////////////////////////////////////////////////////////////
if (isset($_SESSION['loggedin'])) {
    if ($_SESSION["loggedin"] == true) echo "<div class='row'><p><a href='new.php'> new.php</a> </p></div>";
}


for ($count = 0; $count < count($result); $count++) { 
	echo "<div class='row'>";

  
	if(is_array($result[$count]) == true ) {

	//Loop and Create HTML
//    print_r($result[$count]);
    echo"<a href='view.php?id=".$result[$count]['id']."'><h1>".$result[$count]['title']."</h1></a>";
    echo'<p>'.$result[$count]['description'].'</p>';

    //print_r($result[$count]);
    echo'<img src="'.$result[$count]['img'].'"</img>';

	}
	echo "</div>";
}



