<?php
require_once("../config/connection.php");
$category_id=null;
if (isset($_POST['getvalue'])){
    $category_id=$_POST['product-name'];
    echo $category_id;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Product</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
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
    </style>
</head>

<body>
    <?php require_once('adminnavbar.php'); ?>
    <form method="post">
    <div class="choice">
        <select class="form-select" id="product-name" name="product-name">
            <option value=""> Select product name</option>
        </select>
        <select class="form-select" id="product-category" name="category">
            <option value="">Select product category</option>
        </select>

        <input class="btn btn-primary" type="submit" value="Search"name="getvalue">
        <input class="btn btn-primary" type="submit" value="Search All"name="getall">

    </div>
    </form>
    <div class="product-data">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Product Title</th>
                    <th scope="col">Product Type</th>
                    <th scope="col">Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if (isset($_POST['getall'])){
                $query = "SELECT  * from item";
                }
                elseif ($category_id==null){
                $query = "SELECT  * from item";
                }
                else{
                    $query = "SELECT * from item where category_id='$category_id'"; 
                }
                $query_run = mysqli_query($conn, $query);
                $fetch_data = mysqli_num_rows($query_run) > 0;
                if ($fetch_data) {
                    while ($row = mysqli_fetch_assoc($query_run)) {

                ?>
                        <tr>
                            <td scope="row"><?php echo $row['item_name'] ?></td>
                            <td>
                            <?php
                            if($row['category_id']==1){
                                echo "Table";
                            } 
                            elseif($row['category_id']==2){
                                echo "Chair";
                            }
                            elseif($row['category_id']==3){
                                echo "Book Racks";
                            }
                            elseif($row['category_id']==4){
                                echo "Candle Stand";
                            }
                            elseif($row['category_id']==5){
                                echo "Seater Sofa";
                            }
                            elseif($row['category_id']==6){
                                echo "Storage Box";
                            }
                            elseif($row['category_id']==7){
                                echo "Bed";
                            }
                            elseif($row['category_id']==8){
                                echo "Decoratives Article";
                            }
                            ?></td>                       
                            <td><a class="btn btn-primary" onclick="return confirm('Are you sure?')" href="deleteproduct.php?itemid=<?php echo $row['item_id']; ?>" role="button">Delete</a></td>
                        </tr>
                <?php
                    }
                }
                if (mysqli_num_rows($query_run) == 0) {
                    echo "<h1 class='error'> No Product found</h1>";
                }
                ?>


            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/dependselect.js"></script>
</body>

</html>