<?php 
session_start();
include 'dbconnect.php';
include 'functions.php';
include 'header.php';

var_dump($_GET);
var_dump($_SESSION);

//////////////////sql put in a function GetFromDBWhithId
$result = GetFromDBWithId($_GET['id'], $connection);


echo "<div class='row'>";

for ($count = 0; $count < count($result); $count++) {
    if (is_array($result[$count]) == true) {
        //Loop And FillIn HTML//////////////////////////
        //print_r($result[$count]);

        // jose WF3 code
//        foreach ($result[$count] as $key => $value) {
//            echo "<div class='col'>";
//            if ($key == 'img') echo "<img src='$value'>";
//            else echo "<p> $value </p>";
//            echo "</div>";
//        }


        echo"<a href='view.php?id=".$result[$count]['id']."'><h1>".$result[$count]['title']."</h1></a>";
        echo'<p>'.$result[$count]['description'].'</p>';

        //print_r($result[$count]);
        echo'<img src="'.$result[$count]['img'].'"</img>';

       
    }
    echo "</div>";


        if (isset($_SESSION['loggedin'])) {
            if ($_SESSION["loggedin"]) echo "<p><a href='edit.php?id=". $result[$count]['id'] ."'</a> edit.php </p>";
            {
            };


        }
    //}
}
echo "</div class='row'>";
	include 'footer.php';
