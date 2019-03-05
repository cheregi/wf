<?php
session_start();
include 'dbconnect.php';
include 'functions.php';

if($_SESSION["loggedin"] == true) {

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
//        var_dump($_POST);
//AddToDB //////////////////////////////////////
        $SQL = $connection->prepare('INSERT INTO article (title, description) VALUES (:TITLE, :DESCRIPTION)');

        $SQL->bindParam(':TITLE', $_POST['title'], PDO::PARAM_STR);
        $SQL->bindParam(':DESCRIPTION', $_POST['description'], PDO::PARAM_STR);
        $SQL->execute();
        $myNewId = $connection->lastInsertId();
//ProcessFile

        if (!empty($_FILES)) {
//            var_dump($_FILES);
            $FileNameToDB = ProcessUploadedFile($_FILES['image']);
            $SQL = $connection->prepare('UPDATE article SET img=:IMG WHERE id=:ID');
            $SQL->bindParam(':IMG', $FileNameToDB, PDO::PARAM_STR);
            $SQL->bindParam(':ID', $myNewId, PDO::PARAM_STR);
            $SQL->execute();
        }

        if ($SQL->execute()) {
            header("Location: view.php?id=$myNewId"); /* Redirect browser */
        } else {
            echo "Error in Insert";
            print_r($SQL->errorInfo());
            $SQL->debugDumpParams();
//            var_dump($_POST);
        }

    }

}


include 'header.php';
?>
		<form method="POST" action="new.php" enctype="multipart/form-data">
			<div class="form-group">
			    <label for="title">Tip a title for your project</label>
			    <input class="form-control" type="text" name="title" value=""></input>
			</div>
			
			<div class="form-group">
			    <label for="description">Define a description for your project</label>
			    <textarea class="form-control" name="description"></textarea>
			</div>
		
			<div class="form-group">
			    <label for="image">Choose an image for your project</label>
			    <input class="form-control" type="file" name="image"></input>
			</div>
			<div class="form-group cc">
		    	<button class="btn btn-default" type="submit">Submit</button>
			</div>
		</form>

<?php
include 'footer.php';
?>



