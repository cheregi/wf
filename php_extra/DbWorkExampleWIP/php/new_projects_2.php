<?php 
include 'dbconnect.php';
include 'functions.php';
include 'header.php';

	if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        //var_dump($_POST);
        if(!empty($_POST['title']) AND !empty($_POST['description'])) {
            echo "<h1><br>Your addition is processed<br></h1>";

            ////////////checking if the entered text is already exists in the list
            $SQLForCheckIfExists = $connection->prepare('SELECT * FROM projects WHERE title=:TITLE');
            $SQLForCheckIfExists->bindParam(':TITLE', $_POST['title'], PDO::PARAM_STR);

            $SqlInputForCheckIfExists=$SQLForCheckIfExists->execute();
            $ExistsCheck=$SQLForCheckIfExists->rowCount();
            echo "This title exists already in the DB :".$ExistsCheck.' time(s)';
            if($ExistsCheck==0){
                echo'<h4><br>is not duplicate </h4>';

                //SQL //////////////////////////////////////////////////\
                $SQL = $connection->prepare('INSERT INTO projects (title, description, image) VALUES (:TITLE, :DESCRIPTION, :IMAGE)');
                $SQL->bindParam(':IMAGE', $_POST['image'], PDO::PARAM_STR);
                $SQL->bindParam(':TITLE', $_POST['title'], PDO::PARAM_STR);
                $SQL->bindParam(':DESCRIPTION', $_POST['description'], PDO::PARAM_STR);

                $SQL->execute();
                $myNewId = $connection->lastInsertId();
                //var_dump($_POST['title']);

                //ProcessFile///////////////////////////////////////////
                if (!empty($_FILES)) {
//            var_dump($_FILES);
                    $FileNameToDB = ProcessUploadedFile($_FILES['image']);
                    $SQL = $connection->prepare('UPDATE projects SET image=:IMAGE WHERE id=:ID');
                    $SQL->bindParam(':IMAGE', $FileNameToDB, PDO::PARAM_STR);
                    $SQL->bindParam(':ID', $myNewId, PDO::PARAM_INT);
                    $SQL->execute();

                    ////////////////////////////////////////////////////////////Connecting with the list_projects-----------------------------------------
//                if ($SQL->execute()) {
//                    header("Location: list_projects.php?id=$myNewId"); /* Redirect browser */
//                } else {
//                    echo "Error in Insert";
//                }
                    ////////////////////////////////////////////////////////////Connecting with the view_projects-----------------------------------------
                    if ($SQL->execute()) {
                        header("Location: view_projects.php?id=$myNewId"); /* Redirect browser */
                    } else {
                        echo "Error in Insert";
                    }
                }


            }else {
                echo'<h3><br>What you have inserted is a duplicate </h3>';
                ?>
                <form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
                    <div class="form-group cc">
                        <label for="button">Are you sure you want to add this duplicate into DB?</label>
                        <button class="btn btn-default" type="submit" style="border: 2px solid orangered">Add</button>
                    </div>
                </form>
                <?php
            }



	}else {
            echo "<h1><br>The fields are empty, please add some title and desciption<br></h1>";
        }




}else{
?>
<form method="POST" action="<?php echo $_SERVER["PHP_SELF"]; ?>" enctype="multipart/form-data">
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
        <button class="btn btn-default" type="submit">Add</button>
    </div>
</form>
<?php
    }
	?>