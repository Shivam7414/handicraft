<?php
require_once("../config/connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashborad</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      background-color: #F1E8E0;
    }

    @import url('https://fonts.googleapis.com/css2?family=Cormorant+SC:wght@300&display=swap');

    .product-title {
      font-family: 'Cormorant SC', serif;
      text-align: center;
      margin-bottom: 50px;
      text-transform: uppercase;

    }


    .info-box {
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 100px;
      line-height: 30px;
    }

    .mb-3 {
      margin-bottom: 2rem !important;
    }

    .information-form {
      box-shadow: rgba(0, 0, 0, 0.05) 0px 0px 0px 1px, rgb(209, 213, 219) 0px 0px 0px 1px inset;
      padding: 50px;
    }
    .btn{
      width: 100vh;
      margin: auto;
    }

    @media screen and (max-width:1008px) {
      .info-box {
        padding: 50px;
      }
    }

    @media screen and (max-width:750px) {
      .info-box {
        padding: 70px;
      }
    }

    @media screen and (max-width: 640px) {
      .info-box {
        padding: 20px;
      }

      .product-title {
        margin-bottom: 30px;
      }
    }
  </style>
</head>

<body>
  <?php require_once('adminnavbar.php'); ?>
  <div class="info-box">
    <h1 class="product-title">Enter Your Information About Product</h1>
    <form class="row g-3 needs-validation information-form" action="addproductcode.php" method="post" enctype="multipart/form-data" novalidate>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Product Title</label>
        <input type="text" class="form-control" id="validationCustom03" placeholder="Enter your product title" name="product-title" required>
        <div class="invalid-feedback">
          Please Enter your product title.
        </div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Product Description</label>
        <textarea class="form-control" id="validationTextarea" placeholder="Enter your product Description" name="product-desc" required></textarea>
        <div class="invalid-feedback">
          Please enter your product description.
        </div>

      </div>
      <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Product Size</label>
        <textarea class="form-control" id="validationTextarea" placeholder="Enter your product size" name="product-size" required></textarea>
        <div class="invalid-feedback">
          Please enter your product size.
        </div>
      </div>
      <div class="mb-3">
        <label for="formFile" class="form-label">Choose Your Product Image </label>
        <input type="file" class="form-control" aria-label="file example" name="gimage" accept="image/png, image/jpg, image/jpeg" required>
        <div class="invalid-feedback">Please choose a product image.</div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Select your product name </label>
        <select class="form-select" required aria-label="select example" id="product-name" name="product-name">
          <option value=""> Select product name</option>
        </select>
        <div class="invalid-feedback">Please select your Product name</div>
      </div>
      <div class="mb-3">
        <label for="exampleFormControlInput1" class="form-label">Select your product category </label>

        <select class="form-select" required aria-label="select example" id="product-category" name="category">
          <option value="">Select product category</option>
        </select>
        <div class="invalid-feedback">Please select product name.</div>
      </div>
      <input type="submit" class="btn btn-primary btn-lg" value="Save" name="Insertdata">
    </form>
  </div>
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      function loadData(type, category_id) {
        $.ajax({
          url: "addproductcode.php",
          type: "POST",
          data: {
            type: type,
            id: category_id
          },
          success: function(data) {
            if (type == "categoryData") {
              $("#product-category").html(data);
            } else {
              $("#product-name").append(data);
            }
          }
        });
      }

      loadData();

      $("#product-name").on("change", function() {
        var productname = $("#product-name").val();

        if (productname != "") {
          loadData("categoryData", productname);
        } else {
          $("#product-category").html("");
        }
      })
    });
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
  </script>
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (() => {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      const forms = document.querySelectorAll('.needs-validation')

      // Loop over them and prevent submission
      Array.from(forms).forEach(form => {
        form.addEventListener('submit', event => {
          if (!form.checkValidity()) {
            event.preventDefault()
            event.stopPropagation()
          }

          form.classList.add('was-validated')
        }, false)
      })
    })()
  </script>
</body>

</html>