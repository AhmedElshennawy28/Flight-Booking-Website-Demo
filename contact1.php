<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Contact</title>
    <link rel="shortcut icon" href="images/airplane.png" type="image/x-icon" />

    <!-- BootStrap CDN -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
      integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
      crossorigin="anonymous"
    />
    <script
      src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
      integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
      integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNS3Xa"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
      integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
      crossorigin="anonymous"
    ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js
        "></script>
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
"
    />
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Font Awesome -->
    <script
      src="https://kit.fontawesome.com/0e02826fa5.js"
      crossorigin="anonymous"
    ></script>
    <link
      rel="stylesheet"
      href="https://kit.fontawesome.com/0e02826fa5.css"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="navbar_css.css" />
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body>
    <!-- navBar -->
    <nav class="header">
      <div class="logo">
        <img src="images/runway.png" alt="" />
        <a href="home1.php"> Shennawy's Airport </a>
      </div>

      <div class="navbar">
        <input type="checkbox" class="toggle-menu" />
        <div class="hamburger"></div>

        <ul class="menu">
          <li><a href="home1.php">Home</a></li>
          <li><a href="about1.php" >About</a></li>
          <li><a href="booking1.php">Book</a></li>
          <li><a href="flights1.php">Flights</a></li>
          <li><a href="ticket1.php">Tickets</a></li>
          <li><a href="contact1.php" class="active">Contact</a></li>
          <li>
            <a href="LogIn3.php"
              ><button class="btn" id="loginButton" onclick="login()">
                Login
              </button></a
            >
          </li>
        </ul>
      </div>
    </nav>

    <!-- Contact -->
    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <h2 class="titele-hero">Contact Us</h2>
            <form method="post" action="reply.php">
              <div class="form-group">
                <label for="name">Name</label>
                <input
                  type="text"
                  class="form-control"
                  id="name"
                  name="name"
                  placeholder="Enter your name"
                />
              </div>
              <div class="form-group">
                <label for="email">Email address</label>
                <input
                  type="email"
                  class="form-control"
                  id="email"
                  name="email"
                  placeholder="Enter your email"
                />
              </div>
              <div class="form-group">
                <label for="message">Message</label>
                <textarea
                  class="form-control"
                  id="message"
                  name="message"
                  rows="5"
                  placeholder="Enter your message"
                ></textarea>
              </div>
              <div class="error-message" id="errorMessage"></div>
              <button type="submit" class="btn button" name="sendmsg" onclick="Validate()">
                Submit &nbsp;<i class="fa-solid fa-square-arrow-up-right"></i>
              </button>
            </form>
          </div>
          <div class="col-lg-6">
            <svg
              class="animated"
              id="freepik_stories-contact-us"
              xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 500 500"
              version="1.1"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              xmlns:svgjs="http://svgjs.com/svgjs"
            >
              <style>
                svg#freepik_stories-contact-us:not(.animated) .animable {
                  opacity: 0;
                }

                svg#freepik_stories-contact-us.animated
                  #freepik--Floor--inject-16 {
                  animation: 1s 1 forwards cubic-bezier(0.36, -0.01, 0.5, 1.38)
                    slideLeft;
                  animation-delay: 0s;
                }

                svg#freepik_stories-contact-us.animated
                  #freepik--Shadows--inject-16 {
                  animation: 1s 1 forwards cubic-bezier(0.36, -0.01, 0.5, 1.38)
                    slideLeft;
                  animation-delay: 0s;
                }

                svg#freepik_stories-contact-us.animated
                  #freepik--Plants--inject-16 {
                  animation: 1s 1 forwards cubic-bezier(0.36, -0.01, 0.5, 1.38)
                    slideRight;
                  animation-delay: 0s;
                }

                svg#freepik_stories-contact-us.animated
                  #freepik--Device--inject-16 {
                  animation: 1s 1 forwards cubic-bezier(0.36, -0.01, 0.5, 1.38)
                    slideRight;
                  animation-delay: 0s;
                }

                svg#freepik_stories-contact-us.animated
                  #freepik--speech-bubble--inject-16 {
                  animation: 1s 1 forwards cubic-bezier(0.36, -0.01, 0.5, 1.38)
                    slideUp;
                  animation-delay: 0s;
                }

                svg#freepik_stories-contact-us.animated
                  #freepik--Character--inject-16 {
                  animation: 1s 1 forwards cubic-bezier(0.36, -0.01, 0.5, 1.38)
                    zoomOut;
                  animation-delay: 0s;
                }

                svg#freepik_stories-contact-us.animated
                  #freepik--Icons--inject-16 {
                  animation: 1s 1 forwards cubic-bezier(0.36, -0.01, 0.5, 1.38)
                    lightSpeedRight;
                  animation-delay: 0s;
                }

                svg#freepik_stories-contact-us.animated
                  #freepik--Clouds--inject-16 {
                  animation: 1s 1 forwards cubic-bezier(0.36, -0.01, 0.5, 1.38)
                    zoomOut;
                  animation-delay: 0s;
                }

                @keyframes slideLeft {
                  0% {
                    opacity: 0;
                    transform: translateX(-30px);
                  }

                  100% {
                    opacity: 1;
                    transform: translateX(0);
                  }
                }

                @keyframes slideRight {
                  0% {
                    opacity: 0;
                    transform: translateX(30px);
                  }

                  100% {
                    opacity: 1;
                    transform: translateX(0);
                  }
                }

                @keyframes slideUp {
                  0% {
                    opacity: 0;
                    transform: translateY(30px);
                  }

                  100% {
                    opacity: 1;
                    transform: inherit;
                  }
                }

                @keyframes zoomOut {
                  0% {
                    opacity: 0;
                    transform: scale(1.5);
                  }

                  100% {
                    opacity: 1;
                    transform: scale(1);
                  }
                }

                @keyframes lightSpeedRight {
                  from {
                    transform: translate3d(50%, 0, 0) skewX(-20deg);
                    opacity: 0;
                  }

                  60% {
                    transform: skewX(10deg);
                    opacity: 1;
                  }

                  80% {
                    transform: skewX(-2deg);
                  }

                  to {
                    opacity: 1;
                    transform: translate3d(0, 0, 0);
                  }
                }
              </style>
              <g
                id="freepik--Floor--inject-16"
                class="animable"
                style="transform-origin: 250px 377.35px"
              >
                <ellipse
                  cx="250"
                  cy="377.35"
                  rx="197.05"
                  ry="111.94"
                  style="
                    fill: rgb(245, 245, 245);
                    transform-origin: 250px 377.35px;
                  "
                  id="eljr7s5m6kyg"
                  class="animable"
                ></ellipse>
              </g>
              <g
                id="freepik--Shadows--inject-16"
                class="animable"
                style="transform-origin: 221.843px 391.992px"
              >
                <path
                  d="M332,447.93,184.91,363a8.5,8.5,0,0,1,0-14.73l14.51-9.15a16.5,16.5,0,0,1,16.47,0L363,424.06a8.5,8.5,0,0,1,0,14.73l-14.51,9.14A16.46,16.46,0,0,1,332,447.93Z"
                  style="
                    fill: rgb(224, 224, 224);
                    transform-origin: 273.955px 393.531px;
                  "
                  id="elscp2rxxux7j"
                  class="animable"
                ></path>
                <ellipse
                  cx="108.35"
                  cy="352.17"
                  rx="31.92"
                  ry="18.33"
                  style="
                    fill: rgb(230, 230, 230);
                    transform-origin: 108.35px 352.17px;
                  "
                  id="elfbtefrqv3lb"
                  class="animable"
                ></ellipse>
              </g>
              <g
                id="freepik--Plants--inject-16"
                class="animable"
                style="transform-origin: 403.941px 344.214px"
              >
                <path
                  d="M384.16,374.7l14,8.05s-7.15-22.47-3.34-45.12c1.44-8.56,4.53-12.81,5.61-15.1s9.45-16.44,2-22.92-24.78,6.55-23.84,41.42A135.23,135.23,0,0,0,384.16,374.7Z"
                  style="fill: #d90429; transform-origin: 392.02px 340.378px"
                  id="elt0pgd0d768d"
                  class="animable"
                ></path>
                <g id="elpbidzz9webp">
                  <path
                    d="M384.16,374.7l14,8.05s-7.15-22.47-3.34-45.12c1.44-8.56,4.53-12.81,5.61-15.1s9.45-16.44,2-22.92-24.78,6.55-23.84,41.42A135.23,135.23,0,0,0,384.16,374.7Z"
                    style="opacity: 0.5; transform-origin: 392.02px 340.378px"
                    class="animable"
                  ></path>
                </g>
                <path
                  d="M390.67,378.94a.49.49,0,0,1-.47-.32c-.05-.15-5.4-14.77-5.23-38.27s12.52-36.26,12.64-36.38a.5.5,0,0,1,.71,0,.5.5,0,0,1,0,.71c-.12.12-12.18,12.5-12.35,35.68s5.11,37.78,5.17,37.92a.5.5,0,0,1-.3.64A.47.47,0,0,1,390.67,378.94Z"
                  style="
                    fill: rgb(255, 255, 255);
                    transform-origin: 391.717px 341.382px;
                  "
                  id="elbsynm1tho5f"
                  class="animable"
                ></path>
                <path
                  d="M390,378.14l19.14,11a9.21,9.21,0,0,0,12.22-2.63,10,10,0,0,0,1.51-6.65c-.92-9.94-5.24-12.23.05-16.66s6.67-4.74,6.37-9-3.21-6.12-4.59-7.8-5.2-5.2-2.6-10.4,6.15-10.23.77-12.53c-3.21-1.38-8.56.46-12.08,4.28s-6.42,6.57-9.79,7.49-10.39,1.07-10.09,6.88,1.84,7.8.46,10.39C388.77,357.35,377.46,360.1,390,378.14Z"
                  style="fill: #d90429; transform-origin: 406.764px 356.718px"
                  id="el0m6ae2zdb1to"
                  class="animable"
                ></path>
                <path
                  d="M399.46,384.06a.52.52,0,0,1-.5-.46c0-.34-2.94-34.66,20.66-57.5a.5.5,0,0,1,.69.72c-23.26,22.51-20.38,56.35-20.35,56.69a.5.5,0,0,1-.45.54Z"
                  style="
                    fill: rgb(255, 255, 255);
                    transform-origin: 409.641px 355.023px;
                  "
                  id="el3dc50g04w1e"
                  class="animable"
                ></path>
                <path
                  d="M403.25,354.52a.5.5,0,0,1-.5-.46,19.64,19.64,0,0,0-7.23-13.73.5.5,0,0,1-.12-.7.49.49,0,0,1,.69-.12A20.37,20.37,0,0,1,403.75,354a.51.51,0,0,1-.46.55Z"
                  style="
                    fill: rgb(255, 255, 255);
                    transform-origin: 399.529px 346.984px;
                  "
                  id="elfwcv3vys2v"
                  class="animable"
                ></path>
                <path
                  d="M401.62,360.41a.5.5,0,0,1-.33-.12.51.51,0,0,1-.05-.71c.24-.28,6.15-6.8,20-5.07a.5.5,0,0,1,.43.56.51.51,0,0,1-.56.44c-13.3-1.67-19.07,4.67-19.13,4.73A.51.51,0,0,1,401.62,360.41Z"
                  style="
                    fill: rgb(255, 255, 255);
                    transform-origin: 411.397px 357.314px;
                  "
                  id="ell70h3t46gh"
                  class="animable"
                ></path>
              </g>
              <g
                id="freepik--Device--inject-16"
                class="animable"
                style="transform-origin: 270.315px 235.548px"
              >
                <path
                  d="M327.52,437.78,198.16,363.09c-9.13-5.27-16.53-19.41-16.53-31.58v-277c0-12.17,7.4-17.76,16.53-12.49l129.36,74.69c9.13,5.27,16.53,19.41,16.53,31.58v277C344.05,437.45,336.65,443.05,327.52,437.78Z"
                  style="fill: black; transform-origin: 262.84px 239.899px"
                  id="elrqbd3cym17"
                  class="animable"
                ></path>
                <path
                  d="M342.42,108,213.05,33.31c-3.9-2.25-7.48-2.51-10.31-1.13h0a8.45,8.45,0,0,0-1,.59l-14.5,8.43c2.92-1.75,6.74-1.62,10.93.8l129.36,74.69c9.13,5.27,16.53,19.41,16.53,31.58v277c0,6.44-2.07,11-5.37,13.16L353,430.1h0c3.65-1.94,6-6.69,6-13.5v-277C359,127.41,351.55,113.27,342.42,108Z"
                  style="
                    fill: rgb(122, 6, 6);
                    transform-origin: 273.12px 234.882px;
                  "
                  id="el8iq7ftx3b9x"
                  class="animable"
                ></path>
                <path
                  d="M344.05,148.27v277c0,6.44-2.07,11-5.37,13.16L353,430.1h0c3.65-1.94,6-6.69,6-13.5v-277l-14.9,8.65Z"
                  style="
                    fill: rgb(122, 6, 6);
                    transform-origin: 348.84px 289.015px;
                  "
                  id="elgvz8lnb3g8p"
                  class="animable"
                ></path>
                <polygon
                  points="358.95 161.09 344.05 169.69 344.05 176.41 358.95 167.8 358.95 161.09"
                  style="
                    fill: rgb(122, 6, 6);
                    transform-origin: 351.5px 168.75px;
                  "
                  id="elkovnzab764d"
                  class="animable"
                ></polygon>
                <path
                  d="M352.42,205.78h0c-1.33.77-2.41-.05-2.41-1.82V189.51a5.78,5.78,0,0,1,2.41-4.61h0c1.33-.77,2.41,0,2.41,1.82v14.45A5.78,5.78,0,0,1,352.42,205.78Z"
                  style="
                    fill: rgb(122, 6, 6);
                    transform-origin: 352.42px 195.336px;
                  "
                  id="ellrvjwixgdvg"
                  class="animable"
                ></path>
                <path
                  d="M350,204V189.51a5.78,5.78,0,0,1,2.41-4.61,1.54,1.54,0,0,1,1.52-.14v0l-1.81-.93h0a1.56,1.56,0,0,0-1.56.12,5.8,5.8,0,0,0-2.42,4.61V203a2.17,2.17,0,0,0,.82,1.93h0l1.89,1v0A2.08,2.08,0,0,1,350,204Z"
                  style="
                    fill: rgb(122, 6, 6);
                    transform-origin: 351.029px 194.803px;
                  "
                  id="elwk1wlxpgmrc"
                  class="animable"
                ></path>
                <path
                  d="M352.42,240.75h0c-1.33.77-2.41,0-2.41-1.82V224.48a5.79,5.79,0,0,1,2.41-4.61h0c1.33-.77,2.41,0,2.41,1.83v14.44A5.76,5.76,0,0,1,352.42,240.75Z"
                  style="
                    fill: rgb(122, 6, 6);
                    transform-origin: 352.42px 230.31px;
                  "
                  id="ellizuetd368"
                  class="animable"
                ></path>
                <path
                  d="M350,238.93V224.48a5.79,5.79,0,0,1,2.41-4.61,1.57,1.57,0,0,1,1.52-.14h0l-1.81-.94v0a1.51,1.51,0,0,0-1.56.12,5.77,5.77,0,0,0-2.42,4.61V238a2.16,2.16,0,0,0,.82,1.93h0l1.89,1v0A2.07,2.07,0,0,1,350,238.93Z"
                  style="
                    fill: rgb(122, 6, 6);
                    transform-origin: 351.029px 229.779px;
                  "
                  id="elynsyghmcre9"
                  class="animable"
                ></path>
                <path
                  d="M323,124.48,195.88,51.06a3.51,3.51,0,0,0-5.26,3V331.51c0,9.26,6.57,20.63,14.59,25.26l124,71.63a3.87,3.87,0,0,0,5.8-3.35V145.31C335.06,137.67,329.64,128.3,323,124.48Z"
                  style="fill: #d90429; transform-origin: 262.815px 239.754px"
                  id="el83al9e2x9me"
                  class="animable"
                ></path>
                <g id="elatc2szhwplr">
                  <path
                    d="M323,124.48,195.88,51.06a3.51,3.51,0,0,0-5.26,3V331.51c0,9.26,6.57,20.63,14.59,25.26l124,71.63a3.87,3.87,0,0,0,5.8-3.35V145.31C335.06,137.67,329.64,128.3,323,124.48Z"
                    style="
                      fill: rgb(255, 255, 255);
                      opacity: 0.9;
                      transform-origin: 262.815px 239.754px;
                    "
                    class="animable"
                  ></path>
                </g>
                <polygon
                  points="233.9 70.23 235.87 78.52 278.01 102.82 285.29 98.94 233.9 70.23"
                  style="
                    fill: rgb(122, 6, 6);
                    transform-origin: 259.595px 86.525px;
                  "
                  id="elhx4n0e9fuin"
                  class="animable"
                ></polygon>
                <path
                  d="M246.29,78.24c0,1.38-1,1.93-2.16,1.25A4.78,4.78,0,0,1,242,75.75c0-1.37,1-1.93,2.16-1.24A4.76,4.76,0,0,1,246.29,78.24Z"
                  style="
                    fill: rgb(122, 6, 6);
                    transform-origin: 244.145px 76.9977px;
                  "
                  id="elbgs0n9ldm9"
                  class="animable"
                ></path>
                <path
                  d="M274.68,95.79a1.41,1.41,0,0,1-.66-.17l-21.52-12a1.35,1.35,0,0,1,1.31-2.36l21.53,12a1.35,1.35,0,0,1-.66,2.53Z"
                  style="
                    fill: rgb(122, 6, 6);
                    transform-origin: 263.934px 88.448px;
                  "
                  id="els1rekulmwn"
                  class="animable"
                ></path>
                <path
                  d="M217.28,108.8c-1.31-.76-2.26-.1-2.26,1.57a5.07,5.07,0,0,0,2.26,4.22,2.38,2.38,0,0,0,2.47,0l2.09,3.78a4.53,4.53,0,0,1-4.75-.23,12.11,12.11,0,0,1-5.78-9.84c0-3.71,2.49-5,5.92-3a13.54,13.54,0,0,1,4.61,5l-2.09,1.66A7.37,7.37,0,0,0,217.28,108.8Z"
                  style="fill: #d90429; transform-origin: 216.575px 111.648px"
                  id="elist54k9zqml"
                  class="animable"
                ></path>
                <path
                  d="M233.87,121.33c0,3.74-2.53,5-6,3a12.35,12.35,0,0,1-6-10c0-3.74,2.53-5,6-3A12.28,12.28,0,0,1,233.87,121.33Zm-8.29-4.77a5.42,5.42,0,0,0,2.34,4.35c1.24.72,2.24,0,2.24-1.7a5.23,5.23,0,0,0-2.24-4.27C226.66,114.21,225.58,114.83,225.58,116.56Z"
                  style="fill: #d90429; transform-origin: 227.87px 117.83px"
                  id="elqe7dc3mftm"
                  class="animable"
                ></path>
                <path
                  d="M237.9,117.36l4.32,9v-6.48l3.27,1.89v12.61l-3-1.74-4.3-8.92v6.44l-3.29-1.9V115.62Z"
                  style="fill: #d90429; transform-origin: 240.195px 125px"
                  id="el51ujmwuyz19"
                  class="animable"
                ></path>
                <path
                  d="M256.18,127.91v3.3l-3.12-1.8v9.32l-3.61-2.09v-9.32l-3.1-1.79v-3.29Z"
                  style="fill: #d90429; transform-origin: 251.265px 130.485px"
                  id="el31qc3wtd8mo"
                  class="animable"
                ></path>
                <path
                  d="M263.22,142.81l-4.1-2.37-.56,1.46-3.7-2.14,4.61-9.95,3.71,2.14,4.44,15.18-3.85-2.22Zm-.89-3.5L261.21,135l-1.15,3Z"
                  style="fill: #d90429; transform-origin: 261.24px 138.47px"
                  id="elmoby68wwjs"
                  class="animable"
                ></path>
                <path
                  d="M273.35,141.17c-1.31-.75-2.26-.1-2.26,1.58a5.09,5.09,0,0,0,2.26,4.22,2.42,2.42,0,0,0,2.48,0l2.09,3.78a4.59,4.59,0,0,1-4.76-.23,12.11,12.11,0,0,1-5.78-9.85c0-3.71,2.5-5,5.92-3a13.76,13.76,0,0,1,4.62,5l-2.09,1.65A7.53,7.53,0,0,0,273.35,141.17Z"
                  style="fill: #d90429; transform-origin: 272.65px 144.019px"
                  id="el0da05fz5mu8j"
                  class="animable"
                ></path>
                <path
                  d="M287.78,146.16v3.29l-3.12-1.8V157l-3.61-2.09v-9.32l-3.1-1.79v-3.29Z"
                  style="fill: #d90429; transform-origin: 282.865px 148.755px"
                  id="el6cl2n3a81f7"
                  class="animable"
                ></path>
                <path
                  d="M298.45,161.64c.89.51,1.57.11,1.57-1.14v-7.27l3.62,2.08v7.27c0,3.35-2,4.35-5.2,2.52a10.3,10.3,0,0,1-5.29-8.57v-7.27l3.62,2.09v7.27A3.71,3.71,0,0,0,298.45,161.64Z"
                  style="fill: #d90429; transform-origin: 298.395px 157.632px"
                  id="elqf07fep242q"
                  class="animable"
                ></path>
                <path
                  d="M309.47,161.68c-.41-.23-.67-.24-.67.14,0,1.58,5.65,3.86,5.65,8.43,0,2.8-2.13,2.81-4.59,1.39a18.27,18.27,0,0,1-5.47-5.17l1.34-2.36a16.08,16.08,0,0,0,4.16,4.36c.53.31.87.31.87-.14,0-1.64-5.66-3.82-5.66-8.25,0-2.52,1.84-3,4.68-1.4a17.42,17.42,0,0,1,4.75,4.23l-1.31,2.42A19.69,19.69,0,0,0,309.47,161.68Z"
                  style="fill: #d90429; transform-origin: 309.46px 165.163px"
                  id="el99w4fei9lw"
                  class="animable"
                ></path>
              </g>
              <g
                id="freepik--speech-bubble--inject-16"
                class="animable"
                style="transform-origin: 179.174px 155.62px"
              >
                <path
                  d="M199.09,170.94a25.69,25.69,0,1,0-6.74,5.83l12.52,5.44Z"
                  style="fill: #d90429; transform-origin: 179.174px 155.62px"
                  id="ell4iejmpcby"
                  class="animable"
                ></path>
                <g id="elof3kasacu2e">
                  <path
                    d="M199.09,170.94a25.69,25.69,0,1,0-6.74,5.83l12.52,5.44Z"
                    style="opacity: 0.4; transform-origin: 179.174px 155.62px"
                    class="animable"
                  ></path>
                </g>
                <path
                  d="M169.65,153.34c0-.39-.28-.61-.79-.61a5.72,5.72,0,0,0-3.16,1.49l-1.42-2.76a9.08,9.08,0,0,1,5.17-1.82c2.4,0,4.22,1.26,4.22,3.14,0,1.34-1,2.63-2.28,3.92l-1.79,1.77h4.23v2.94h-9.09V159l4.05-4.19A2.73,2.73,0,0,0,169.65,153.34Z"
                  style="
                    fill: rgb(255, 255, 255);
                    transform-origin: 169.055px 155.525px;
                  "
                  id="elctyjxodlx1"
                  class="animable"
                ></path>
                <path
                  d="M181.23,149.81l-2.76,6.62h1.13V154.2h3.48v2.23h1.32v2.73h-1.32v2.25H179.6v-2.25h-4.95v-2.48l3-6.87Z"
                  style="
                    fill: rgb(255, 255, 255);
                    transform-origin: 179.525px 155.61px;
                  "
                  id="eli1j2bts0od"
                  class="animable"
                ></path>
                <path
                  d="M195.14,155.64v5.77h-3.72v-4.7a1.08,1.08,0,0,0-1.07-1.23c-.73,0-1.19.57-1.19,1.45v4.48h-3.72V149.15h3.72v4.51a3.14,3.14,0,0,1,2.74-1.46A3.17,3.17,0,0,1,195.14,155.64Z"
                  style="
                    fill: rgb(255, 255, 255);
                    transform-origin: 190.296px 155.28px;
                  "
                  id="elihyibicffk"
                  class="animable"
                ></path>
              </g>
              <g
                id="freepik--Character--inject-16"
                class="animable"
                style="transform-origin: 241.879px 274.784px"
              >
                <path
                  d="M316.44,248.56V372.81a8,8,0,0,1-12,6.94l-66.92-38.64-11.86-6.84A26.95,26.95,0,0,1,212.2,311V186.74a8,8,0,0,1,12-6.94L303,225.29A26.87,26.87,0,0,1,316.44,248.56Z"
                  style="fill: #d90429; transform-origin: 264.32px 279.775px"
                  id="el0p6p7yb8cmc"
                  class="animable"
                ></path>
                <g id="el0zldxga12fsk">
                  <path
                    d="M316.44,248.56V372.81a8,8,0,0,1-12,6.94l-66.92-38.64-11.86-6.84A26.95,26.95,0,0,1,212.2,311V186.74a8,8,0,0,1,12-6.94L303,225.29A26.87,26.87,0,0,1,316.44,248.56Z"
                    style="
                      fill: rgb(255, 255, 255);
                      opacity: 0.5;
                      transform-origin: 264.32px 279.775px;
                    "
                    class="animable"
                  ></path>
                </g>
                <path
                  d="M277.89,322.08s12.53,20.78,3.48,44.21l-43.88-25.18Z"
                  style="
                    fill: rgb(122, 6, 6);
                    transform-origin: 261.072px 344.185px;
                  "
                  id="el1v1873jx0oi"
                  class="animable"
                ></path>
                <g id="elh3ukp0ddp5r">
                  <circle
                    cx="283.92"
                    cy="226.99"
                    r="14.05"
                    style="
                      fill: rgb(38, 50, 56);
                      transform-origin: 283.92px 226.99px;
                      transform: rotate(-82.98deg);
                    "
                    class="animable"
                  ></circle>
                </g>
                <path
                  d="M284,187.59s4.31-7,5.63-6.49-.86,7.18-.86,7.18,6.52,1.36,5.31,3-9.18,1.25-9.18,1.25Z"
                  style="
                    fill: rgb(38, 50, 56);
                    transform-origin: 289.115px 186.822px;
                  "
                  id="elasynsvcxbzf"
                  class="animable"
                ></path>
                <path
                  d="M287,205.63c-3,22.54-22,22.54-22,22.54L225.2,210.65s-3-2.63-3.92-8.67a26.41,26.41,0,0,1,0-7.46s0-.05,0-.07c1.27-9.48,8.36-19.67,23.8-22.8a50.59,50.59,0,0,1,10.28-1,46.83,46.83,0,0,1,5,.25c12,1.18,20.41,6.78,24.42,15.49a28,28,0,0,1,2,6.15A38.82,38.82,0,0,1,287,205.63Z"
                  style="
                    fill: rgb(38, 50, 56);
                    transform-origin: 254.233px 199.41px;
                  "
                  id="el2kpicflja1w"
                  class="animable"
                ></path>
                <path
                  d="M191.45,249.23s-14.13-.49-19.57,13.28c0,0,6,4.05,13.87,0S191.45,249.23,191.45,249.23Z"
                  style="fill: #d90429; transform-origin: 181.802px 256.769px"
                  id="elwv4typdeah7"
                  class="animable"
                ></path>
                <g id="elff9nroiftb8">
                  <path
                    d="M191.45,249.23s-14.13-.49-19.57,13.28c0,0,6,4.05,13.87,0S191.45,249.23,191.45,249.23Z"
                    style="opacity: 0.5; transform-origin: 181.802px 256.769px"
                    class="animable"
                  ></path>
                </g>
                <path
                  d="M191.05,255.86s-4-17.38-6.11-17.59-2.52,5.3-2.35,8.41l-5-10.76a2.71,2.71,0,0,0-3.76-1.21c-5,2.75-13.77,11.11,4.72,31.78Z"
                  style="
                    fill: rgb(148, 89, 89);
                    transform-origin: 179.184px 250.431px;
                  "
                  id="els3zvbeshdqh"
                  class="animable"
                ></path>
                <path
                  d="M242.25,243.84l-3-.39a17.18,17.18,0,0,0-16,6.72l-17.85,23.76-14-24.7s-1.68,16.8-19.57,13.28l19.21,32.33a14.78,14.78,0,0,0,24.18,1.77l16.44-20.21Z"
                  style="fill: #d90429; transform-origin: 207.04px 272.686px"
                  id="el5bcb02ggwni"
                  class="animable"
                ></path>
                <path
                  d="M280.35,299.29c-4,10.14-4.44,12.12-2,17.19a64.87,64.87,0,0,1,4,11.64s-18.54,20.78-44.93,13l-11.86-6.84a26.56,26.56,0,0,1-6.58-5.36L222.59,302a9.4,9.4,0,0,0-.42-4.21l-3.79-11.11a30.36,30.36,0,0,1,7.52-31.51l12.74-12.45L272.1,247l5,1.43A14.15,14.15,0,0,1,287.18,264C285.54,275.8,282.86,292.92,280.35,299.29Z"
                  style="fill: #d90429; transform-origin: 252.038px 292.792px"
                  id="elts31ho943u"
                  class="animable"
                ></path>
                <g id="el2sjd3d1i6q9">
                  <path
                    d="M280.35,299.29c-4,10.14-4.44,12.12-2,17.19a64.87,64.87,0,0,1,4,11.64s-18.54,20.78-44.93,13l-11.86-6.84a26.56,26.56,0,0,1-6.58-5.36L222.59,302a9.4,9.4,0,0,0-.42-4.21l-3.79-11.11a30.36,30.36,0,0,1,7.52-31.51l12.74-12.45L272.1,247l5,1.43A14.15,14.15,0,0,1,287.18,264C285.54,275.8,282.86,292.92,280.35,299.29Z"
                    style="opacity: 0.5; transform-origin: 252.038px 292.792px"
                    class="animable"
                  ></path>
                </g>
                <path
                  d="M260.17,269l-6.7-5.71a5.37,5.37,0,0,0-5.23-1l-8.1,2.79-1.09-4.54a5.38,5.38,0,0,0-6.72-3.91l-3.51,1,5.94-11.38a21.31,21.31,0,0,1,8.59-8.78l2.33-1.28,19.25,1s7.17,3,7.17,9.75l-11.93,22"
                  style="fill: #d90429; transform-origin: 250.46px 252.595px"
                  id="el11r4c9uw2wla"
                  class="animable"
                ></path>
                <polygon
                  points="265.01 245.72 245.71 260.76 245.71 212.87 265.01 212.87 265.01 245.72"
                  style="
                    fill: rgb(148, 89, 89);
                    transform-origin: 255.36px 236.815px;
                  "
                  id="elh13w2zudnj8"
                  class="animable"
                ></polygon>
                <polygon
                  points="246.01 241.77 240.14 265.12 264.93 245.72 246.01 241.77"
                  style="
                    fill: rgb(148, 89, 89);
                    transform-origin: 252.535px 253.445px;
                  "
                  id="el0jqsk485zfjc"
                  class="animable"
                ></polygon>
                <path
                  d="M245.71,238.3A33.78,33.78,0,0,0,265,219.94v-7.07h-19.3Z"
                  style="
                    fill: rgb(112, 56, 56);
                    transform-origin: 255.35px 225.585px;
                  "
                  id="elqzo22hhtzf"
                  class="animable"
                ></path>
                <path
                  d="M249.87,177.38c-7.32,0-22.88,4.08-24.68,23.24s-.06,34,9.82,35.44,32.84-5.73,35.92-30.53S257,177.38,249.87,177.38Z"
                  style="
                    fill: rgb(148, 89, 89);
                    transform-origin: 247.932px 206.808px;
                  "
                  id="elwsjkatdrc4p"
                  class="animable"
                ></path>
                <polygon
                  points="238.35 208.73 238.35 220.02 231.73 217.99 238.35 208.73"
                  style="
                    fill: rgb(112, 56, 56);
                    transform-origin: 235.04px 214.375px;
                  "
                  id="elzxbdt57a71"
                  class="animable"
                ></polygon>
                <circle
                  cx="245.71"
                  cy="210.68"
                  r="2.3"
                  style="
                    fill: rgb(38, 50, 56);
                    transform-origin: 245.71px 210.68px;
                  "
                  id="eluh4fuw1vkx"
                  class="animable"
                ></circle>
                <path
                  d="M232.87,209.08a2.3,2.3,0,1,1-2.3-2.31A2.3,2.3,0,0,1,232.87,209.08Z"
                  style="
                    fill: rgb(38, 50, 56);
                    transform-origin: 230.57px 209.07px;
                  "
                  id="elz0eaqdm0dh"
                  class="animable"
                ></path>
                <path
                  d="M227.76,204.28l4.5-2.67s-1.72-1.79-3.44-.72S227.76,204.28,227.76,204.28Z"
                  style="
                    fill: rgb(38, 50, 56);
                    transform-origin: 229.948px 202.415px;
                  "
                  id="elbwc3sw5b6nh"
                  class="animable"
                ></path>
                <path
                  d="M235.24,224.6a9.75,9.75,0,0,0,6.19-1.66s.43,3.27-2.31,3.89S235.24,224.6,235.24,224.6Z"
                  style="
                    fill: rgb(112, 56, 56);
                    transform-origin: 238.347px 224.929px;
                  "
                  id="elr1qdtfkajag"
                  class="animable"
                ></path>
                <path
                  d="M231.31,183.9s2.75,26.45,38.72,27.28c0,0,10.87-26.29-10.61-34.83S231.31,183.9,231.31,183.9Z"
                  style="
                    fill: rgb(38, 50, 56);
                    transform-origin: 252.045px 192.516px;
                  "
                  id="elksmf3706abd"
                  class="animable"
                ></path>
                <path
                  d="M280.62,207.22h0l0,0h0l-4.42-2.56h0c-1.68-1-4-.86-6.57.62-5.1,2.94-9.24,10.11-9.24,16,0,2.95,1,5,2.72,6h0l4.34,2.5.25.14.15.09v0c1.64.8,3.83.61,6.24-.78,5.1-3,9.24-10.11,9.24-16C283.3,210.25,282.27,208.19,280.62,207.22Z"
                  style="fill: #d90429; transform-origin: 271.86px 217.25px"
                  id="eliijqvimjqo"
                  class="animable"
                ></path>
                <g id="elnao11nt7dm">
                  <ellipse
                    cx="274.06"
                    cy="218.51"
                    rx="13.06"
                    ry="7.54"
                    style="
                      fill: #d90429;
                      transform-origin: 274.06px 218.51px;
                      transform: rotate(-60deg);
                    "
                    class="animable"
                  ></ellipse>
                </g>
                <g id="eltqip77ri84">
                  <ellipse
                    cx="274.06"
                    cy="218.51"
                    rx="13.06"
                    ry="7.54"
                    style="
                      opacity: 0.5;
                      transform-origin: 274.06px 218.51px;
                      transform: rotate(-60deg);
                    "
                    class="animable"
                  ></ellipse>
                </g>
                <path
                  d="M282.39,212.77h0l-3-1.75h0c-1.14-.68-2.73-.59-4.49.42a14,14,0,0,0-6.32,10.95c0,2,.71,3.43,1.86,4.09h0l3,1.71a1,1,0,0,0,.17.1l.1.06h0a4.6,4.6,0,0,0,4.28-.54,14,14,0,0,0,6.32-10.94C284.23,214.84,283.53,213.43,282.39,212.77Z"
                  style="fill: #d90429; transform-origin: 276.445px 219.615px"
                  id="el7zj2cn4ljzi"
                  class="animable"
                ></path>
                <path
                  d="M284.23,216.85a14,14,0,0,1-6.32,10.94c-3.5,2-6.33.38-6.33-3.65a13.94,13.94,0,0,1,6.33-10.94C281.4,211.18,284.23,212.81,284.23,216.85Z"
                  style="fill: #d90429; transform-origin: 277.905px 220.49px"
                  id="elod0jt9yavc"
                  class="animable"
                ></path>
                <g id="elbk8xsqaflgv">
                  <path
                    d="M284.23,216.85a14,14,0,0,1-6.32,10.94c-3.5,2-6.33.38-6.33-3.65a13.94,13.94,0,0,1,6.33-10.94C281.4,211.18,284.23,212.81,284.23,216.85Z"
                    style="opacity: 0.3; transform-origin: 277.905px 220.49px"
                    class="animable"
                  ></path>
                </g>
                <path
                  d="M266.89,172.22a16.64,16.64,0,0,0-10-3.47H256a53.89,53.89,0,0,0-10.93,1c.66,0,1.32,0,2,0h-2v1.86h1.86a24.71,24.71,0,0,1,23.87,24.73v7.87a2.22,2.22,0,0,0,2.45,2.21l.23,0,2-.62h0a1.86,1.86,0,0,1-.41.08,2.45,2.45,0,0,0,2.12-2.48v-7.3C277.17,182.89,271.46,175.79,266.89,172.22Z"
                  style="fill: #d90429; transform-origin: 261.13px 187.589px"
                  id="elcte1cs3l1qi"
                  class="animable"
                ></path>
                <path
                  d="M254.3,235.51a5.75,5.75,0,0,1-2.39-.52l-6.25-2.89a.75.75,0,1,1,.62-1.36l6.25,2.89a4.22,4.22,0,0,0,4.82-.9l6-6.2a.75.75,0,0,1,1.06,0,.76.76,0,0,1,0,1.06l-6,6.2A5.69,5.69,0,0,1,254.3,235.51Z"
                  style="fill: #d90429; transform-origin: 254.894px 230.91px"
                  id="eloccwxcul54"
                  class="animable"
                ></path>
                <g id="el3p4we61qpyn">
                  <path
                    d="M254.3,235.51a5.75,5.75,0,0,1-2.39-.52l-6.25-2.89a.75.75,0,1,1,.62-1.36l6.25,2.89a4.22,4.22,0,0,0,4.82-.9l6-6.2a.75.75,0,0,1,1.06,0,.76.76,0,0,1,0,1.06l-6,6.2A5.69,5.69,0,0,1,254.3,235.51Z"
                    style="opacity: 0.5; transform-origin: 254.894px 230.91px"
                    class="animable"
                  ></path>
                </g>
                <path
                  d="M247.3,230a2.92,2.92,0,1,1-2.92-2.92A2.92,2.92,0,0,1,247.3,230Z"
                  style="fill: #d90429; transform-origin: 244.38px 230px"
                  id="elzgzn2knl5oe"
                  class="animable"
                ></path>
                <g id="el5873g1lnyfo">
                  <path
                    d="M247.3,230a2.92,2.92,0,1,1-2.92-2.92A2.92,2.92,0,0,1,247.3,230Z"
                    style="opacity: 0.5; transform-origin: 244.38px 230px"
                    class="animable"
                  ></path>
                </g>
                <path
                  d="M277.17,196.1v7.3a2.45,2.45,0,0,1-2.12,2.48,2.36,2.36,0,0,1-2.61-2.35V196.1a26.29,26.29,0,0,0-27.36-26.31,53.89,53.89,0,0,1,10.93-1h.87a16.64,16.64,0,0,1,10,3.47C271.46,175.79,277.17,182.89,277.17,196.1Z"
                  style="fill: #d90429; transform-origin: 261.125px 187.34px"
                  id="elljr7ztgwaw"
                  class="animable"
                ></path>
                <g id="elkfwoqdxncg8">
                  <path
                    d="M277.17,196.1v7.3a2.45,2.45,0,0,1-2.12,2.48,2.36,2.36,0,0,1-2.61-2.35V196.1a26.29,26.29,0,0,0-27.36-26.31,53.89,53.89,0,0,1,10.93-1h.87a16.64,16.64,0,0,1,10,3.47C271.46,175.79,277.17,182.89,277.17,196.1Z"
                    style="opacity: 0.5; transform-origin: 261.125px 187.34px"
                    class="animable"
                  ></path>
                </g>
                <path
                  d="M265.93,333.67S261.09,347,278.39,353c0,0,5.65-8.3,0-15.09S265.93,333.67,265.93,333.67Z"
                  style="fill: #d90429; transform-origin: 273.104px 343.1px"
                  id="elq2hi5epzzhl"
                  class="animable"
                ></path>
                <g id="elocrmwel227l">
                  <path
                    d="M265.93,333.67S261.09,347,278.39,353c0,0,5.65-8.3,0-15.09S265.93,333.67,265.93,333.67Z"
                    style="opacity: 0.7; transform-origin: 273.104px 343.1px"
                    class="animable"
                  ></path>
                </g>
                <path
                  d="M272,334.28s-16.9,6.19-16.81,8.59,7.18.76,7.18.76l-2.59,1.7a15.84,15.84,0,0,0-6.05,7.38h0a2.92,2.92,0,0,0,1.34,3.65l6.42,3.4a3.07,3.07,0,0,0,4.19-1.35h0a6,6,0,0,1,3.51-3c3.49-1.16,10-4.5,12.61-13.64Z"
                  style="
                    fill: rgb(148, 89, 89);
                    transform-origin: 267.663px 347.199px;
                  "
                  id="eld2obgfn74ud"
                  class="animable"
                ></path>
                <path
                  d="M277.07,248.41s-9,5-4.22,20.18,13.75,38.73,13.75,38.73l-20.67,26.35A15.82,15.82,0,0,1,277,340.31,14,14,0,0,1,278.39,353l25.66-33a23.25,23.25,0,0,0,3.64-21.83l-11-32.12a26.88,26.88,0,0,0-17-16.81Z"
                  style="fill: #d90429; transform-origin: 287.44px 300.705px"
                  id="el1pju63djwkd"
                  class="animable"
                ></path>
              </g>
              <g
                id="freepik--Icons--inject-16"
                class="animable"
                style="transform-origin: 100.88px 178.741px"
              >
                <path
                  d="M125.15,158.74l-39.77-23a3.35,3.35,0,0,0-3.17-.35h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07.06,0c-1.09.62-1.78,2.06-1.78,4.12V189c0,3.74,2.27,8.09,5.08,9.71l39.77,23a3.18,3.18,0,0,0,3.5.15.18.18,0,0,0-.07.05l8.59-5h0c1.12-.6,1.83-2.06,1.83-4.15V168.45C130.23,164.71,128,160.36,125.15,158.74Z"
                  style="fill: #d90429; transform-origin: 100.88px 178.728px"
                  id="eltqvh8a94zha"
                  class="animable"
                ></path>
                <path
                  d="M128.81,162.93a10.12,10.12,0,0,0-3.66-4.19l-39.77-23a3.35,3.35,0,0,0-3.17-.35h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07a3.24,3.24,0,0,1,3.36.25l39.77,23a10.3,10.3,0,0,1,3.75,4.38h0Z"
                  style="fill: #d90429; transform-origin: 101.03px 151.707px"
                  id="el5ou1t11xqmg"
                  class="animable"
                ></path>
                <path
                  d="M121.46,217.82c0,2-.64,3.39-1.65,4l8.59-5h0c1.12-.6,1.83-2.06,1.83-4.15V168.45a12.51,12.51,0,0,0-1.42-5.52l-8.68,5.34h0a12.49,12.49,0,0,1,1.33,5.33Z"
                  style="fill: #d90429; transform-origin: 125.02px 192.375px"
                  id="eljbt0d9pufs"
                  class="animable"
                ></path>
                <g id="elkkwy996yw8m">
                  <path
                    d="M128.81,162.93a10.12,10.12,0,0,0-3.66-4.19l-39.77-23a3.35,3.35,0,0,0-3.17-.35h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07a3.24,3.24,0,0,1,3.36.25l39.77,23a10.3,10.3,0,0,1,3.75,4.38h0Z"
                    style="opacity: 0.3; transform-origin: 101.03px 151.707px"
                    class="animable"
                  ></path>
                </g>
                <g id="ela1u4dnceoid">
                  <path
                    d="M121.46,217.82c0,2-.64,3.39-1.65,4l8.59-5h0c1.12-.6,1.83-2.06,1.83-4.15V168.45a12.51,12.51,0,0,0-1.42-5.52l-8.68,5.34h0a12.49,12.49,0,0,1,1.33,5.33Z"
                    style="opacity: 0.6; transform-origin: 125.02px 192.375px"
                    class="animable"
                  ></path>
                </g>
                <path
                  d="M109.8,186.27c0,5.73-2.27,7.68-5.67,5.71a8,8,0,0,1-3.8-5c-1,1.23-2.55,1.31-4.73.05-3.58-2.07-6.4-7-6.4-11.79s2.79-6.44,6.4-4.36a11,11,0,0,1,4.26,4.57v-1.89l3.77,2.18v10.36a3,3,0,0,0,1.33,2.81c1.27.74,2.05-.51,2.05-4.22,0-6.49-4.16-13.37-10.31-16.92s-10.3-1.08-10.3,5.6a21,21,0,0,0,10.19,17.53,11.88,11.88,0,0,0,5.46,1.74l.89,3.45A14.21,14.21,0,0,1,96.59,194c-8-4.63-13.29-13.95-13.29-22.39s5.34-11.5,13.4-6.84C104.49,169.26,109.8,178.25,109.8,186.27Zm-9.88-4.81a7.34,7.34,0,0,0-3.47-6.35c-2-1.17-3.43-.35-3.43,2.37a7.39,7.39,0,0,0,3.43,6.39C98.45,185,99.92,184.27,99.92,181.46Z"
                  style="fill: #d90429; transform-origin: 96.55px 179.341px"
                  id="el6ybzaot7e3x"
                  class="animable"
                ></path>
                <g id="elnrp7rxk8kk">
                  <g
                    style="opacity: 0.9; transform-origin: 96.55px 179.341px"
                    class="animable"
                  >
                    <path
                      d="M109.8,186.27c0,5.73-2.27,7.68-5.67,5.71a8,8,0,0,1-3.8-5c-1,1.23-2.55,1.31-4.73.05-3.58-2.07-6.4-7-6.4-11.79s2.79-6.44,6.4-4.36a11,11,0,0,1,4.26,4.57v-1.89l3.77,2.18v10.36a3,3,0,0,0,1.33,2.81c1.27.74,2.05-.51,2.05-4.22,0-6.49-4.16-13.37-10.31-16.92s-10.3-1.08-10.3,5.6a21,21,0,0,0,10.19,17.53,11.88,11.88,0,0,0,5.46,1.74l.89,3.45A14.21,14.21,0,0,1,96.59,194c-8-4.63-13.29-13.95-13.29-22.39s5.34-11.5,13.4-6.84C104.49,169.26,109.8,178.25,109.8,186.27Zm-9.88-4.81a7.34,7.34,0,0,0-3.47-6.35c-2-1.17-3.43-.35-3.43,2.37a7.39,7.39,0,0,0,3.43,6.39C98.45,185,99.92,184.27,99.92,181.46Z"
                      style="
                        fill: rgb(255, 255, 255);
                        transform-origin: 96.55px 179.341px;
                      "
                      id="elr4ba69wmk3"
                      class="animable"
                    ></path>
                  </g>
                </g>
                <path
                  d="M125.15,237.52l-39.77-23a3.31,3.31,0,0,0-3.17-.34h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07.06,0c-1.09.62-1.78,2.06-1.78,4.11v44.22c0,3.75,2.27,8.09,5.08,9.71l39.77,23a3.16,3.16,0,0,0,3.5.15l-.07.06,8.59-5.05h0c1.12-.59,1.83-2,1.83-4.15V247.22C130.23,243.48,128,239.14,125.15,237.52Z"
                  style="fill: #d90429; transform-origin: 100.88px 257.501px"
                  id="elr71cm9x89nl"
                  class="animable"
                ></path>
                <path
                  d="M128.81,241.71a10.06,10.06,0,0,0-3.66-4.19l-39.77-23a3.31,3.31,0,0,0-3.17-.34h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07a3.23,3.23,0,0,1,3.36.24l39.77,23a10.27,10.27,0,0,1,3.75,4.39h0Z"
                  style="fill: #d90429; transform-origin: 101.03px 230.492px"
                  id="elsg2cgpyds3i"
                  class="animable"
                ></path>
                <path
                  d="M121.46,296.59c0,2-.64,3.39-1.65,4.05l8.59-5.05h0c1.12-.59,1.83-2,1.83-4.15V247.22a12.47,12.47,0,0,0-1.42-5.51l-8.68,5.34h0a12.45,12.45,0,0,1,1.33,5.32Z"
                  style="fill: #d90429; transform-origin: 125.02px 271.175px"
                  id="elqrb68mtl43"
                  class="animable"
                ></path>
                <g id="elbnebvjsvhwe">
                  <path
                    d="M128.81,241.71a10.06,10.06,0,0,0-3.66-4.19l-39.77-23a3.31,3.31,0,0,0-3.17-.34h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07a3.23,3.23,0,0,1,3.36.24l39.77,23a10.27,10.27,0,0,1,3.75,4.39h0Z"
                    style="opacity: 0.3; transform-origin: 101.03px 230.492px"
                    class="animable"
                  ></path>
                </g>
                <g id="el5r2d0z7cbjc">
                  <path
                    d="M121.46,296.59c0,2-.64,3.39-1.65,4.05l8.59-5.05h0c1.12-.59,1.83-2,1.83-4.15V247.22a12.47,12.47,0,0,0-1.42-5.51l-8.68,5.34h0a12.45,12.45,0,0,1,1.33,5.32Z"
                    style="opacity: 0.6; transform-origin: 125.02px 271.175px"
                    class="animable"
                  ></path>
                </g>
                <polygon
                  points="92.05 257.29 82.46 241.71 82.46 262.82 92.05 257.29"
                  style="fill: #d90429; transform-origin: 87.255px 252.265px"
                  id="elve9io2uktgn"
                  class="animable"
                ></polygon>
                <polygon
                  points="100.96 261.78 110.53 278.35 110.53 257.27 100.96 261.78"
                  style="fill: #d90429; transform-origin: 105.745px 267.81px"
                  id="elnjf5yntdzzo"
                  class="animable"
                ></polygon>
                <path
                  d="M83.91,241l9.85,16a.63.63,0,0,1,.11.12.28.28,0,0,1,0,.12L96.8,262l2.48-1.17a.69.69,0,0,1,.13-.11.75.75,0,0,1,.32-.1l10-4.69Z"
                  style="fill: #d90429; transform-origin: 96.82px 251.5px"
                  id="elpv88kdj2mb"
                  class="animable"
                ></path>
                <path
                  d="M99.51,262.46l-2.68,1.26a.75.75,0,0,1-.33.07.8.8,0,0,1-.69-.38l-2.93-4.76-9.62,5.56,25.89,14.94Z"
                  style="fill: #d90429; transform-origin: 96.205px 268.9px"
                  id="eluqvcavle6ti"
                  class="animable"
                ></path>
                <g id="elbxkp60au8tq">
                  <g
                    style="opacity: 0.9; transform-origin: 96.495px 260.075px"
                    class="animable"
                  >
                    <polygon
                      points="92.05 257.29 82.46 241.71 82.46 262.82 92.05 257.29"
                      style="
                        fill: rgb(255, 255, 255);
                        transform-origin: 87.255px 252.265px;
                      "
                      id="el40e3dj9k6jx"
                      class="animable"
                    ></polygon>
                    <polygon
                      points="100.96 261.78 110.53 278.35 110.53 257.27 100.96 261.78"
                      style="
                        fill: rgb(255, 255, 255);
                        transform-origin: 105.745px 267.81px;
                      "
                      id="eljf13y0pnbzn"
                      class="animable"
                    ></polygon>
                    <path
                      d="M83.91,241l9.85,16a.63.63,0,0,1,.11.12.28.28,0,0,1,0,.12L96.8,262l2.48-1.17a.69.69,0,0,1,.13-.11.75.75,0,0,1,.32-.1l10-4.69Z"
                      style="
                        fill: rgb(255, 255, 255);
                        transform-origin: 96.82px 251.5px;
                      "
                      id="elskojiya75xi"
                      class="animable"
                    ></path>
                    <path
                      d="M99.51,262.46l-2.68,1.26a.75.75,0,0,1-.33.07.8.8,0,0,1-.69-.38l-2.93-4.76-9.62,5.56,25.89,14.94Z"
                      style="
                        fill: rgb(255, 255, 255);
                        transform-origin: 96.205px 268.9px;
                      "
                      id="elxd4gngksasp"
                      class="animable"
                    ></path>
                  </g>
                </g>
                <path
                  d="M125.15,80,85.38,57a3.31,3.31,0,0,0-3.17-.34h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07.06,0c-1.09.61-1.78,2.06-1.78,4.11v44.22c0,3.74,2.27,8.09,5.08,9.71l39.77,23a3.16,3.16,0,0,0,3.5.15l-.07.05,8.59-5h0c1.12-.59,1.83-2,1.83-4.15V89.67C130.23,85.93,128,81.58,125.15,80Z"
                  style="fill: #d90429; transform-origin: 100.88px 99.9808px"
                  id="elihekkin3nb"
                  class="animable"
                ></path>
                <path
                  d="M128.81,84.16a10.09,10.09,0,0,0-3.66-4.2L85.38,57a3.31,3.31,0,0,0-3.17-.34h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07a3.23,3.23,0,0,1,3.36.24l39.77,23a10.27,10.27,0,0,1,3.75,4.39h0Z"
                  style="fill: #d90429; transform-origin: 101.03px 72.9722px"
                  id="eluxt10rydpja"
                  class="animable"
                ></path>
                <path
                  d="M121.46,139c0,2-.64,3.39-1.65,4l8.59-5h0c1.12-.59,1.83-2,1.83-4.15V89.67a12.47,12.47,0,0,0-1.42-5.51l-8.68,5.34h0a12.45,12.45,0,0,1,1.33,5.32Z"
                  style="fill: #d90429; transform-origin: 125.02px 113.58px"
                  id="elwta3nj6huno"
                  class="animable"
                ></path>
                <g id="el5073f0fked">
                  <path
                    d="M128.81,84.16a10.09,10.09,0,0,0-3.66-4.2L85.38,57a3.31,3.31,0,0,0-3.17-.34h0a1.92,1.92,0,0,0-.31.18l-8.65,5.07a3.23,3.23,0,0,1,3.36.24l39.77,23a10.27,10.27,0,0,1,3.75,4.39h0Z"
                    style="opacity: 0.3; transform-origin: 101.03px 72.9722px"
                    class="animable"
                  ></path>
                </g>
                <g id="el6j3ou1rq13k">
                  <path
                    d="M121.46,139c0,2-.64,3.39-1.65,4l8.59-5h0c1.12-.59,1.83-2,1.83-4.15V89.67a12.47,12.47,0,0,0-1.42-5.51l-8.68,5.34h0a12.45,12.45,0,0,1,1.33,5.32Z"
                    style="opacity: 0.6; transform-origin: 125.02px 113.58px"
                    class="animable"
                  ></path>
                </g>
                <path
                  d="M108.45,120c-1.53-2.52-3.07-5-4.6-7.54a3.92,3.92,0,0,0-2.41-2c-.74-.15-1.48-.32-2.24-.54a1.38,1.38,0,0,1-.65-.56,63.22,63.22,0,0,1-5.93-13.6.75.75,0,0,1,.08-.61c.47-.47,1-.9,1.48-1.32s.73-1.39.38-2.65c-.74-2.67-1.45-5.34-2.19-8a4.38,4.38,0,0,0-2.86-3.32,8.09,8.09,0,0,0-4.9.18c-.61.23-.93.78-.94,1.73.26,1.83.43,3.64.78,5.5q3.7,20.12,17.8,37a2.85,2.85,0,0,0,2.23,1.28,6.72,6.72,0,0,0,4.23-1.63C109.6,123.12,109.51,121.7,108.45,120Z"
                  style="fill: #d90429; transform-origin: 96.4936px 102.557px"
                  id="elga05oefsu4u"
                  class="animable"
                ></path>
                <path
                  d="M108.33,106.37A21.24,21.24,0,0,0,106,98.13a24.35,24.35,0,0,0-3.75-5.51c-.39-.44-.72-.58-.92-.25s0,.8.38,1.23l.39.45a21.07,21.07,0,0,1,5,11.33,4,4,0,0,0,.09.91,2.43,2.43,0,0,0,.59.91c.21.15.45,0,.62,0C108.34,106.79,108.35,106.58,108.33,106.37Z"
                  style="fill: #d90429; transform-origin: 104.826px 99.7274px"
                  id="elnvtd7hlug3g"
                  class="animable"
                ></path>
                <path
                  d="M99.27,98.16a8.45,8.45,0,0,1,2.17,5,3.18,3.18,0,0,0,.31.81c.61.5.91.33.91-.3a11,11,0,0,0-2.81-6.41c-.38-.39-.69-.51-.87-.18A1,1,0,0,0,99.27,98.16Z"
                  style="fill: #d90429; transform-origin: 100.793px 100.575px"
                  id="elqdlnc2prpdt"
                  class="animable"
                ></path>
                <g id="el3odmb2sa8yc">
                  <g
                    style="opacity: 0.9; transform-origin: 96.4936px 102.557px"
                    class="animable"
                  >
                    <path
                      d="M108.45,120c-1.53-2.52-3.07-5-4.6-7.54a3.92,3.92,0,0,0-2.41-2c-.74-.15-1.48-.32-2.24-.54a1.38,1.38,0,0,1-.65-.56,63.22,63.22,0,0,1-5.93-13.6.75.75,0,0,1,.08-.61c.47-.47,1-.9,1.48-1.32s.73-1.39.38-2.65c-.74-2.67-1.45-5.34-2.19-8a4.38,4.38,0,0,0-2.86-3.32,8.09,8.09,0,0,0-4.9.18c-.61.23-.93.78-.94,1.73.26,1.83.43,3.64.78,5.5q3.7,20.12,17.8,37a2.85,2.85,0,0,0,2.23,1.28,6.72,6.72,0,0,0,4.23-1.63C109.6,123.12,109.51,121.7,108.45,120Z"
                      style="
                        fill: rgb(255, 255, 255);
                        transform-origin: 96.4936px 102.557px;
                      "
                      id="elqr3et2n10mi"
                      class="animable"
                    ></path>
                    <path
                      d="M108.33,106.37A21.24,21.24,0,0,0,106,98.13a24.35,24.35,0,0,0-3.75-5.51c-.39-.44-.72-.58-.92-.25s0,.8.38,1.23l.39.45a21.07,21.07,0,0,1,5,11.33,4,4,0,0,0,.09.91,2.43,2.43,0,0,0,.59.91c.21.15.45,0,.62,0C108.34,106.79,108.35,106.58,108.33,106.37Z"
                      style="
                        fill: rgb(255, 255, 255);
                        transform-origin: 104.826px 99.7274px;
                      "
                      id="elytq2vbk7dn9"
                      class="animable"
                    ></path>
                    <path
                      d="M99.27,98.16a8.45,8.45,0,0,1,2.17,5,3.18,3.18,0,0,0,.31.81c.61.5.91.33.91-.3a11,11,0,0,0-2.81-6.41c-.38-.39-.69-.51-.87-.18A1,1,0,0,0,99.27,98.16Z"
                      style="
                        fill: rgb(255, 255, 255);
                        transform-origin: 100.793px 100.575px;
                      "
                      id="elbg4bmkqxwvh"
                      class="animable"
                    ></path>
                  </g>
                </g>
              </g>
              <g
                id="freepik--Clouds--inject-16"
                class="animable"
                style="transform-origin: 383.195px 71.0679px"
              >
                <path
                  d="M329.2,53.48l9.37,5.33V55.49c0-.23,0-.47,0-.7s0-.45,0-.67V54h0c.34-4.39,3.67-6.08,7.73-3.73a15.14,15.14,0,0,1,4.62,4.43c.91-6,5.78-8.12,11.67-4.73,6.54,3.78,11.84,13,11.84,20.52v7.1A3.24,3.24,0,0,0,376,80.42l5.52,3.23a8,8,0,0,1,3.92,6.86,3.27,3.27,0,0,1-4.91,2.83L329.34,63.75A9,9,0,0,1,324.86,56,2.9,2.9,0,0,1,329.2,53.48Z"
                  style="
                    fill: rgb(230, 230, 230);
                    transform-origin: 355.15px 71.0679px;
                  "
                  id="elsvrjrq7jgdd"
                  class="animable"
                ></path>
                <path
                  d="M400.63,52.09,407.44,56V53.56c0-.17,0-.34,0-.51s0-.33,0-.49V52.5h0c.25-3.19,2.67-4.42,5.62-2.71A11,11,0,0,1,416.42,53c.67-4.34,4.21-5.91,8.49-3.44,4.76,2.75,8.61,9.43,8.61,14.92v5.17a2.34,2.34,0,0,0,1.16,2l4,2.35a5.78,5.78,0,0,1,2.85,5A2.38,2.38,0,0,1,438,81.08L400.73,59.56a6.51,6.51,0,0,1-3.25-5.63A2.11,2.11,0,0,1,400.63,52.09Z"
                  style="
                    fill: rgb(230, 230, 230);
                    transform-origin: 419.505px 64.8823px;
                  "
                  id="el0p6mzzucrhwm"
                  class="animable"
                ></path>
              </g>
              <defs>
                <filter id="active" height="200%">
                  <feMorphology
                    in="SourceAlpha"
                    result="DILATED"
                    operator="dilate"
                    radius="2"
                  ></feMorphology>
                  <feFlood
                    flood-color="#32DFEC"
                    flood-opacity="1"
                    result="PINK"
                  ></feFlood>
                  <feComposite
                    in="PINK"
                    in2="DILATED"
                    operator="in"
                    result="OUTLINE"
                  ></feComposite>
                  <feMerge>
                    <feMergeNode in="OUTLINE"></feMergeNode>
                    <feMergeNode in="SourceGraphic"></feMergeNode>
                  </feMerge>
                </filter>
                <filter id="hover" height="200%">
                  <feMorphology
                    in="SourceAlpha"
                    result="DILATED"
                    operator="dilate"
                    radius="2"
                  ></feMorphology>
                  <feFlood
                    flood-color="#ff0000"
                    flood-opacity="0.5"
                    result="PINK"
                  ></feFlood>
                  <feComposite
                    in="PINK"
                    in2="DILATED"
                    operator="in"
                    result="OUTLINE"
                  ></feComposite>
                  <feMerge>
                    <feMergeNode in="OUTLINE"></feMergeNode>
                    <feMergeNode in="SourceGraphic"></feMergeNode>
                  </feMerge>
                  <feColorMatrix
                    type="matrix"
                    values="0   0   0   0   0                0   1   0   0   0                0   0   0   0   0                0   0   0   1   0 "
                  ></feColorMatrix>
                </filter>
              </defs>
            </svg>
          </div>
        </div>
      </div>
    </section>
    <!-- <script src="contact.js"></script> -->
  </body>
</html>

<?php
      
      ?>