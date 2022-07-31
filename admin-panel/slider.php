<?php require_once("../config/connection.php");
    if (isset($_POST['uploadimage'])) {
            $image1 = $_FILES['image1']['name'];
            $image1_size = $_FILES['image1']['size'];
            $image1_tmp_name = $_FILES['image1']['tmp_name'];
            $image1_folder = '../sliderimage/' . $image1;
            if (!empty($image1)) {
                $select_image1 = mysqli_query($conn,"UPDATE `slider` SET `image1`='$image1' WHERE slider_id = 1");
                if ($select_image1) {
                move_uploaded_file($image1_tmp_name, $image1_folder);
                echo "<script> 
                alert('Slider Image Uploaded Successfully');
                window.location.href='slider.php'; 
                </script>";
            }else{
                echo "<script> 
                alert('failed to upload image');
                window.location.href='slider.php'; 
                </script>";

            }
            }
            $image2 = $_FILES['image2']['name'];
            $image2_size = $_FILES['image2']['size'];
            $image2_tmp_name = $_FILES['image2']['tmp_name'];
            $image2_folder = '../sliderimage/' . $image2;

            if (!empty($image2)) {
                $select_image2 = mysqli_query($conn,"UPDATE `slider` SET `image2`='$image2' WHERE slider_id = 1");
                if ($select_image2) {
                move_uploaded_file($image2_tmp_name, $image2_folder);
                echo "<script> 
                alert('Slider Image Uploaded Successfully');
                window.location.href='slider.php'; 
                </script>";
            }else{
                echo "<script> 
                alert('failed to upload image');
                window.location.href='slider.php'; 
                </script>";

            }
            }

            $image3 = $_FILES['image3']['name'];
            $image3_size = $_FILES['image3']['size'];
            $image3_tmp_name = $_FILES['image3']['tmp_name'];
            $image3_folder = '../sliderimage/' . $image3;

            if (!empty($image3)) {
                $select_image3 = mysqli_query($conn,"UPDATE `slider` SET `image3`='$image3' WHERE slider_id = 1");
                if ($select_image3) {
                move_uploaded_file($image3_tmp_name, $image3_folder);
                echo "<script> 
                alert('Slider Image Uploaded Successfully');
                window.location.href='slider.php'; 
                </script>";
            }else{
                echo "<script> 
                alert('failed to upload image');
                window.location.href='slider.php'; 
                </script>";

            }
            }
        }
    ?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Slider Image</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Ibarra+Real+Nova&display=swap');

        h1 {
            margin-top: 30px;
            margin-bottom: 20px;
            text-align: center;
            font-family: 'Ibarra Real Nova', serif;
            font-weight: 600;

        }

        .img-fluid {
            margin-bottom: 50px;
            border-radius: 5px;
            box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px;
        }

        .form-label {
            font-size: 20px;
        }

        .btn {
            margin: auto;
            width: 200px;
        }
    </style>
</head>

<body>
   <?php
     $select = mysqli_query($conn, "SELECT * FROM `slider` WHERE slider_id = 1") or die('query failed');
     if (mysqli_num_rows($select) > 0) {
       $fetch = mysqli_fetch_assoc($select);
     }
   ?>
    <?php require_once('adminnavbar.php'); ?>
    <form action="" method="post" enctype="multipart/form-data">
        <h1>Upload Slider Image </h1>
        <div class="container col-md-6">
            <div class="mb-5">
                <label for="Image" class="form-label">Upload Slider1 Image</label>
                <input class="form-control" type="file" id="formFile" name="image1" onchange="preview1()">
            </div>
            <img id="frame1" src="../sliderimage/<?php echo $fetch['image1'] ?>" class="img-fluid" />
        </div>
        <div class="container col-md-6">
            <div class="mb-5">
                <label for="Image" class="form-label">Upload Slider2 Image</label>
                <input class="form-control" type="file" name="image2" id="formFile" onchange="preview2()">
            </div>
            <img id="frame2" src="../sliderimage/<?php echo $fetch['image2'] ?>" class="img-fluid" />
        </div>
        <div class="container col-md-6">
            <div class="mb-5">
                <label for="Image" class="form-label">Upload Slider3 Image</label>
                <input class="form-control" type="file" name="image3" id="formFile" onchange="preview3()">
            </div>
            <img id="frame3" src="../sliderimage/<?php echo $fetch['image3'] ?>" class="img-fluid" />
        </div>
        <div class="container col-md-6">
            <input  type="submit" class="btn btn-primary"  name="uploadimage" value="Upload">
        </div>

    </form>
    <script>
        function preview1() {
            frame1.src = URL.createObjectURL(event.target.files[0]);
        }

        function preview2() {
            frame2.src = URL.createObjectURL(event.target.files[0]);
        }

        function preview3() {
            frame3.src = URL.createObjectURL(event.target.files[0]);
        }

        function clearImage() {
            document.getElementById('formFile').value = null;
            frame.src = "";
        }
    </script>
</body>

</html>