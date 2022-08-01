<?php
require_once("config/connection.php");

?>
<html>

<head>
  <style>
    .main-content {
      margin-top: 50px;

    }


    .title {
      text-align: center;
      margin: auto;
      font-size: 3rem;
      color: #BA8C63;
      border-bottom: 1px solid rgba(186, 140, 99, 0.4);
      width: 50%;

    }

    .product-title {
      margin-top: 20px;
      text-align: center;
      color: #BA8C63;
      font-size: 2rem;
      margin-bottom: 20px;
      text-decoration: underline;

    }

    .table {
      display: flex;
      flex-wrap: wrap;
      justify-content: flex-start;
      height: auto;
      margin: auto;

    }

    .table-type {
      display: flex;
      flex-direction: column;
      margin-top: 20px;
      margin-bottom: 20px;
      height: 400px;
      width: 400px;
      align-items: center;
      justify-content: center;
    }

    @media (max-width: 800px) {
      .table {
        flex-direction: column;
        justify-content: center;
        align-items: center;
      }

    }

    .product-image {
      height: 100%;
      width: 100%;
      object-fit: cover;
      overflow: hidden;

      border-radius: 10px;
    }

    .product-image {
      transition: 0.3s;
    }

    .product-image:hover {
      cursor: pointer;
    }

    .image-title {
      font-size: 3rem;


    }

    .image {
      box-shadow: rgba(60, 64, 67, 0.3) 0px 1px 2px 0px, rgba(60, 64, 67, 0.15) 0px 1px 3px 1px;
      height: 300px;
      width: 300px;
    }

    .product-link {
      text-decoration: none;
      color: #CC9966;
    }


    /* Font */
    @import url("https://fonts.googleapis.com/css?family=Quicksand:400,700");

    /* Design */
    *,
    *::before,
    *::after {
      box-sizing: border-box;
    }





    .main {
      max-width: 1200px;
      margin: 0 auto;
    }

    h1 {
      font-size: 24px;
      font-weight: 400;
      text-align: center;
    }

    img {
      height: auto;
      max-width: 100%;
      vertical-align: middle;
      height: 350px;
      width: 400px;
    }

    .btn {
      color: #ffffff;
      padding: 0.8rem;
      font-size: 14px;
      text-align: center;
      text-transform: uppercase;
      border-radius: 4px;
      font-weight: 400;
      display: block;
      width: 100%;
      cursor: pointer;
      border: 1px solid rgba(255, 255, 255, 0.2);
      background: transparent;
    }

    .btn:hover {
      background-color: rgba(255, 255, 255, 0.12);
    }

    .cards {
      display: flex;
      flex-wrap: wrap;
      list-style: none;
      margin: 0;
      padding: 0;
    }

    .cards_item {
      display: flex;
      padding: 1rem;
    }

    @media (min-width: 40rem) {
      .cards_item {
        width: 50%;
      }
    }

    @media (min-width: 56rem) {
      .cards_item {
        width: 33.3333%;
      }
    }

    .card {
      background-color: white;
      border-radius: 0.25rem;
      box-shadow: rgba(186, 140, 99, 0.3) 0px 3px 6px, rgba(186, 140, 99) 0px 3px 6px;
      display: flex;
      flex-direction: column;
      overflow: hidden;
    }

    .card_content {
      padding: 1rem;
      background: #BA8C63;
    }

    .card_title {
      color: #ffffff;
      font-size: 1.1rem;
      font-weight: 700;
      letter-spacing: 1px;
      text-transform: capitalize;
      margin-bottom: 5px;
    }

    .card_text {
      color: #ffffff;
      font-size: 0.875rem;
      line-height: 1.5;
      margin-bottom: 1.25rem;
      font-weight: 400;
    }

    .card_image {
      object-fit: cover;
      overflow: hidden;
    }
  </style>

</head>

<body>
  <div class="main-content">
    <p class="title">Our Products</p>
    <p class="line"></p>

    <div class="main">
      <?php
      $id = 0;
      while ($id < 9) {
        $id++;
        $fetch_title = mysqli_query($conn, "SELECT  * from category WHERE category_id='$id'") or die('query failed');
        if (mysqli_num_rows($fetch_title) > 0) {
          $title = mysqli_fetch_assoc($fetch_title);

      ?>
          <p class="product-title"><?php echo $title['category_name'] ?></p>
          <ul class="cards">
            <?php
            $query = "SELECT  * from item WHERE category_id =$id ORDER BY item_id DESC LIMIT 3";
            $query_run = mysqli_query($conn, $query);
            $fetch_data = mysqli_num_rows($query_run) > 0;
            if ($fetch_data) {
              while ($row = mysqli_fetch_assoc($query_run)) {

            ?>
                <li class="cards_item">
                  <div class="card">
                    <div class="card_image"><img src="products-img-upload/<?php echo $row['item_image'] ?>"></div>
                    <div class="card_content">
                      <h2 class="card_title"><?php echo $row['item_name'] ?></h2>
                      <?php
                      $product_id = $row['category_id'];
                      $link = mysqli_query($conn, "SELECT * FROM `item_link` WHERE link_id = '$product_id'") or die('query failed');
                      if (mysqli_num_rows($link) > 0) {
                        $fetch_link = mysqli_fetch_assoc($link);
                      }
                      ?>
                      <a href="<?php echo $fetch_link['item_link'] ?>" class="btn card_btn">view More</a>
                    </div>
                  </div>
                </li>
            <?php
              }
            }
            ?>
          </ul>
    </div>
<?php
        }
      }
?>
  </div>
</body>

</html>