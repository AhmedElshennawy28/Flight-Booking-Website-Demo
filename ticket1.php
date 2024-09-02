<?php
session_start();
?>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Your Tickets</title>
    <link rel="stylesheet" href="ticket_css.css">
    <script src="book.js"></script>

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
          <li><a href="about1.php" >About</a></li>
          <li><a href="booking1.php">Book</a></li>
          <li><a href="flights1.php">Flights</a></li>
          <li><a href="ticket1.php" class="active">Tickets</a></li>
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

    <section id="ticket">
      <div class="container">
      <?php
      include "db_connect.php";

      

      ?>

        <div class="ticket basic">
          <p>Admit One</p>
        </div>
      
        <div class="ticket airline">
          <div class="top">
            <h1>boarding pass</h1>
            <div class="big">
              <p class="from"><span id="departure"></span></p>
              <p class="to"><i class="fas fa-arrow-right"></i><span id="destination"></span></p>
            </div>
          </div>
          <div class="bottom">
            <div class="column">
              <div class="row row-1">
                <p>Flight Code: <span id="flightCode"></span></p>
                <p class="row--right"><span>Gate</span>B3</p>
              </div>
              <div class="row row-2">
                <p><span>Boards</span>10:25 AM</p>
                <p class="row--center">Departure Time: <span id="departureTime"></span></p>
                <p class="row--right"><span>Arrival Time: <span id="arrivalTime"></span></p>
              </div>
              <div class="row row-3">
                <p>Passenger:<span></span></p>
                <p class="row--center"><span>Seat</span>11E</p>
                <p class="row--right"><span>Group</span>3</p>
              </div>
            </div>
            <div class="bar--code"></div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

<?php
      
      ?>