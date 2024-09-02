
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flights</title>
    <link rel="shortcut icon" href="images/airplane.png" type="image/x-icon">
    <script src="books.js"></script>

    <!-- BootStrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNS3Xa"
        crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js
        "></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css
">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- Font Google -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Karla:wght@400;700;800&display=swap" rel="stylesheet">

    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/0e02826fa5.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://kit.fontawesome.com/0e02826fa5.css" crossorigin="anonymous">
    <link rel="stylesheet" href="navbar_css.css">
    <link rel="stylesheet" href="Styles.css">
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
          <li><a href="flights1.php" class="active">Flights</a></li>
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


    <!-- Flights -->
    <section id="flights">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="titele-hero">Flights</h1>
                    <p class="description-titl">Stay up to date with the flight schedule below.</p>
                </div>
            
            </div>
            <div class="row">
                <div class="col-lg-12">
                <?php
                    session_start();

                    include "db_connect.php";

                    if (isset($_POST['books'])) {
                        $flightid = "AA123"; // Assuming 'flight_id' is the actual name attribute in your form
                    
                        if (isset($_SESSION['old_user'])) {
                            $email = $_SESSION['old_user'];
                    
                            // You need to escape user input to prevent SQL injection
                            $escapedEmail = mysqli_real_escape_string($conn, $email);
                            $escapedFlightId = mysqli_real_escape_string($conn, $flightid);
                    
                            $sql = "UPDATE Passenger SET Flight_code='$flightid' WHERE Email='$escapedEmail'";
                            $result = mysqli_query($conn, $sql);
                    
                            if ($result) {
                            } else {
                            }
                        }
                    }
                ?>
                    <form action="#" method="post">
                    <table class="flights-table">
                        <thead>
                            <tr>
                                <th>Flight Code</th>
                                <th>Departure</th>
                                <th>Destination</th>
                                <th>Departure Time</th>
                                <th>Arrival Time</th>
                                <th>Price</th>
                                <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td id="ID" name="ID" >AA123</td>
                                <td id="dep">New York (JFK)</td>
                                <td id="arr">Hurghada (HRG)</td>
                                <td id="dept">09:00 &nbsp;<i class="fa-sharp fa-solid fa-plane-departure"></i></td>
                                <td id="arrt">12:00 &nbsp;<i class="fa-solid fa-plane-arrival"></i></td>
                                <td>$320</td>
                                <td>
                                    <button class="btn button" type="submit" name="books" onclick="bookTicket('AA123', 'JFK', 'HRG', '09:00', '12:00')">Book</button>
                                    <!-- <a ></a> -->
                                  </td>
                            </tr>
                            <tr>
                                <td>DL456</td>
                                <td>Cairo (CAI)</td>
                                <td>Atlanta (ATL)</td>
                                <td>11:30 &nbsp;<i class="fa-sharp fa-solid fa-plane-departure"></i></td>
                                <td>01:30 &nbsp;<i class="fa-solid fa-plane-arrival"></i></td>
                                <td>$300</td>
                                <td>
                                    <button class="btn button" type="submit" name="books" onclick="bookTicket('DL456', 'CAI', 'ATL', '11:30', '01:30')">Book</button>
                                  </td>
                            </tr>
                            <tr>
                                <td>UA789</td>
                                <td>San Francisco (SFO)</td>
                                <td>New York (JFK)</td>
                                <td>01:45 &nbsp;<i class="fa-sharp fa-solid fa-plane-departure"></i></td>
                                <td>09:30 &nbsp;<i class="fa-solid fa-plane-arrival"></i></td>
                                <td>$200</td>
                                <td>
                                    <button class="btn button" type="submit" name="books" onclick="bookTicket('UA789', 'SFO', 'JFK', '01:45', '09:30')">Book</button>
                                  </td>
                            </tr>
                            <tr>
                                <td>WN101</td>
                                <td>Las Vegas (LAS)</td>
                                <td>Venice (VCE)</td>
                                <td>15:00 &nbsp;<i class="fa-sharp fa-solid fa-plane-departure"></i></td>
                                <td>23:00 &nbsp;<i class="fa-solid fa-plane-arrival"></i></td>
                                <td>$250</td>
                                <td>
                                <button class="btn button" type="submit" name="books" onclick="bookTicket('WN101', 'LAS', 'VCE', '15:00', '23:00')">Book</button>
                                  </td>
                            </tr>
                            
                            <tr>
                                <td>AA567</td>
                                <td>Alexandria (HBE)</td>
                                <td>Tokyo (HND)</td>
                                <td>06:30 &nbsp;<i class="fa-sharp fa-solid fa-plane-departure"></i></td>
                                <td>02:30 &nbsp;<i class="fa-solid fa-plane-arrival"></i></td>
                                <td>$500</td>
                                <td>
                                <button class="btn button" type="submit" name="books" onclick="bookTicket('AA567', 'HBE', 'HND', '06:30', '02:30')">Book</button>
                                  </td>
                            </tr>
                            
                        </tbody>
                    </table>
                    </form>
                    
                </div>
            </div>
        </div>
        <script src="book.js"></script>
</body>

</html>