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
    <?php   include 'navbar.php'; 
            require_once('db.php');

            $sql = "SELECT * FROM `files`";
            $result = mysqli_query($con, $sql);
            
    ?>

    <div class="container">
        <table class="table mt-md-5" style="width:80%;">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Title</th>
                    <th scope="col">Description</th>
                    <th scope="col">File name</th>
                    <th scope="col">Image</th>
                    <th scope="col">Actions</th>

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
                            ?> 
                                <td> 
                                    <img src="<?php echo "upload/" .$row['file']; ?>" width="80px" alt="image" >
                                </td> 
                            <?php

                            echo       "<td>";
                            echo            "<div class= 'btn-group'>";
                            echo                "<a type= 'button' class= 'btn btn-secondary' href='edit.php?id=" . $row['id'] ."' >Edit </a>";
                            echo                "<a type= 'button' class= 'btn btn-danger' href='delete.php?id=" . $row['id'] ."' >Delete </a>";

                            echo            "</div>";
                            echo       "</td>";
                            echo "</tr>";
                            
                        }
                    }

                ?>

            </thead> 
        </table>
    </div>
</body>
</html>