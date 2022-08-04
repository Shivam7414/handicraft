<html>

<head>
  <style>
    .mySlides {
      display: none
    }

    .slider-image {
      vertical-align: middle;
      object-fit: cover;
      overflow: hidden;
      max-height: 450px;
    }

    /* Slideshow container */
    .slideshow-container {
      max-width: 100%;
      position: relative;
      max-height: 400px;
      margin-bottom: 90px;
    }

  

    /* Caption text */
    .text {
      color: #f2f2f2;
      font-size: 15px;
      padding: 8px 12px;
      position: absolute;
      bottom: 8px;
      width: 100%;
      text-align: center;
    }

    /* Number text (1/3 etc) */
    .numbertext {
      color: #f2f2f2;
      font-size: 12px;
      padding: 8px 12px;
      position: absolute;
      top: 0;
    }

    /* The dots/bullets/indicators */


    /* Fading animation */
    .fade {
      -webkit-animation-name: fade;
      -webkit-animation-duration: 1.5s;
      animation-name: fade;
      animation-duration: 1.5s;
    }

    @-webkit-keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade {
      from {
        opacity: .4
      }

      to {
        opacity: 1
      }
    }

    /* On smaller screens, decrease text size */
    @media only screen and (max-width: 300px) {

      .prev,
      .next,
      .text {
        font-size: 11px
      }

      .dot {
        height: 10px;
        width: 10px;
      }

      @media only screen and (max-width: 500px) {

        .prev,
        .next,
        .text {
          font-size: 14px
        }
      }
    }
  </style>
</head>

<body>
  <?php
  require_once("config/connection.php");
  $select = mysqli_query($conn, "SELECT * FROM `slider` WHERE slider_id = 1") or die('query failed');
  if (mysqli_num_rows($select) > 0) {
    $fetch = mysqli_fetch_assoc($select);
  }
  ?>
  <div class="slider">
    <div class="slideshow-container">
      <div class="mySlides fade">
        <img src="sliderimage/<?php echo $fetch['image1'] ?>" style="width:100%" class="slider-image">
      </div>
      <div class="mySlides fade">
        <img src="sliderimage/<?php echo $fetch['image2'] ?>" style="width:100%" class="slider-image">
      </div>
      <div class="mySlides fade">
        <img src="sliderimage/<?php echo $fetch['image3'] ?>" style="width:100%" class="slider-image">
      </div>

    </div>
  </div>

  <script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function currentSlide(n) {
      showSlides(slideIndex = n);
    }

    function showSlides(n) {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      if (n > slides.length) {
        slideIndex = 1
      }
      if (n < 1) {
        slideIndex = slides.length
      }
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex - 1].style.display = "block";
      dots[slideIndex - 1].className += " active";
    }

    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
      }
      slideIndex++;
      if (slideIndex > slides.length) {
        slideIndex = 1
      }
      slides[slideIndex - 1].style.display = "block";
      setTimeout(showSlides, 6000); // Change image every 2 seconds
    }
  </script>
</body>

</html>