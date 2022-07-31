<?php
require_once("./config/connection.php");
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Responsive Product Cards | With Quick Popup View</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

    * {
      margin: 0;
      padding: 0;
      font-family: "Poppins", sans-serif;
    }

    body {
      background-color: #F8F4EF;
    }

    .product-container {
      height: auto;
      margin-top: 80px;
      display: flex;
      justify-content: center;
      align-items: center;
      margin-bottom: 100px;
    }

    .container {
      position: relative;
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      align-items: center;
      width: 100%;
    }

    /*Styles for product card*/

    .product .product-card {
      z-index: 1;
      background: #C8A382;
      position: relative;
      width: 300px;
      height: 400px;
      margin: 40px;
      border-radius: 10px;
    }

    .product .product-card:before {
      content: '';
      background: #CFAF92;
      position: absolute;
      display: block;
      top: 0;
      left: 0;
      width: 50%;
      height: 100%;
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .product .product-card .product-img {
      z-index: 1;
      position: absolute;
      max-width: 290px;
      top: 25%;
      left: 50%;
      transform: translate(-50%, -50%);
    }

    .product .product-card .name {
      z-index: 2;
      color: #fff;
      position: absolute;
      width: 100%;
      text-align: center;
      bottom: 130px;
      font-size: 20px;
      letter-spacing: 1px;
    }

    .product .product-card .price {
      z-index: 2;
      color: #fff;
      position: absolute;
      width: 100%;
      text-align: center;
      bottom: 80px;
      font-size: 30px;
      font-weight: 300;
    }

    .product .product-card .popup-btn {
      z-index: 2;
      color: #fff;
      background: #caa07c;
      position: absolute;
      bottom: 20px;
      left: 50%;
      transform: translateX(-50%);
      font-size: 14px;
      text-transform: uppercase;
      text-decoration: none;
      letter-spacing: 1px;
      padding: 10px 15px;
      border-radius: 20px;
      cursor: pointer;
    }

    /*Styles for popup view*/

    .product .popup-view {
      z-index: 2;
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0;
      visibility: hidden;
      transition: 0.5s;
      backdrop-filter: blur(50px);
    }

    .product .popup-view.active {
      opacity: 1;
      visibility: visible;
    }

    .product .popup-card {
      position: relative;
      display: flex;
      width: 800px;
      height: 500px;
      margin: 20px;
    }

    .product .popup-card .product-img {
      z-index: 2;
      position: relative;
      display: flex;
      justify-content: center;
      align-items: center;
      width: 45%;
      height: 90%;
      transform: translateY(25px);
      border-top-left-radius: 10px;
      border-bottom-left-radius: 10px;
    }

    .product .popup-card .product-img img {
      z-index: 2;
      position: relative;
      width: 450px;
      left: -50px;
    }

    .product .popup-card .info {
      z-index: 2;
      background: #fff;
      color: #C8A382;
      display: flex;
      flex-direction: column;
      width: 55%;
      height: 100%;
      box-sizing: border-box;
      padding: 40px;
      border-radius: 10px;
    }

    .product .popup-card .close-btn {
      color: #555;
      z-index: 3;
      position: absolute;
      right: 0;
      font-size: 20px;
      margin: 20px;
      cursor: pointer;
    }

    .product .popup-card .info h2 {
      font-size: 30px;
      line-height: 45px;
      margin: 5px;
    }

    .product .popup-card .info h2 span {
      font-size: 15px;
      text-transform: uppercase;
      letter-spacing: 2px;
    }

    .product .popup-card .info p {
      font-size: 15px;

    }

    .product .popup-card .info .price {
      font-size: 45px;
      font-weight: 300;
      margin: 10px;
    }

    .product .popup-card .info .add-cart-btn {
      color: #fff;
      background: #009DD2;
      font-size: 16px;
      font-weight: 600;
      text-align: center;
      text-decoration: none;
      text-transform: uppercase;
      margin: 10px auto;
      padding: 10px 50px;
      border-radius: 20px;
    }

    .product .popup-card .info .add-wish {
      color: #009DD2;
      font-size: 16px;
      text-align: center;
      font-weight: 600;
      text-transform: uppercase;
    }

    /*Responsive styles*/

    @media (max-width: 900px) {
      .product .popup-card {
        flex-direction: column;
        width: 550px;
        height: auto;
      }

      .product .popup-card .product-img {
        z-index: 3;
        width: 100%;
        height: 200px;
        transform: translateY(0);
        border-bottom-left-radius: 0;
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
        top: -25px;
      }

      .product .popup-card .product-img img {
        left: initial;
        max-width: 100%;
      }

      .product .popup-card .info {
        width: 100%;
        height: auto;
        padding: 20px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
      }

      .product .popup-card .info h2 {
        margin: 20px 5px 5px 5px;
        font-size: 25px;
      }

      .product .popup-card .info h2 span {
        font-size: 10px;
      }

      .product .popup-card .info p {
        margin: 5px;
        font-size: 13px;
      }

      .product .popup-card .info .price {
        margin: 5px;
        font-size: 30px;
      }

      .product .popup-card .info .add-cart-btn {
        margin: 5px auto;
        padding: 5px 40px;
        font-size: 14px;
      }

      .product .popup-card .info .add-wish {
        font-size: 14px;
      }

      .product .popup-card .close-btn {
        z-index: 4;
      }
    }

    img {
      border-radius: 10px;
    }

    .table-title {
      position: absolute;
      top: 100px;
      left: 30px;
      font-size: 3rem;
      color: #BA8C63;
    }

    .line {
      height: 5px;
      background-color: #C8A382;
      position: relative;
      top: 90px;
      left: 30px;
      width: 100px;
      border-radius: 20px;

    }


    @import url('https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&display=swap');

    .table-type {
      font-family: 'Cormorant SC', serif;
      text-transform: uppercase;
      text-align: center;
      font-size: 3rem;
      color: #BA8C63;
      position: relative;
      top: 80px;
    }

    .bar-table-line {
      position: relative;
      top: 90px;
      width: 500px;
      margin: auto;
      color: #EADDD0;
    }

    .Bar-Table {
      font-family: 'Cormorant SC', serif;
      text-transform: uppercase;
      text-align: center;
      font-size: 3rem;
      color: #BA8C63;
      position: relative;
    }

    .Table-line {
      position: relative;
      width: 500px;
      margin: auto;
      color: #EADDD0;
    }

    .error {
      color: #BA8C63;
    }


    @media screen and (max-width: 900px) {
      .product-container {
        margin-top: 200px;
      }

      .line {
        top: 160px;
      }

      .table-type {
        top: 160px;
      }

      .bar-table-line {
        top: 150px;
      }
    }

    .table {
      margin-top: 50px;
    }

    @media screen and (max-width: 550px) {
      .line {
        top: 147px;
      }

      .table-title {
        font-size: 2rem;
      }

      .table-type {
        font-size: 2rem;
      }

      .bar-table-line {
        top: 155px;
        width: 400px;
      }

      .Bar-Table {
        font-size: 2rem;
      }

      .Table-line {
        width: 400px;
      }

    }
  </style>
</head>

<body>
  <?php require_once('navbar.php'); ?>
  <p class="table-title" id="12">Candle Stand</p>
  <div class="line"></div><br>
  <p class="table-type">Candle Stand</p>
  <hr class="bar-table-line">

  <div class="product-container">

    <div class="container">
      <?php
      $query = "SELECT  * from item where product_id=12";
      $query_run = mysqli_query($conn, $query);
      $fetch_data = mysqli_num_rows($query_run) > 0;
      if ($fetch_data) {
        while ($row = mysqli_fetch_assoc($query_run)) {

      ?>
          <div class="product">
            <div class="product-card">
              <h2 class="name"><?php echo $row['item_name'] ?></h2>
              <a class="popup-btn">Quick View</a>
              <img src="products-img-upload/<?php echo $row['item_image'] ?>" class="product-img" alt="">
            </div>
            <div class="popup-view">
              <div class="popup-card">
                <a><i class="fas fa-times close-btn"></i></a>
                <div class="product-img">
                  <img src="pexels-life-of-pix-67468.jpg" alt="">
                </div>
                <div class="info">
                  <h2><?php echo $row['item_name'] ?></h2>
                  <h2><span>Description</span></h2>
                  <p> <?php echo $row['item_desc'] ?></p>
                  <h2><span>Size</span></h2>
                  <p><?php echo $row['item_size'] ?></p>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      }
      if (mysqli_num_rows($query_run) == 0) {
        echo "<h1 class='error'> No result found</h1>";
      }
      ?>

    </div>


  </div>
  <!-- <p class="Bar-Table" id="1">Bar table</p>
  <hr class="Table-line">
  <div class="product-container table">

    <div class="container">

      <?php
      $query = "SELECT  * from item where product_id=2";
      $query_run = mysqli_query($conn, $query);
      $fetch_data = mysqli_num_rows($query_run) > 0;
      if ($fetch_data) {
        while ($row = mysqli_fetch_assoc($query_run)) {

      ?>
          <div class="product">
            <div class="product-card">
              <h2 class="name"><?php echo $row['item_name'] ?></h2>
              <a class="popup-btn">Quick View</a>
              <img src="products-img-upload/<?php echo $row['item_image'] ?>" class="product-img" alt="">
            </div>
            <div class="popup-view">
              <div class="popup-card">
                <a><i class="fas fa-times close-btn"></i></a>
                <div class="product-img">
                  <img src="products-img-upload/<?php echo $row['item_image'] ?>" alt="">
                </div>
                <div class="info">
                  <h2><?php echo $row['item_name'] ?></h2>
                  <h2><span>Description</span></h2>
                  <p> <?php echo $row['item_desc'] ?></p>
                  <h2><span>Size</span></h2>
                  <p><?php echo $row['item_size'] ?></p>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      }
      if (mysqli_num_rows($query_run) == 0) {
        echo "<h1 class='error'> No result found</h1>";
      }
      ?>
    </div>


  </div>
  <p class="Bar-Table">Counter Table</p>
  <hr class="Table-line">
  <div class="product-container  table">

    <div class="container" id="1">
      <?php
      $query = "SELECT  * from item where product_id=3";
      $query_run = mysqli_query($conn, $query);
      $fetch_data = mysqli_num_rows($query_run) > 0;
      if ($fetch_data) {
        while ($row = mysqli_fetch_assoc($query_run)) {

      ?>
          <div class="product">
            <div class="product-card">
              <h2 class="name"><?php echo $row['item_name'] ?></h2>
              <a class="popup-btn">Quick View</a>
              <img src="products-img-upload/<?php echo $row['item_image'] ?>" class="product-img" alt="">
            </div>
            <div class="popup-view">
              <div class="popup-card">
                <a><i class="fas fa-times close-btn"></i></a>
                <div class="product-img">
                  <img src="products-img-upload/<?php echo $row['item_image'] ?>" alt="">
                </div>
                <div class="info">
                  <h2><?php echo $row['item_name'] ?></h2>
                  <h2><span>Description</span></h2>
                  <p> <?php echo $row['item_desc'] ?></p>
                  <h2><span>Size</span></h2>
                  <p><?php echo $row['item_size'] ?></p>
                </div>
              </div>
            </div>
          </div>
      <?php
        }
      }
      if (mysqli_num_rows($query_run) == 0) {
        echo "<h1 class='error'> No result found</h1>";
      }
      ?>
    </div>


  </div> -->


  <script type="text/javascript">
    var popupViews = document.querySelectorAll('.popup-view');
    var popupBtns = document.querySelectorAll('.popup-btn');
    var closeBtns = document.querySelectorAll('.close-btn');

    //javascript for quick view button
    var popup = function(popupClick) {
      popupViews[popupClick].classList.add('active');
    }

    popupBtns.forEach((popupBtn, i) => {
      popupBtn.addEventListener("click", () => {
        popup(i);
      });
    });

    //javascript for close button
    closeBtns.forEach((closeBtn) => {
      closeBtn.addEventListener("click", () => {
        popupViews.forEach((popupView) => {
          popupView.classList.remove('active');
        });
      });
    });
  </script>

</body>

</html>