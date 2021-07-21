<?php

    require_once('db.php');

    if(isset($_GET['id'])) {
        $id =  $_GET['id'];
        $sql = "DELETE FROM `files` WHERE id = $id";
        $iquery = mysqli_query($con, $sql);

        if ($iquery) {

            ?>
                <script>
                        alert('deleted data');
                        location.replace("show.php");
                </script>
            
            <?php
        }
        else {
            ?>
                <script>alert('something went wrong');</script>
            <?php
            
        }
    }



?>