<?php

include 'navbar.php';
require_once('db.php');

    if (isset($_POST['submitForm'])){
        $title = $_POST['title'];
        $description = $_POST['description'];

        $insertquery = "INSERT INTO `files` (`title`, `description`) VALUES('$title','$description') ";
        $iquery = mysqli_query($con, $insertquery);


        if ($iquery) {

            ?>
                <script>alert('added to db');
                        location.replace("show.php");

                </script>

            
            <?php
        }
        else {
            ?>
                <script>alert('not added to db');</script>
            <?php
        }
   
    }
    else {
        ?>
            <script>alert('not submitted');</script>
        <?php  
    }


?>

<?php

    $sql = "SELECT * FROM `files`";
    $result = mysqli_query($con, $sql);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>CRUD</title>
    <style>
        .list-group-item {
            background-color:#343A40;
            color:white;

        }
    </style>
</head>
<body>
    <div class="container">
        <table class="table mt-md-5" style="width:80%;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">File</th>
                </tr>

                <?php
                    $result_row = mysqli_num_rows($result);

                    // if ($result_row > 0){
                        // $row = mysqli_fetch_assoc($result);

                    if($result->num_rows > 0){
                        while ($row = $result->fetch_assoc()) {
                            echo "<tr>";
                            echo       "<td>" . $row['id']          .  "</td>";
                            echo       "<td>" . $row['title']       .  "</td>";
                            echo       "<td>" . $row['description'] .  "</td>";
                            echo       "<td>" . $row['file']        .  "</td>";             
                            echo "</tr>";
                            
                        }
                    }

                ?>


            </thead> 
        </table>
    </div>
</body>
</html>