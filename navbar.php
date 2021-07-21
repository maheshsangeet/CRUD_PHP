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
    <title>Document</title>
    <style>
        
        .sidebar{
            text-align: center;
            width:15%;
            height:91vh;
            background-color:#343A40;

        }
        .list-group-item {
            background-color:#343A40;
            color:white;

        }
        .list-group-item:hover {
            color: black;
        }

    </style>
</head>
<body>
    

    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            
            <h2 class="mx-auto text-white">CRUD operation</h2>
            
        </div>
    </nav>
<!-- navbar end -->

<!-- sidebar -->
    <div class="sidebar float-right ">
        <div class="list-group ">
            <a href="home.php" class="list-group-item list-group-item-action  ">Home</a>
            <a href="index.php" class="list-group-item list-group-item-action  ">Upload</a>
            <a href="show.php" class="list-group-item list-group-item-action  ">Edit</a>
            <a href="show.php" class="list-group-item list-group-item-action  ">Delete</a>
        </div>
    </div>
    
<!-- sidebar end -->




</body>
</html>