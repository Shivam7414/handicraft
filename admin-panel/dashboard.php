<?php
require_once("../config/connection.php");

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
        .product-container{
            padding: 20px;
            display: flex;
            justify-content: space-evenly;
            flex-wrap: wrap;
           
        }

        .product-card {
            margin-top: 20px;
            border-radius: 10px;
            box-shadow: rgba(0, 0, 0, 0.02) 0px 1px 3px 0px, rgba(27, 31, 35, 0.15) 0px 0px 0px 1px;
            background-color: #C8A382;
            width: 300px;
            height: 250px;
    
        }
        @import url('https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova&family=Kaisei+Opti:wght@700&display=swap');
        .product-title{
            border-bottom: 1px solid #F1E8E0;
            display: flex;
            align-items: center;
            padding-left: 10px;
            height: 80px; 
            font-family: 'Ibarra Real Nova', serif; 
            color: white;
             
            font-size: 2rem;
        }
        .product-data{
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Ibarra Real Nova', serif;
            font-size: 5rem;
            color: whitesmoke;
        }
        .top-title{
            font-family: 'Ibarra Real Nova', serif;
            font-size: 3rem;
            margin-top: 30px;
            margin-bottom: 30px;
            text-decoration: underline;
            color: #CC9966;
        }

    </style>
</head>

<body>
    <?php require_once("../config/connection.php"); ?>
    <?php require_once('adminnavbar.php'); ?>
    <center><p class="top-title">Total Product Available In Inventory </p></center>
    <div class="product-container">
       
    <?php
      $id = 0;
      while ($id < 9) {
        $id++;
        $fetch_title = mysqli_query($conn, "SELECT  * from category WHERE category_id='$id'") or die('query failed');
        if (mysqli_num_rows($fetch_title) > 0) {
          $title = mysqli_fetch_assoc($fetch_title);

      ?>
        <div class="product-card">
            <div class="product-title">
            <?php echo $title['category_name'] ?>
            </div>
            <?php
            $fetch_count =mysqli_query($conn, "SELECT  * from item WHERE category_id='$id'") or die('query failed');
            $rowcount = mysqli_num_rows( $fetch_count );
            ?>
            <div class="product-data"><?php echo $rowcount ?></div>
        </div>
        <?php
              }
            }
            ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/dependselect.js"></script>
</body>

</html>