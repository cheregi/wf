<?php
/**
 * Created by PhpStorm.
 * User: NumeriCall
 * Date: 3/1/2019
 * Time: 3:11 PM
 */
$db = 'tagbesill';
$host = '127.0.0.1';
$username='root';

$password='';

//new PDO('mysql:host=localhost;dbname=tagbesill','root');


try{
//    $connection = new PDO("mysql:dbname=$db;host=$host", $username, $password);
    $connection= new PDO("mysql:host=$host;dbname=$db", $username);
    
} catch (\PDOException $exception) {
    print_r('[ERROR] %s Impossible connection to the DB %s');
    print_r($exception);
}

$articles= $connection->query('SELECT * FROM article');

//echo "<br>".$articles->rowCount()."<br><br>";

//print_r($articles->fetch());
//echo "<br><br><br>";
//print_r($articles->fetch(PDO::FETCH_ASSOC));

$AllArticles=$articles->fetchAll();

//write html with For Loop
foreach($AllArticles as $article) {
//    print_r($article);
    ?>
    <h2>
        <?php
        echo $article["title"];
        ?>
    </h2>

    <img src="
    <?php
    echo $article["img"];
//    ?>
    ">

    <p>
        <?php
        echo $article["description"];
//     echo "<h2>".$article{'title'}."</h2>";
//
//    echo "<p>".$article{'description'}."</p>";
//  echo "<img src=".$article['img']." />";

//        ?>
    </p>





<?php
}?>
