<?php
    require_once('db.php');


    if(!isset($_GET['id'])) {
        // die ('id not provided');
    }

    $id= $_GET['id'];            //from url
    $sql = "SELECT * FROM `files` WHERE id = $id";          
    $result = mysqli_query($con, $sql); 

    if ($result->num_rows != 1){                            //checking url and db id's are they same or not
        // die ('id is not in our db');
    }

    $data = $result->fetch_assoc();                        //fetching array with given url id which id is available in db
    // print_r($data);                                      //from this array result taking values which is required 

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
</head>
<body>
<?php include('navbar.php') ?>

    
<div class="container">
    <br>
        <div class="card bg-light " style="width:75%;">
            <article class="card-body mx-auto" style="max-width: 400px;">



                <form action="modify.php?id=<?=$id ?>" method="POST" >
                    <h2>Edit form</h2>
                    <div class="form-group">
                        <label for="title">Title</label>  
                        <input class="form-control"  type="text" name="title" value="<?= $data['title'] ?>"   >
                    </div> <!-- form-group  title// -->          


                    <div class="form-group">
                        <label for="description">Description</label>
                        <input class="form-control"  type="text" name="description" rows="3"  
                            value="<?= $data['description'] ?>" ></input>
                    </div> <!-- form-group  description// -->   
                    
                    
                    <div class="form-group">
                        <label for="file">File input</label>
                        <input type="file" class="form-control-file" name="file" value="<?= $data['file'] ?>"   >
                    </div> <!-- form-group  file upload -->
                    
                    
                    <div class="form-group">
                        <input type="submit" value="Submit" name="editForm">
                    </div> <!-- form-group// -->     

                </form>
            </article>
        </div> <!-- card.// -->

    </div> <!--container end.//-->


</body>
</html>