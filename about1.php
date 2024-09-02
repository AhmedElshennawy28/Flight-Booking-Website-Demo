<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>About</title>
    <link
      rel="shortcut icon"
      href="../images/airplane.png"
      type="image/x-icon"
    />

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
    <link rel="stylesheet" href="Styles.css" />
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
          <li><a href="about1.php" class="active">About</a></li>
          <li><a href="booking1.php">Book</a></li>
          <li><a href="flights1.php">Flights</a></li>
          <li><a href="ticket1.php">Tickets</a></li>
          <li><a href="contact1.php">Contact</a></li>
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

    <!-- about -->
    <section id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
            <svg
              class="animated"
              id="freepik_stories-flying-around-the-world"
              xmlns="http://www.w3.org/2000/svg"
              xmlns:xlink="http://www.w3.org/1999/xlink"
              viewBox="0 0 500 500"
              version="1.1"
              xmlns:svgjs="http://svgjs.com/svgjs"
            >
              <style>
                svg#freepik_stories-flying-around-the-world:not(.animated)
                  .animable {
                  opacity: 0;
                }

                svg#freepik_stories-flying-around-the-world.animated
                  #freepik--background-simple--inject-20 {
                  animation: 1s 1 forwards cubic-bezier(0.36, -0.01, 0.5, 1.38)
                    lightSpeedLeft;
                  animation-delay: 0s;
                }

                svg#freepik_stories-flying-around-the-world.animated
                  #freepik--earth-globe--inject-20 {
                  animation: 1s 1 forwards cubic-bezier(0.36, -0.01, 0.5, 1.38)
                    zoomOut;
                  animation-delay: 0s;
                }

                svg#freepik_stories-flying-around-the-world.animated
                  #freepik--Clouds--inject-20 {
                  animation: 1s 1 forwards cubic-bezier(0.36, -0.01, 0.5, 1.38)
                    lightSpeedRight;
                  animation-delay: 0s;
                }

                svg#freepik_stories-flying-around-the-world.animated
                  #freepik--Airplane--inject-20 {
                  animation: 1s 1 forwards cubic-bezier(0.36, -0.01, 0.5, 1.38)
                    slideLeft;
                  animation-delay: 0s;
                }

                @keyframes lightSpeedLeft {
                  from {
                    transform: translate3d(-50%, 0, 0) skewX(20deg);
                    opacity: 0;
                  }

                  60% {
                    transform: skewX(-10deg);
                    opacity: 1;
                  }

                  80% {
                    transform: skewX(2deg);
                  }

                  to {
                    opacity: 1;
                    transform: translate3d(0, 0, 0);
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
              </style>
              <g
                id="freepik--background-simple--inject-20"
                class="animable"
                style="transform-origin: 248.035px 250.767px"
              >
                <path
                  d="M143.2,442.76s56.21,35.63,116.23,9.34,76.24-86.71,105.49-130.48c15.32-22.92,42.06-34,61.81-52.6C489.87,209.46,458.66,97,395.19,60.89c-54.95-31.22-115.94-27.66-189.45,9.46S79.06,130.86,44.56,215.41,73,393.64,143.2,442.76Z"
                  style="fill: #edf2f4; transform-origin: 248.035px 250.767px"
                  id="ellnhw6ftlkki"
                  class="animable"
                ></path>
                <g id="el0ztpvea2k33j">
                  <path
                    d="M143.2,442.76s56.21,35.63,116.23,9.34,76.24-86.71,105.49-130.48c15.32-22.92,42.06-34,61.81-52.6C489.87,209.46,458.66,97,395.19,60.89c-54.95-31.22-115.94-27.66-189.45,9.46S79.06,130.86,44.56,215.41,73,393.64,143.2,442.76Z"
                    style="
                      fill: rgb(255, 255, 255);
                      opacity: 0.7;
                      transform-origin: 248.035px 250.767px;
                    "
                    class="animable"
                  ></path>
                </g>
              </g>
              <g
                id="freepik--earth-globe--inject-20"
                class="animable"
                style="transform-origin: 238.55px 258.32px"
              >
                <g id="elav2m09hvked">
                  <circle
                    cx="238.55"
                    cy="258.32"
                    r="148.18"
                    style="
                      fill: rgb(135, 135, 135);
                      transform-origin: 238.55px 258.32px;
                      transform: rotate(-45deg);
                    "
                    class="animable"
                  ></circle>
                </g>
                <g
                  style="
                    clip-path: url('#freepik--clip-path--inject-20');
                    transform-origin: 238.051px 258.582px;
                  "
                  id="elg6sg4iwlt96"
                  class="animable"
                >
                  <path
                    d="M233.22,189.72l14.07,6.33,3.87,6.33,6.33,2.46.7,6.69-2.46,3.87-4.92,1-10.56-4.22v-1.41l6-2.46L244.12,201l-9.49-3.52-4.22-5.63ZM321.84,352.2l-11.25-4.58-13.72-4.92H286l-10.2-2.11-11.25,2.46-6.33.35h-3.87l-7.38,4.22-7,2.82-9.49-6,2.46-9.85-6-2.46h-7L218.8,329l.71-6.33L217,319.14l-4.92.7-1.41,3.52-6,.35-5.28-6.33-2.11-8.44,5.28-9.85,10.19.71,2.82,2.46h4.22l5.27-3.17,4.57,1.41L236,311.4l2.47-.35-.71-8.09-2.11-4.22.71-6.68,13-5.63,1.76-13,5.62-4.57,4.58-8.09,3.51-.7,8.09-5.28.35-2.81-5.62.35-1.06-2.81h-3.87l-6,1.4,2.82-4.57,12.31-3.51,2.81-3.17,4.92,7.74,3.17,3.16,4.92-1.4-2.11-4.58-7.38-5.27-8.44-9.5-8.8-6-8.44-1.41-4.22-4.22-5.62-1.41-.71,1.41-.7,10.2,1.41,3.51-3.17,11.26-7-5.63,1-4.92-7.38-3.52L223,225.24l1.76-8.79,10.2-7.39.7-8.44-3.87.36-2.46-3.17-1-5.27-2.46-.36-1.41,5.63-3.87.7-1.76-12.3L216,184.45l-4.92-2.11-5.63,2.81,7,6.68,1.41,6-12.66-9.49-8.79-9.5-.71-9.49-9.14-2.82-7,4.57a55.62,55.62,0,0,1-5.28,2.82c-1.76.7-8.44,1.4-8.44,1.4l-1.41,6-8.08.35.7,3.87,13,2.11,6.68,7.39v12.31l-3.87,10.9.71,11.6-9.85,17.24-2.11,25.67,3.17,14.77,4.57,11.25,5.27.71-1.76-5.63-2.81-4.22-1.76-7.74,3.17-.7,4.92,12.66,3.52,11.25v9.15l6.68,8.08,12,8.8L212.82,336l5.63,5.27,4.22,5.63,6.33,3.87,7.74,2.11,7.74-.35s-.36,3.52-.36,5.27-4.92,7.74-4.92,7.74l-3.87,7,2.81,7.74,7.74,3.17,10.9,11.25,4.93,2.11v5.27l.61,2.46a147.58,147.58,0,0,0,73.76-34.72l.18-2.55,9.5-17.23-4.57-3.17Zm36.58-138.92-3.87-6.68-4.92-7.73-1.41-10.55,6.33,1.05.35-3.52-4.57-.35,3.87-1.76,4.22-2.46v-3.51l-4.22-5.63-.9-7.57a148.25,148.25,0,0,0-173.91-42.13l8.11,5.74-4.92,6.33-6.68,1.41-.71,9.49-2.81,1.06-3.52,3.87.36,6.33,6,.7-2.46,6h6l10.2-13,1.06-5.63,9.84-.71,2.46-4.22,10.2-1.05,1.06-6,7.38-.35s5.28-2.81,6.33-2.81,6,1.75,6,1.75l5.28,4.22h7.38l6.33-3.86,8.09.7a8.67,8.67,0,0,0,3.87,1.41c1.76,0,7-2.47,7-2.47l10.2,6.33,4.22,3.17v5.27l5.28.71,1.75-3.17,4.58,2.11-.36,2.82-10.55,2.81,6,7.74,12.66,7,5.28,7,7.74.71,1.75-3.52,2.82-.7-9.15-7-5.62-.7,4.57-1.41-4.22-6,6-.36,7.73,4.22,1.76,8.44,3.87,4.58,3.17,10.19,7.73,5.63v11.61l8.09,5.27-.35,3.87-1.06,4.57,2.11,6.33.71,3.17,6,1,2.81-6ZM363,177.86v2l-1.76,5.62,1.06,4.93,3.86,1.4v6.68l-4.22-1.75-1.05,19-4.22,7.73,2.81,9.85,4.57,4.22v19l4.58,14.77,4.92,11.26,8.09,2.1,2.81-7,1.15-.9a149.22,149.22,0,0,0,1.14-18.42A147.48,147.48,0,0,0,363,177.86Zm-81.24-2.2-23.21-10.2-10.2.35-2.46,6.68-4.22-4.57-7.74,1.76-.7,11.6,6.33,4.57,4.57-6.68,5.28,5.28,10.9,9.49,2.11,10.2,9.14,11.61,14.77-2.47L286,208l-3.16-6L282.1,188l3.52-6Zm19,7.73-5.27-1.4-4.57,3.86,2.46,10.2h4.57Zm32.71,6.68-12-6.33L319,179.52l-2.81,1.06,2.46,7,2.11,9.15,5.27,2.11,1.06-1.41L324,192.18l9.15,3.52ZM230.76,317l-1.41,1.41,10.55,3.16,4.22,4.92,6.69.71,2.46-3.87L245.18,322Zm31.3,6.68-7.39,2.11,1.06,2.81h9.14l1.76-2.81-3.16.35Z"
                    style="fill: #ef233c; transform-origin: 269.545px 257.34px"
                    id="el404f3fbieri"
                    class="animable"
                  ></path>
                  <g id="elept1ftniaw">
                    <path
                      d="M274.46,320.49A148.82,148.82,0,0,1,125.64,171.68c0-3.81.15-7.59.43-11.33a148.81,148.81,0,1,0,260.48,109.2A148.44,148.44,0,0,1,274.46,320.49Z"
                      style="
                        opacity: 0.3;
                        transform-origin: 237.956px 283.687px;
                      "
                      class="animable"
                    ></path>
                  </g>
                </g>
                <g id="elonzkkhi8d4">
                  <circle
                    cx="238.55"
                    cy="258.32"
                    r="148.18"
                    style="
                      fill: none;
                      stroke: rgb(38, 50, 56);
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      transform-origin: 238.55px 258.32px;
                      transform: rotate(-45deg);
                    "
                    class="animable"
                  ></circle>
                </g>
              </g>
              <g
                id="freepik--Clouds--inject-20"
                class="animable"
                style="transform-origin: 250.64px 269.009px"
              >
                <path
                  d="M405.81,210.08a17.31,17.31,0,0,0,.36-3.55,17.69,17.69,0,0,0-26.34-15.44,34.32,34.32,0,0,0-64.25-9.39,25.85,25.85,0,0,0-4.34-.38,25.14,25.14,0,0,0-20.74,10.89,17.67,17.67,0,0,0-28.07,14.32,18,18,0,0,0,.35,3.55Z"
                  style="
                    fill: rgb(255, 255, 255);
                    stroke: rgb(161, 161, 161);
                    stroke-miterlimit: 10;
                    transform-origin: 334.3px 186.582px;
                  "
                  id="eljqm4du9gnr"
                  class="animable"
                ></path>
                <path
                  d="M194.63,178.29a12.54,12.54,0,0,0,.24-2.47,12.29,12.29,0,0,0-18.28-10.72,23.83,23.83,0,0,0-44.6-6.51,17.67,17.67,0,0,0-3-.26,17.47,17.47,0,0,0-14.39,7.55,12.28,12.28,0,0,0-19.49,9.94,12.54,12.54,0,0,0,.25,2.47Z"
                  style="
                    fill: rgb(255, 255, 255);
                    stroke: rgb(161, 161, 161);
                    stroke-miterlimit: 10;
                    transform-origin: 144.99px 161.984px;
                  "
                  id="elnfooqrzp01o"
                  class="animable"
                ></path>
                <path
                  d="M232.72,361.12a14.19,14.19,0,0,0,.28-2.79,13.92,13.92,0,0,0-20.71-12.15,27,27,0,0,0-50.53-7.38,20.23,20.23,0,0,0-3.42-.3A19.81,19.81,0,0,0,142,347.06,13.9,13.9,0,0,0,120,358.33a13.47,13.47,0,0,0,.28,2.79Z"
                  style="
                    fill: rgb(255, 255, 255);
                    stroke: rgb(161, 161, 161);
                    stroke-miterlimit: 10;
                    transform-origin: 176.5px 342.648px;
                  "
                  id="eldmz2btpt9jn"
                  class="animable"
                ></path>
                <path
                  d="M320.17,245.64a7.69,7.69,0,0,0,.16-1.6,8,8,0,0,0-7.95-7.95,7.85,7.85,0,0,0-3.88,1,15.42,15.42,0,0,0-28.86-4.22,11.49,11.49,0,0,0-1.95-.17,11.28,11.28,0,0,0-9.32,4.89A7.94,7.94,0,0,0,255.76,244a8.43,8.43,0,0,0,.16,1.6Z"
                  style="
                    fill: rgb(255, 255, 255);
                    stroke: rgb(161, 161, 161);
                    stroke-miterlimit: 10;
                    transform-origin: 288.045px 235.079px;
                  "
                  id="el7s8n81d78u3"
                  class="animable"
                ></path>
                <path
                  d="M276.85,392.34a8.43,8.43,0,0,0,.16-1.6,8,8,0,0,0-7.95-7.95,7.85,7.85,0,0,0-3.88,1,15.42,15.42,0,0,0-28.87-4.22A11.32,11.32,0,0,0,225,384.31a7.93,7.93,0,0,0-12.6,6.43,7.69,7.69,0,0,0,.16,1.6Z"
                  style="
                    fill: rgb(255, 255, 255);
                    stroke: rgb(161, 161, 161);
                    stroke-miterlimit: 10;
                    transform-origin: 244.705px 381.771px;
                  "
                  id="elilmql2akkd9"
                  class="animable"
                ></path>
              </g>
              <g
                id="freepik--Airplane--inject-20"
                class="animable"
                style="transform-origin: 310.048px 294.64px"
              >
                <path
                  d="M381,217.35q1.08,3.77,2,7.61c28.79,14.62,45.2,29.9,42.68,42.66-3.4,17.24-40.52,25.62-93.47,24v16c71.93,4.18,123.34-5.43,127.66-27.31C463.5,261.66,432.29,238.34,381,217.35Z"
                  style="
                    fill: rgb(255, 255, 255);
                    stroke: rgb(38, 50, 56);
                    stroke-miterlimit: 10;
                    transform-origin: 396.183px 262.963px;
                  "
                  id="elt6i0udtabir"
                  class="animable"
                ></path>
                <path
                  d="M217.41,260,163.7,220.38l2.09-3.06-5.72,3.84-.13,4.44,1.86-1.87,27.12,21A5.11,5.11,0,0,0,192,247.8a27.15,27.15,0,0,1,3.25,1.14l17,14.51Z"
                  style="
                    fill: rgb(255, 255, 255);
                    stroke: rgb(38, 50, 56);
                    stroke-linecap: round;
                    stroke-linejoin: round;
                    transform-origin: 188.675px 240.385px;
                  "
                  id="el5ooxa63gelj"
                  class="animable"
                ></path>
                <polygon
                  points="328.22 283.1 313.82 271.82 311.14 271.55 324.11 283.78 328.22 283.1"
                  style="
                    fill: rgb(255, 255, 255);
                    stroke: rgb(38, 50, 56);
                    stroke-linecap: round;
                    stroke-linejoin: round;
                    transform-origin: 319.68px 277.665px;
                  "
                  id="el3oafrq954vg"
                  class="animable"
                ></polygon>
                <path
                  d="M341.64,285.5,231.87,258.39s-11-3.41-20,2.25-11.44,6.43-15.58,13.55a15.66,15.66,0,0,0,5.5,21.18c7.85,4.77,60.66,14.45,60.66,14.45s13,7,18.69,8.4,17,2.86,19.34,2.57a29.75,29.75,0,0,0,4.67-1.06l12.61,2.73-4.67,2.31s-11-3.41-15.21,5.43,2.9,14.22,9.73,16.06a21.57,21.57,0,0,0,13.75-.51c2.14-.82,4.72-.06,6.62-3.41s2.76-5.16,1.8-6.59l-1.92-2.86a13,13,0,0,0,3.39-.82,29.4,29.4,0,0,0,4.91-3.5L354.7,335s5.27,4.76,8.66,5.18,4.33-.86,4.33-.86l26.15,9.84s2.44,2.72,4.59,3.14a10.36,10.36,0,0,0,4.25-.15l48.49,17,.44,2.81,3.42-6-4.15.92-122.8-46.55s22.75-5.94,34.62-13.27l51.79,16.66-.63-1.86-47.5-18.3s1.85-4.34.51-6.35a25.61,25.61,0,0,0-4.11-4.28L391,241.4l-6.21-1.22-37.73,44.16S345.93,285.11,341.64,285.5Z"
                  style="
                    fill: rgb(255, 255, 255);
                    transform-origin: 324.627px 306.07px;
                  "
                  id="el9xrxnurcrvc"
                  class="animable"
                ></path>
                <g
                  style="
                    clip-path: url('#freepik--clip-path-2--inject-20');
                    transform-origin: 333.023px 306.275px;
                  "
                  id="elx7xngwxxf19"
                  class="animable"
                >
                  <g id="elcfy4d8p2qsp">
                    <path
                      d="M336.12,328.57,354.7,335s5.27,4.76,8.66,5.18,4.33-.86,4.33-.86l26.15,9.84s2.44,2.72,4.59,3.14a10.36,10.36,0,0,0,4.25-.15l48.49,17,.44,2.81,3.42-6-4.15.92-122.8-46.55s22.75-5.94,34.62-13.27l51.79,16.66-.63-1.86-47.5-18.3s1.85-4.34.51-6.35a25.61,25.61,0,0,0-4.11-4.28L391,241.4l-4.13-.81c-2.24,3-29,39.11-33.12,45.11-4.34,6.27-14,5.79-14,5.79s-75.21-16.88-86.3-18.32-24.59-3.86-33.75,6.26-8.68,18.81-8.68,18.81l.86.7c17.76,4.88,50.49,10.88,50.49,10.88s13,7,18.69,8.4,17,2.86,19.34,2.57a29.75,29.75,0,0,0,4.67-1.06l12.61,2.73-4.67,2.31s-11-3.41-15.21,5.43,2.9,14.22,9.73,16.06a21.57,21.57,0,0,0,13.75-.51c2.14-.82,4.72-.06,6.62-3.41s2.76-5.16,1.8-6.59l-1.92-2.86a13,13,0,0,0,3.39-.82A29.4,29.4,0,0,0,336.12,328.57Z"
                      style="
                        stroke: rgb(38, 50, 56);
                        stroke-linecap: round;
                        stroke-linejoin: round;
                        stroke-width: 0.75px;
                        opacity: 0.2;
                        transform-origin: 333.023px 306.275px;
                      "
                      class="animable"
                    ></path>
                  </g>
                </g>
                <path
                  d="M341.64,285.5,231.87,258.39s-11-3.41-20,2.25-11.44,6.43-15.58,13.55a15.66,15.66,0,0,0,5.5,21.18c7.85,4.77,60.66,14.45,60.66,14.45s13,7,18.69,8.4,17,2.86,19.34,2.57a29.75,29.75,0,0,0,4.67-1.06l12.61,2.73-4.67,2.31s-11-3.41-15.21,5.43,2.9,14.22,9.73,16.06a21.57,21.57,0,0,0,13.75-.51c2.14-.82,4.72-.06,6.62-3.41s2.76-5.16,1.8-6.59l-1.92-2.86a13,13,0,0,0,3.39-.82,29.4,29.4,0,0,0,4.91-3.5L354.7,335s5.27,4.76,8.66,5.18,4.33-.86,4.33-.86l26.15,9.84s2.44,2.72,4.59,3.14a10.36,10.36,0,0,0,4.25-.15l48.49,17,.44,2.81,3.42-6-4.15.92-122.8-46.55s22.75-5.94,34.62-13.27l51.79,16.66-.63-1.86-47.5-18.3s1.85-4.34.51-6.35a25.61,25.61,0,0,0-4.11-4.28L391,241.4l-6.21-1.22-37.73,44.16S345.93,285.11,341.64,285.5Z"
                  style="
                    fill: none;
                    stroke: rgb(38, 50, 56);
                    stroke-linecap: round;
                    stroke-linejoin: round;
                    transform-origin: 324.627px 306.07px;
                  "
                  id="eld6jmu7pvx28"
                  class="animable"
                ></path>
                <polygon
                  points="222.98 271.5 214.75 268.01 210.81 272.19 211.25 272.5 220.56 276.39 222.98 271.5"
                  style="
                    fill: rgb(38, 50, 56);
                    transform-origin: 216.895px 272.2px;
                  "
                  id="el8r6wrrwhhpk"
                  class="animable"
                ></polygon>
                <path
                  d="M208.28,263.92l-.76-.63c-1.78,1.1-3.22,2-4.46,2.91l.85.94Z"
                  style="
                    fill: rgb(38, 50, 56);
                    transform-origin: 205.67px 265.215px;
                  "
                  id="eloh5u6i54n3"
                  class="animable"
                ></path>
                <polygon
                  points="213.7 267.56 209.17 264.6 204.64 267.94 204.74 268.04 209.91 271.58 213.7 267.56"
                  style="
                    fill: rgb(38, 50, 56);
                    transform-origin: 209.17px 268.09px;
                  "
                  id="elo79q09i80wn"
                  class="animable"
                ></polygon>
                <polygon
                  points="227.37 273.07 224 271.87 221.54 276.84 226.7 279.89 227.93 280.21 227.37 273.07"
                  style="
                    fill: rgb(38, 50, 56);
                    transform-origin: 224.735px 276.04px;
                  "
                  id="elsg0plffsqi"
                  class="animable"
                ></polygon>
                <path
                  d="M232,276.71c-.39-2.78-.84-2.28-.84-2.28l-2.7-1,.55,7,2.8.74A10.92,10.92,0,0,0,232,276.71Z"
                  style="
                    fill: rgb(38, 50, 56);
                    transform-origin: 230.303px 277.3px;
                  "
                  id="ellyveu43i0jo"
                  class="animable"
                ></path>
                <g id="elgfu2bupcrbf">
                  <ellipse
                    cx="305.94"
                    cy="334.31"
                    rx="8.58"
                    ry="8"
                    style="
                      fill: rgb(38, 50, 56);
                      stroke: rgb(38, 50, 56);
                      stroke-linecap: round;
                      stroke-linejoin: round;
                      transform-origin: 305.94px 334.31px;
                      transform: rotate(-78.84deg);
                    "
                    class="animable"
                  ></ellipse>
                </g>
                <path
                  d="M362.7,307l-5-1.53a3.19,3.19,0,0,1,1.24-2.69c1.33-.8,7.43.72,7.43.72"
                  style="
                    fill: rgb(255, 255, 255);
                    stroke: rgb(38, 50, 56);
                    stroke-linecap: round;
                    stroke-linejoin: round;
                    transform-origin: 362.033px 304.774px;
                  "
                  id="elqx7dkzdun1e"
                  class="animable"
                ></path>
                <path
                  d="M304.33,320a150.13,150.13,0,0,1-15.48-5.27c-3.81-1.58-2-5.33-2-5.33l-14.57-4S247.38,301,222.51,295c-16.58-4-24.69-8.89-28.26-11.71a15.66,15.66,0,0,0,7.5,12.06c7.85,4.77,60.66,14.45,60.66,14.45s13,7,18.69,8.4,17,2.86,19.34,2.57A28.38,28.38,0,0,0,304.33,320Z"
                  style="
                    fill: rgb(38, 50, 56);
                    stroke: rgb(38, 50, 56);
                    stroke-linecap: round;
                    stroke-linejoin: round;
                    stroke-width: 0.75px;
                    transform-origin: 249.29px 302.049px;
                  "
                  id="el1nj0kbe3t6n"
                  class="animable"
                ></path>
                <path
                  d="M337.15,317.63l-27.25-5.37,2.17,1.52,16.19,6.46C329.06,320,332.52,319.09,337.15,317.63Z"
                  style="
                    fill: rgb(38, 50, 56);
                    stroke: rgb(38, 50, 56);
                    stroke-linecap: round;
                    stroke-linejoin: round;
                    stroke-width: 0.75px;
                    transform-origin: 323.525px 316.25px;
                  "
                  id="el62ia4ge6b1b"
                  class="animable"
                ></path>
                <line
                  x1="350.21"
                  y1="290.78"
                  x2="345.02"
                  y2="289.9"
                  style="
                    fill: rgb(255, 255, 255);
                    stroke: rgb(38, 50, 56);
                    stroke-miterlimit: 10;
                    transform-origin: 347.615px 290.34px;
                  "
                  id="elk25r4ygjs0q"
                  class="animable"
                ></line>
                <line
                  x1="362.76"
                  y1="292.89"
                  x2="353.81"
                  y2="291.38"
                  style="
                    fill: rgb(255, 255, 255);
                    stroke: rgb(38, 50, 56);
                    stroke-miterlimit: 10;
                    transform-origin: 358.285px 292.135px;
                  "
                  id="elanbboriyucf"
                  class="animable"
                ></line>
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
              <defs>
                <clipPath id="freepik--clip-path--inject-20">
                  <circle
                    cx="238.55"
                    cy="258.32"
                    r="148.18"
                    transform="translate(-112.79 244.34) rotate(-45)"
                    style="
                      fill: #878787;
                      stroke: #263238;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                    "
                  ></circle>
                </clipPath>
                <clipPath id="freepik--clip-path-2--inject-20">
                  <path
                    d="M341.64,285.5,231.87,258.39s-11-3.41-20,2.25-11.44,6.43-15.58,13.55a15.66,15.66,0,0,0,5.5,21.18c7.85,4.77,60.66,14.45,60.66,14.45s13,7,18.69,8.4,17,2.86,19.34,2.57a29.75,29.75,0,0,0,4.67-1.06l12.61,2.73-4.67,2.31s-11-3.41-15.21,5.43,2.9,14.22,9.73,16.06a21.57,21.57,0,0,0,13.75-.51c2.14-.82,4.72-.06,6.62-3.41s2.76-5.16,1.8-6.59l-1.92-2.86a13,13,0,0,0,3.39-.82,29.4,29.4,0,0,0,4.91-3.5L354.7,335s5.27,4.76,8.66,5.18,4.33-.86,4.33-.86l26.15,9.84s2.44,2.72,4.59,3.14a10.36,10.36,0,0,0,4.25-.15l48.49,17,.44,2.81,3.42-6-4.15.92-122.8-46.55s22.75-5.94,34.62-13.27l51.79,16.66-.63-1.86-47.5-18.3s1.85-4.34.51-6.35a25.61,25.61,0,0,0-4.11-4.28L391,241.4l-6.21-1.22-37.73,44.16S345.93,285.11,341.64,285.5Z"
                    style="
                      fill: #fff;
                      stroke: #263238;
                      stroke-linecap: round;
                      stroke-linejoin: round;
                    "
                  ></path>
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="col-lg-6">
            <h1 class="titele-hero">About Us</h1>
            <p class="description-about">
              Our company has been providing aviation services for over 20
              years, and we have built a reputation for excellence and
              reliability. We are a team of experienced professionals who are
              passionate about aviation and committed to delivering the highest
              quality services and solutions to our customers. We value
              integrity, teamwork, and innovation, and we are always looking for
              ways to improve and grow. Contact us to learn more about our
              company and how we can help you with your aviation needs.
            </p>
          </div>
        </div>
      </div>
      <?php
      
      ?>
    </section>
  </body>
</html>
