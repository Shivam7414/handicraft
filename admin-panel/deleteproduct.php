<?php
require_once("../config/connection.php");
if ($_GET['itemid']) {
    $item_id = $_GET['itemid'];
    //fetching image name form database
    $image_delete = mysqli_query($conn, "SELECT  * from item WHERE item_id='$item_id'") or die('query failed');
    if (mysqli_num_rows($image_delete) > 0) {
        $fetch_image = mysqli_fetch_assoc($image_delete);
    }
    $image_path = "../products-img-upload/";
    $image_name = $fetch_image['item_image'];
    //Delete image form folder
    unlink($image_path . $image_name);
    //Delete image name from database
    $query = "DELETE FROM item WHERE item_id= '$item_id' ";
    $result = mysqli_query($conn, $query);
    if ($result) {
        header("location:view.php");
    }
}
