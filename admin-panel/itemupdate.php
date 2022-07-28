<?php
require_once("../config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>update Product</title>
    <style>
    @import url('https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&display=swap');

    .product-title {
      font-family: 'Cormorant SC', serif;
      text-align: center;
      margin-top: 50px;
      text-transform: uppercase;

    }
  </style>
</head>
<body>
<?php require_once('adminnavbar.php'); ?>
<h1 class="product-title">Enter Your Information About Product</h1>

<?php require_once('itemform.php'); ?>
</body>
</html>