<?php
    require_once('db.php');

    if(isset($_GET['id']) && isset($_POST['editForm'])) {
    // if(isset($_POST['editForm'])) {

        $id= $_GET['id'];            //from url
        $title = $_POST['title'];
        $description = $_POST['description'];
        $file = $_FILES['file']['name'];


        $sql = "UPDATE `files` SET `id`='$id',`title`='$title',`description`='$description', `file`='$file'   WHERE id = $id ";
        $iquery = mysqli_query($con, $sql);

        if ($iquery) {

            ?>
                <script>
                        alert('modified data');
                        location.replace("show.php");
                </script>
            <?php
        }
        else {
            ?>
                <script>
                        alert('something went wrong');
                </script>
            <?php
            
        }

    }
    else {
        echo 'invalid';
    }

?>