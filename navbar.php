<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Modern Dropdown Mega Menu Example</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap');

    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
      font-family: 'Roboto', sans-serif;
    }

    body {
      line-height: 1.4;
    }

    .main-wrapper img {
      width: 100%;
      display: block;
    }

    .main-wrapper a {
      color: #CC9966;
      text-decoration: none;
    }

    .main-wrapper ul li {
      list-style-type: none;
    }

    .navbar {
      background: #fafafa;
      padding: 0 1rem;
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      max-height: 100vh;
      display: flex;
      flex-direction: column;
      z-index: 10;
    }

    .brand-and-icon {
      display: flex;
      justify-content: space-between;
      padding: 1rem 0;
      border-bottom: 1px solid #ddd;
    }

    .navbar-brand {
      font-size: 1.8rem;
      letter-spacing: 3px;
      font-weight: 700;
    }

    .navbar-toggler {
      display: block;
      border: none;
      background: transparent;
      font-size: 1.8rem;
      cursor: pointer;
      padding: 0.2rem 0.5rem;
      transition: all 0.4s ease;
      border: 2px solid #CC9966;
      border-radius: 4px;
      color: black;
    }

    .navbar-toggler:hover {
      opacity: 0.7;
    }

    .navbar-collapse {
      overflow-y: scroll;
      display: none;
    }

    .navbar-nav>li>a {
      text-transform: uppercase;
      font-size: 1.1rem;
      font-weight: 700;
      display: block;
      padding: 0.6rem 0;
      margin: 0.2rem 0;
      border-bottom: 1px solid #ddd;
      border-radius: 1px;
      position: relative;
      transition: all 0.4s ease;
    }

    .drop-icon {
      position: absolute;
      right: 10px;
      top: 50%;
      transform: translateY(-50%);
    }

    .navbar-nav>li>a:hover {
      opacity: 0.7;
    }

    .sub-menu h4 {
      text-transform: capitalize;
      font-size: 1rem;
      padding: 0.5rem 0;
      color: #C8A382;
    }

    .sub-menu ul li {
      text-transform: capitalize;
      padding: 0.2rem 0;
      margin: 0.2rem 0;
      font-size: 0.95rem;
    }

    .sub-menu ul li a {
      opacity: 0.8;
      transition: all 0.5s ease;
    }

    .sub-menu ul li a:hover {
      padding-left: 14px;
      opacity: 0.9;
    }

    .sub-menu {
      display: none;
    }

    .sub-menu-item {
      padding-left: 1.2rem;
    }



    /* header */
    .header {
      background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)), url(https://source.unsplash.com/g-kNBpqMIs4/1920x1400) center/cover no-repeat;
      height: 100vh;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
    }

    .header h2 {
      margin: 1rem;
      font-size: 3rem;
      font-weight: 900;
      color: #fff;
      letter-spacing: 2px;
    }

    .header p {
      margin: 1rem auto;
      color: #fff;
      width: 60%;
      opacity: 0.8;
      font-weight: 300;
      font-size: 1.2rem;
      text-align: center;
    }

    .header button {
      margin: 1rem;
      font-size: 1rem;
      text-transform: uppercase;
      background: #CC9966;
      color: #fff;
      border: none;
      padding: 0.8rem 1.5rem;
      transition: all 0.5s ease;
      cursor: pointer;
    }

    .header button:hover {
      background: #fff;
      color: #CC9966;
    }

    /* Media Queries */
    @media screen and (min-width: 992px) {
      .navbar {
        flex-direction: row;
        flex-wrap: wrap;
        align-items: center;
        border-bottom: 1px solid #ddd;
        padding: 0 5rem;
        position: relative;
      }

      .navbar-toggler {
        display: none;
      }

      .brand-and-icon {
        flex: 0 0 100px;
        border-bottom: none;
        padding: 0;
      }

      .navbar-collapse {
        display: block !important;
        overflow-y: hidden;
        flex: 1 0 auto;
      }

      .navbar-nav {
        display: flex;
        align-items: center;
        justify-content: center;
      }

      .navbar-nav>li>a {
        border-bottom: none;
        margin: 0 0.4rem;
        padding: 1.7rem 1.8rem 1.7rem 0.8rem;
        font-size: 0.8rem;
      }

      .sub-menu {
        position: absolute;
        left: 0;
        width: 100%;
        top: 100%;
        background: #f8f8f8;
      }

      .navbar-nav>li:hover .sub-menu {
        display: grid !important;
        grid-template-columns: repeat(4, 1fr);
        padding: 0 5rem;
      }

      .navbar-nav>li {
        border-bottom: 2px solid transparent;
        transition: border-bottom 0.4s ease;
      }

      .navbar-nav>li:hover {
        border-bottom-color: #CC9966;
      }

      .sub-menu-item {
        padding-left: 0;
      }

      .sub-menu-item:nth-child(3) {
        padding-left: 2rem;
        padding-right: 2rem;
      }

      /* header */
      .header {
        height: calc(100vh - 75px);
      }

      .header h2 {
        font-size: 6rem;
      }

      .header p {
        width: 40%;
      }
    }



  </style>
  <!-- Font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA==" crossorigin="anonymous" />


</head>

<body>

  <div class="main-wrapper">
    <nav class="navbar">
      <div class="brand-and-icon">
        <a href="index.html" class="navbar-brand">HandiCraft</a>
        <button type="button" class="navbar-toggler">
          <i class="fas fa-bars"></i>
        </button>
      </div>

      <div class="navbar-collapse">
        <ul class="navbar-nav">
          <li>
            <a href="index.php">home</a>
          </li>

          <li>
            <a href="#" class="menu-link">
              Furnitures
              <span class="drop-icon">
                <i class="fas fa-chevron-down"></i>
              </span>
            </a>
            <div class="sub-menu">
              <!-- item -->
              <div class="sub-menu-item">
                <a href="table.php"><h4>Tables</h4></a>
                <ul>
                  <li><a href="table.php #dining-table">Dining Table</a></li>
                  <li><a href="table.php #bar-table">Bar Table</a></li>
                  <li><a href="#">Counter Table</a></li>

                </ul>
              </div>

              <div class="sub-menu-item">
                <h4>Chairs</h4>
                <ul>
                  <li><a href="#"> Dining Chair</a></li>
                  <li><a href="#">Bar Chair</a></li>
                  <li><a href="#">Counter Chair</a></li>

                </ul>
              </div>
              <div class="sub-menu-item">
                <h4>Book Racks</h4>
                <ul>
                  <li><a href="#">Shoe Rack</a></li>
                  <li><a href="#">Side Board with Glass or with wood</a></li>
                  <li><a href="#"> End Table</a></li>
                  <li><a href="#">Round Coffee Table</a></li>
                  <li><a href="#"> Coffee Table</a></li>
                </ul>
              </div>
              <div class="sub-menu-item">
                <h4>Candle Stand</h4>
                <ul>
                  <li><a href="#">Candle Stand</a></li>

                </ul>
              </div>
              <div class="sub-menu-item">
                <h4>Seater Sofa</h4>
                <ul>
                  <li><a href="#">1,2,3 Seater Sofa</a></li>

                </ul>
              </div>
              <div class="sub-menu-item">
                <h4>Storage Box</h4>
                <ul>
                  <li><a href="#">1,2,3 story Boxes</a></li>
                </ul>
              </div>
              <div class="sub-menu-item">
                <h4>Bed</h4>
                <ul>
                  <li><a href="#">King Size Bed</a></li>
                  <li><a href="#">Queen Size Bed</a></li>
                </ul>
              </div>


          </li>

          <li>
            <a href="#" class="menu-link">
              Decoratives Article

            </a>

          </li>
          <li>
            <a href="#">deals</a>
          </li>
          <li>
            <a href="#">Contect Us</a>
          </li>
        </ul>
      </div>
    </nav>

  </div>
 


  <!--jQuery-->
  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>

  <script type="text/javascript">
    var _gaq = _gaq || [];
    _gaq.push(['_setAccount', 'UA-36251023-1']);
    _gaq.push(['_setDomainName', 'jqueryscript.net']);
    _gaq.push(['_trackPageview']);

    (function() {
      var ga = document.createElement('script');
      ga.type = 'text/javascript';
      ga.async = true;
      ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
      var s = document.getElementsByTagName('script')[0];
      s.parentNode.insertBefore(ga, s);
    })();
  </script>
  <script>
    try {
      fetch(new Request("https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js", {
        method: 'HEAD',
        mode: 'no-cors'
      })).then(function(response) {
        return true;
      }).catch(function(e) {
        var carbonScript = document.createElement("script");
        carbonScript.src = "//cdn.carbonads.com/carbon.js?serve=CK7DKKQU&placement=wwwjqueryscriptnet";
        carbonScript.id = "_carbonads_js";
        document.getElementById("carbon-block").appendChild(carbonScript);
      });
    } catch (error) {
      console.log(error);
    }
  </script>

  <script>
    $(document).ready(function() {
      $('.navbar-toggler').click(function() {
        $('.navbar-collapse').slideToggle(300);
      });

      smallScreenMenu();
      let temp;

      function resizeEnd() {
        smallScreenMenu();
      }

      $(window).resize(function() {
        clearTimeout(temp);
        temp = setTimeout(resizeEnd, 100);
        resetMenu();
      });
    });


    const subMenus = $('.sub-menu');
    const menuLinks = $('.menu-link');

    function smallScreenMenu() {
      if ($(window).innerWidth() <= 992) {
        menuLinks.each(function(item) {
          $(this).click(function() {
            $(this).next().slideToggle();
          });
        });
      } else {
        menuLinks.each(function(item) {
          $(this).off('click');
        });
      }
    }

    function resetMenu() {
      if ($(window).innerWidth() > 992) {
        subMenus.each(function(item) {
          $(this).css('display', 'none');
        });
      }
    }
  </script>
</body>

</html>