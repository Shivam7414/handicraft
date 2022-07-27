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
      padding-left: 30px;
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
      <p class="product-title">Tables</p>
      <ul class="cards">
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="table/pexels-pixabay-271696.jpg"></div>
            <div class="card_content">
              <h2 class="card_title">Dining Table</h2>

              <button class="btn card_btn">view More</button>
            </div>
          </div>
        </li>
      
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="table/pexels-rachel-claire-5865378.jpg"></div>
            <div class="card_content">
              <h2 class="card_title">Counter Table</h2>

              <button class="btn card_btn">view More</button>
            </div>
          </div>
        </li>
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="table/pexels-roberto-nickson-7258844.jpg"></div>
            <div class="card_content">
              <h2 class="card_title">Bar Table</h2>

              <button class="btn card_btn">view More</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <div class="main">
      <p class="product-title">Chairs</p>
      <ul class="cards">
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="Chairs/pexels-max-vakhtbovych-6283972.jpg"></div>
            <div class="card_content">
              <h2 class="card_title">Counter Chair</h2>

              <button class="btn card_btn">view More</button>
            </div>
          </div>
        </li>
      
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="Chairs/pexels-charlotte-may-5824521.jpg"></div>
            <div class="card_content">
              <h2 class="card_title"> Dining Chair</h2>

              <button class="btn card_btn">view More</button>
            </div>
          </div>
        </li>
        <li class="cards_item">
          <div class="card">
            <div class="card_image"><img src="Chairs/pexels-chan-walrus-941861.jpg"></div>
            <div class="card_content">
              <h2 class="card_title">Bar Chair</h2>

              <button class="btn card_btn">view More</button>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>


</body>

</html>