<?php 

$server = "localhost";
$user = "root";
$password = "";
$db = "crud";


$con = mysqli_connect($server, $user, $password,$db);   

// Check connection
if ($con) {
    ?>
        <!-- <script> alert('connection successfull')</script> -->
    <?php
}
else {
    ?>
        <script> alert('no connection')</script>
    <?php
}