<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      margin: 0;
      padding: 0;
    }

    a {
      color: #fff;
      text-decoration: none;
    }

    .pg-footer {
      font-family: "Roboto", sans-serif;
    }

    .footer {
      margin-top: 70px;
      background-color: #BA8C63;
      color: #fff;
    }

    .footer-wave-svg {
      background-color: transparent;
      display: block;
      height: 30px;
      position: relative;
      top: -1px;
      width: 100%;
    }

    .footer-wave-path {
      fill: #fffff2;
    }

    .footer-content {
      margin-left: auto;
      margin-right: auto;
      max-width: 1230px;
      padding: 40px 15px 450px;
      position: relative;
    }

    .footer-content-column {
      box-sizing: border-box;
      float: left;
      padding-left: 15px;
      padding-right: 15px;
      width: 100%;
      color: #fff;
    }

    .footer-content-column ul li a {
      color: #fff;
      text-decoration: none;
    }

    .footer-logo-link {
      display: inline-block;
    }

    .footer-menu {
      margin-top: 30px;
    }

    .footer-menu-name {
      color: #fffff2;
      font-size: 15px;
      font-weight: 900;
      letter-spacing: 0.1em;
      line-height: 18px;
      margin-bottom: 0;
      margin-top: 0;
      text-transform: uppercase;
    }

    .footer-menu-list {
      list-style: none;
      margin-bottom: 0;
      margin-top: 10px;
      padding-left: 0;
    }

    .footer-menu-list li {
      margin-top: 5px;
    }

    .footer-call-to-action-description {
      color: #fffff2;
      margin-top: 10px;
      margin-bottom: 20px;
    }

    .footer-call-to-action-button:hover {
      background-color: #fffff2;
      color: #00bef0;
    }

    .button:last-of-type {
      margin-right: 0;
    }

    .footer-call-to-action-button {
      background-color: #027b9a;
      border-radius: 21px;
      color: #fffff2;
      display: inline-block;
      font-size: 11px;
      font-weight: 900;
      letter-spacing: 0.1em;
      line-height: 18px;
      padding: 12px 30px;
      margin: 0 10px 10px 0;
      text-decoration: none;
      text-transform: uppercase;
      transition: background-color 0.2s;
      cursor: pointer;
      position: relative;
    }

    .footer-call-to-action {
      margin-top: 30px;
    }

    .footer-call-to-action-title {
      color: #fffff2;
      font-size: 14px;
      font-weight: 900;
      letter-spacing: 0.1em;
      line-height: 18px;
      margin-bottom: 0;
      margin-top: 0;
      text-transform: uppercase;
    }

    .footer-call-to-action-link-wrapper {
      margin-bottom: 0;
      margin-top: 10px;
      color: #fff;
      text-decoration: none;
    }

    .footer-call-to-action-link-wrapper a {
      color: #fff;
      text-decoration: none;
    }

    .footer-social-links {
      bottom: 0;
      height: 54px;
      position: absolute;
      right: 0;
      width: 236px;
    }

    .footer-social-amoeba-svg {
      height: 54px;
      left: 0;
      display: block;
      position: absolute;
      top: 0;
      width: 236px;
    }

    .footer-social-amoeba-path {
      fill: #C8A382;
    }

    .footer-social-link.linkedin {
      height: 26px;
      left: 3px;
      top: 11px;
      width: 48px;
    }

    .footer-social-link {
      display: block;
      padding: 10px;
      position: absolute;
    }

    .hidden-link-text {
      position: absolute;
      clip: rect(1px 1px 1px 1px);
      clip: rect(1px, 1px, 1px, 1px);
      -webkit-clip-path: inset(0px 0px 99.9% 99.9%);
      clip-path: inset(0px 0px 99.9% 99.9%);
      overflow: hidden;
      height: 1px;
      width: 1px;
      padding: 0;
      border: 0;
      top: 50%;
    }

    .footer-social-icon-svg {
      display: block;
    }

    .footer-social-icon-path {
      fill: #fffffe;
      transition: fill 0.2s;
    }

    .footer-social-link.instagram {
      height: 28px;
      left: 62px;
      top: 3px;
      width: 48px;
      fill: #fff;
    }

    .footer-social-link.twitter {
      height: 24px;
      left: 123px;
      top: 12px;
      width: 48px;
      fill: #fff;
    }

    .footer-social-link.facebook {
      height: 34px;
      left: 172px;
      top: 7px;
      width: 50px;
      fill: #fff;
    }

    .footer-copyright {
      background-color: #C8A382;
      color: #fff;
      padding: 15px 30px;
      text-align: center;
    }

    .footer-copyright-wrapper {
      margin-left: auto;
      margin-right: auto;
      max-width: 1200px;
    }

    .footer-copyright-text {
      color: #fff;
      font-size: 13px;
      font-weight: 400;
      line-height: 18px;
      margin-bottom: 0;
      margin-top: 0;
    }

    .footer-copyright-link {
      color: #fff;
      text-decoration: none;
    }

    /* Media Query For different screens */
    @media (min-width: 320px) and (max-width: 479px) {

      /* smartphones, portrait iPhone, portrait 480x320 phones (Android) */
      .footer-content {
        margin-left: auto;
        margin-right: auto;
        max-width: 1230px;
        padding: 40px 15px 1050px;
        position: relative;
      }
    }

    @media (min-width: 480px) and (max-width: 599px) {

      /* smartphones, Android phones, landscape iPhone */
      .footer-content {
        margin-left: auto;
        margin-right: auto;
        max-width: 1230px;
        padding: 40px 15px 1050px;
        position: relative;
      }
    }

    @media (min-width: 600px) and (max-width: 800px) {

      /* portrait tablets, portrait iPad, e-readers (Nook/Kindle), landscape 800x480 phones (Android) */
      .footer-content {
        margin-left: auto;
        margin-right: auto;
        max-width: 1230px;
        padding: 40px 15px 1050px;
        position: relative;
      }
    }

    @media (min-width: 801px) {
      /* tablet, landscape iPad, lo-res laptops ands desktops */
    }

    @media (min-width: 1025px) {
      /* big landscape tablets, laptops, and desktops */
    }

    @media (min-width: 1281px) {
      /* hi-res laptops and desktops */
    }

    @media (min-width: 760px) {
      .footer-content {
        margin-left: auto;
        margin-right: auto;
        max-width: 1230px;
        padding: 40px 15px 450px;
        position: relative;
      }

      .footer-wave-svg {
        height: 50px;
      }

      .footer-content-column {
        width: 24.99%;
      }
    }

    @media (min-width: 568px) {
      /* .footer-content-column {
      width: 49.99%;
  } */
    }
  </style>
</head>

<body>
  <div class="pg-footer">
    <footer class="footer">
      <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
        <path class="footer-wave-path"
          d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z">
        </path>
      </svg>
      <div class="footer-content">
        <div class="footer-content-column">
          <div class="footer-logo">
            <a class="footer-logo-link" href="#">
              <span class="hidden-link-text">LOGO</span>
              <h1>LOGO</h1>
            </a>
          </div>
          <div class="footer-menu">
            <h2 class="footer-menu-name"> About Us</h2>
            <p class="about-us">we are an exporter of wooden furniture articles. We deals only in Sheesham.</p>
          </div>
        </div>
        <div class="footer-content-column">
          <div class="footer-menu">
            <h2 class="footer-menu-name"> Company</h2>
            <ul id="menu-company" class="footer-menu-list">
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Contact Us</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                <a href="#">Deals</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu">
            <h2 class="footer-menu-name"> Legal</h2>
            <ul id="menu-legal" class="footer-menu-list">
              <li
                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-170434">
                <a href="#">Privacy Notice</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-content-column">
          <div class="footer-menu">
            <h2 class="footer-menu-name"> Quick Links</h2>
            <ul id="menu-quick-links" class="footer-menu-list">
              <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a target="_blank" rel="noopener noreferrer" href="#">Home</a>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a target="_blank" rel="noopener noreferrer" href="#">Tables</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#"> Chairs</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Book Racks</a>
              </li>
              <li class="menu-item menu-item-type-post_type_archive menu-item-object-customer">
                <a href="#">Candle Stand</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Seater Sofa</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Storage Box</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Bed</a>
              </li>

            </ul>
          </div>
        </div>
        <div class="footer-content-column">
          <div class="footer-call-to-action">
            <h2 class="footer-call-to-action-title">Address</h2>
            <p class="footer-call-to-action-description">67 near yellow water tank
              air force road,bgkt,jodhpur,
              rajasthan,india</p>
          </div>
          <div class="footer-call-to-action">
            <h2 class="footer-call-to-action-title"> working hours</h2>
            <p class="footer-call-to-action-link-wrapper">8:00 am to 8:pm IST</p>
          </div>
          <div class="footer-call-to-action">
            <h2 class="footer-call-to-action-title"> You Call Us</h2>
            <p class="footer-call-to-action-link-wrapper">0124-64XXXX</p>
          </div>
        </div>
        <div class="footer-social-links"> <svg class="footer-social-amoeba-svg" xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 236 54">
            <path class="footer-social-amoeba-path"
              d="M223.06,43.32c-.77-7.2,1.87-28.47-20-32.53C187.78,8,180.41,18,178.32,20.7s-5.63,10.1-4.07,16.7-.13,15.23-4.06,15.91-8.75-2.9-6.89-7S167.41,36,167.15,33a18.93,18.93,0,0,0-2.64-8.53c-3.44-5.5-8-11.19-19.12-11.19a21.64,21.64,0,0,0-18.31,9.18c-2.08,2.7-5.66,9.6-4.07,16.69s.64,14.32-6.11,13.9S108.35,46.5,112,36.54s-1.89-21.24-4-23.94S96.34,0,85.23,0,57.46,8.84,56.49,24.56s6.92,20.79,7,24.59c.07,2.75-6.43,4.16-12.92,2.38s-4-10.75-3.46-12.38c1.85-6.6-2-14-4.08-16.69a21.62,21.62,0,0,0-18.3-9.18C13.62,13.28,9.06,19,5.62,24.47A18.81,18.81,0,0,0,3,33a21.85,21.85,0,0,0,1.58,9.08,16.58,16.58,0,0,1,1.06,5A6.75,6.75,0,0,1,0,54H236C235.47,54,223.83,50.52,223.06,43.32Z">
            </path>
          </svg>
          <a class="footer-social-link linkedin" href="#" target="_blank">
            <span class="hidden-link-text">Linkedin</span>
            <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
              <path class="footer-social-icon-path"
                d="M9,25H4V10h5V25z M6.501,8C5.118,8,4,6.879,4,5.499S5.12,3,6.501,3C7.879,3,9,4.121,9,5.499C9,6.879,7.879,8,6.501,8z M27,25h-4.807v-7.3c0-1.741-0.033-3.98-2.499-3.98c-2.503,0-2.888,1.896-2.888,3.854V25H12V9.989h4.614v2.051h0.065 c0.642-1.18,2.211-2.424,4.551-2.424c4.87,0,5.77,3.109,5.77,7.151C27,16.767,27,25,27,25z">
              </path>
            </svg>
          </a>
          <a class="footer-social-link instagram" href="#" target="_blank">
            <span class="hidden-link-text">instagram</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
              <!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. -->
              <path
                d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z" />
            </svg>



          </a>
          <a class="footer-social-link twitter" href="#" target="_blank">
            <span class="hidden-link-text">Twitter</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/></svg>
          </a>
          <a class="footer-social-link facebook" href="#" target="_blank">
            <span class="hidden-link-text">facebook</span>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><!--! Font Awesome Pro 6.1.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path d="M504 256C504 119 393 8 256 8S8 119 8 256c0 123.78 90.69 226.38 209.25 245V327.69h-63V256h63v-54.64c0-62.15 37-96.48 93.67-96.48 27.14 0 55.52 4.84 55.52 4.84v61h-31.28c-30.8 0-40.41 19.12-40.41 38.73V256h68.78l-11 71.69h-57.78V501C413.31 482.38 504 379.78 504 256z"/></svg>
          </a>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="footer-copyright-wrapper">
          <p class="footer-copyright-text">
            <a class="footer-copyright-link" href="#" target="_self"> ©2022-23. | All rights
              reserved. </a>
          </p>
        </div>
      </div>
    </footer>
  </div>
</body>

</html>