<?php
// Include the database connection file
require_once("../config/connection.php");

if (isset($_POST['Insertdata'])) {
  $title = mysqli_real_escape_string($conn, $_POST['product-title']);
  $description = mysqli_real_escape_string($conn, $_POST['product-desc']);
  $size = mysqli_real_escape_string($conn, $_POST['product-size']);
  $product_name = mysqli_real_escape_string($conn, $_POST['product-name']);
  $product_category = mysqli_real_escape_string($conn, $_POST['category']);

  $file=$_FILES['gimage'];
  $name=rand(1,99999999999).time().$file['name'];
  $tmpname=$file['tmp_name'];
  $path="../products-img-upload/".$name;
  $insert_query = mysqli_query($conn, "INSERT INTO `item`(`item_name`, `item_desc`, `item_size`, `item_image`, `product_id`, `category_id`)
   VALUES ('$title','$description','$size','$name','$product_name','$product_category')") or die("Query failed");
  if ($insert_query) {
    move_uploaded_file($tmpname, $path); 
    echo "<script> 
                alert('product uploaded successfully');
                window.location.href='addproduct.php'; 
                </script>";
  } else {
    echo "<script> 
                alert('failed to upload product');
                window.location.href='addproduct.php'; 
                </script>";
  }
}


if ($_POST['type'] == "") {
  $sql = "SELECT * FROM category";

  $query = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

  $str = "";
  while ($row = mysqli_fetch_assoc($query)) {
    $str .= "<option value='{$row['category_id']}'>{$row['category_name']}</option>";
  }
} else if ($_POST['type'] == "categoryData") {

  $sql = "SELECT * FROM product WHERE category_id = {$_POST['id']}";

  $query = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

  $str = "";
  while ($row = mysqli_fetch_assoc($query)) {
    $str .= "<option value='{$row['product_id']}'>{$row['product_name']}</option>";
  }
}

echo $str;
