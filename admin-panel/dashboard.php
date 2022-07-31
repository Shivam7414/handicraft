<?php
require_once("../config/connection.php");
$category_id = null;
if (isset($_POST['getvalue'])) {
    $category_id = $_POST['product-name'];
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        html,
        body {
            margin: 0;
            padding: 0;
            background-color: #F1E8E0;
        }

        .choice {
            display: flex;
            margin-top: 40px;
            justify-content: center;
            padding: 20px;
            box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px, rgb(209, 213, 219) 0px 0px 0px 1px inset;
        }

        .form-select {
            box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px, rgb(209, 213, 219) 0px 0px 0px 1px inset;
            max-width: 250px;
            min-width: 220px;
            margin-left: 10px;
        }

        .btn {
            margin-left: 5px;
            width: 125px;
        }

        .product-data {
            padding: 10px;
        }

        .product-card {
            display: flex;
            width: 800px;
    
        }
        .card{
           margin: 20px;
        }
    </style>
</head>

<body>
    <?php require_once("../config/connection.php"); ?>
    <?php require_once('adminnavbar.php'); ?>
    <div class="container">
        <div class="product-card">
            <div class="product-title"></div>
            <div class="product-data"></div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/dependselect.js"></script>
</body>

</html>