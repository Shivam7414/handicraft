<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        @import url("https://fonts.googleapis.com/css?family=Quicksand:400,500,700");

        .nav {
            width: 100%;
            height: 65px;
            position: fixed;
            line-height: 65px;
            text-align: center;
        }

        .container {
            font-family: "Quicksand", sans-serif;
            box-sizing: border-box;
        }

        .nav div.logo {
            float: left;
            width: auto;
            height: auto;
            padding-left: 3rem;
        }

        .nav div.logo a {
            text-decoration: none;
            color: #AE8A69;
            font-size: 2.5rem;
        }

        .nav div.logo a:hover {
            color: #D6BAA1;
        }

        .nav div.main_list {
            height: 65px;
            float: right;
        }

        .nav div.main_list ul {
            width: 100%;
            height: 65px;
            display: flex;
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .nav div.main_list ul li {
            width: auto;
            height: 65px;
            padding: 0;
            padding-right: 3rem;
        }

        .nav div.main_list ul li a {
            text-decoration: none;
            color: #AE8A69;
            line-height: 65px;
            font-size: 1.5rem;
        }

        .nav div.main_list ul li a:hover {
            color: #D6BAA1;
        }

        /* Home section */

        .home {
            width: 100%;
            height: 25vh;
            background-image: url(img/pexels-pixabay-326333.jpg);
            background-color: #F1E8E0;
            background-position: center top;
            background-size: cover;
        }

        .navTrigger {
            display: none;
        }

        .nav {
            padding-top: 20px;
            padding-bottom: 20px;
            -webkit-transition: all 0.4s ease;
            transition: all 0.4s ease;
        }

        /* Media qurey section */

        @media screen and (min-width: 768px) and (max-width: 1024px) {
            .container {
                margin: 0;
            }
        }

        @media screen and (max-width: 768px) {
            .navTrigger {
                display: block;
            }

            .nav div.logo {
                margin-left: 15px;
            }

            .nav div.main_list {
                width: 100%;
                height: 0;
                overflow: hidden;
            }

            .nav div.show_list {
                height: auto;
                display: none;
            }

            .nav div.main_list ul {
                flex-direction: column;
                width: 100%;
                height: 39vh;
                right: 0;
                left: 0;
                bottom: 0;
                backdrop-filter: blur(5px);
                /*same background color of navbar*/
                background-position: center top;
            }

            .nav div.main_list ul li {
                width: 100%;
                text-align: right;
            }

            .nav div.main_list ul li a {
                text-align: center;
                width: 100%;
                font-size: 2rem;
                padding: 20px;
            }

            .nav div.media_button {
                display: block;
            }
        }

        /* Animation */
        /* Inspiration taken from Dicson https://codemyui.com/simple-hamburger-menu-x-mark-animation/ */

        .navTrigger {
            cursor: pointer;
            width: 30px;
            height: 25px;
            margin: auto;
            position: absolute;
            right: 30px;
            top: 0;
            bottom: 0;
        }

        .navTrigger i {
            background-color: #D6BAA1;
            border-radius: 2px;
            content: "";
            display: block;
            width: 100%;
            height: 4px;
        }

        .navTrigger i:nth-child(1) {
            -webkit-animation: outT 0.8s backwards;
            animation: outT 0.8s backwards;
            -webkit-animation-direction: reverse;
            animation-direction: reverse;
        }

        .navTrigger i:nth-child(2) {
            margin: 5px 0;
            -webkit-animation: outM 0.8s backwards;
            animation: outM 0.8s backwards;
            -webkit-animation-direction: reverse;
            animation-direction: reverse;
        }

        .navTrigger i:nth-child(3) {
            -webkit-animation: outBtm 0.8s backwards;
            animation: outBtm 0.8s backwards;
            -webkit-animation-direction: reverse;
            animation-direction: reverse;
        }

        .navTrigger.active i:nth-child(1) {
            -webkit-animation: inT 0.8s forwards;
            animation: inT 0.8s forwards;
        }

        .navTrigger.active i:nth-child(2) {
            -webkit-animation: inM 0.8s forwards;
            animation: inM 0.8s forwards;
        }

        .navTrigger.active i:nth-child(3) {
            -webkit-animation: inBtm 0.8s forwards;
            animation: inBtm 0.8s forwards;
        }

        @-webkit-keyframes inM {
            50% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(45deg);
            }
        }

        @keyframes inM {
            50% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(45deg);
            }
        }

        @-webkit-keyframes outM {
            50% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(45deg);
            }
        }

        @keyframes outM {
            50% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(45deg);
            }
        }

        @-webkit-keyframes inT {
            0% {
                -webkit-transform: translateY(0px) rotate(0deg);
            }

            50% {
                -webkit-transform: translateY(9px) rotate(0deg);
            }

            100% {
                -webkit-transform: translateY(9px) rotate(135deg);
            }
        }

        @keyframes inT {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(9px) rotate(0deg);
            }

            100% {
                transform: translateY(9px) rotate(135deg);
            }
        }

        @-webkit-keyframes outT {
            0% {
                -webkit-transform: translateY(0px) rotate(0deg);
            }

            50% {
                -webkit-transform: translateY(9px) rotate(0deg);
            }

            100% {
                -webkit-transform: translateY(9px) rotate(135deg);
            }
        }

        @keyframes outT {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(9px) rotate(0deg);
            }

            100% {
                transform: translateY(9px) rotate(135deg);
            }
        }

        @-webkit-keyframes inBtm {
            0% {
                -webkit-transform: translateY(0px) rotate(0deg);
            }

            50% {
                -webkit-transform: translateY(-9px) rotate(0deg);
            }

            100% {
                -webkit-transform: translateY(-9px) rotate(135deg);
            }
        }

        @keyframes inBtm {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-9px) rotate(0deg);
            }

            100% {
                transform: translateY(-9px) rotate(135deg);
            }
        }

        @-webkit-keyframes outBtm {
            0% {
                -webkit-transform: translateY(0px) rotate(0deg);
            }

            50% {
                -webkit-transform: translateY(-9px) rotate(0deg);
            }

            100% {
                -webkit-transform: translateY(-9px) rotate(135deg);
            }
        }

        @keyframes outBtm {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-9px) rotate(0deg);
            }

            100% {
                transform: translateY(-9px) rotate(135deg);
            }
        }

        .affix {
            padding: 0;
            background-color: #111;
        }

        .myH2 {
            text-align: center;
            font-size: 4rem;
        }

        .myP {
            text-align: justify;
            padding-left: 15%;
            padding-right: 15%;
            font-size: 20px;
        }

        @media all and (max-width: 700px) {
            .myP {
                padding: 2%;
            }
        }
    </style>
</head>

<body>
    <nav class="nav">
        <div class="container">
            <div id="mainListDiv" class="main_list">
                <ul class="navlinks">
                    <li><a href="dashboard.php">Dashboard</a></li>
                    <li><a href="addproduct.php">Add Product</a></li>
                    <li><a href="view.php">View Product</a></li>
                    <li><a href="slider.php">Add Slider</a></li>

                </ul>
            </div>
            <span class="navTrigger">
                <i></i>
                <i></i>
                <i></i>
            </span>
        </div>
    </nav>
    <section class="home"></section>



    <!-- Jquery needed -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="js/scripts.js"></script>

    <!-- Function used to shrink nav bar removing paddings and adding black background -->
    <script>
        $(window).scroll(function() {
            if ($(document).scrollTop() > 50) {
                $('.nav').addClass('affix');
            } else {
                $('.nav').removeClass('affix');
            }
        });


        $('.navTrigger').click(function() {
            $(this).toggleClass('active');
            console.log("Clicked menu");
            $("#mainListDiv").toggleClass("show_list");
            $("#mainListDiv").fadeIn();

        });
    </script>
</body>

</html>