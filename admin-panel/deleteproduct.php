<?php
require_once("../config/connection.php");
if ($_GET['itemid'])
{
    $item_id = $_GET['itemid'];
    $query="DELETE FROM item WHERE item_id= '$item_id' ";
    $result=mysqli_query($conn,$query);
    if($result){
        header("location:view.php");
    }
}
?> 