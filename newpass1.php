
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forgot Password</title>
    <link rel="shortcut icon" href="../images/airplane.png" type="image/x-icon">

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

    <!-- Sign Up -->
    <section id="sign-up">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <h1 class="new-pass">Enter New Password</h1>
                    <form method="post">
                    <?php

                    session_start();

                    include "db_connect.php";

                    if (isset($_POST['new'])) {

                      $email = $_POST['email'];
                      $pass = $_POST['password'];
                      $cpass = $_POST['confirmpassword'];


                      $check = "select * from Passenger where Email='{$email}'";
                      $res = mysqli_query($conn, $check);


                      if (mysqli_num_rows($res) > 0) {
                        $row = mysqli_fetch_assoc($res);
                        $password = $row['Password'];
                        if ($pass === $cpass) {
                            $sql = "update Passenger SET Password='$pass' WHERE Email='$email'";
                            $result = mysqli_query($conn, $sql);
                            if ($result) {
                                // Password changed successfully message
                                echo "<div class='message'>
                                        <p>Password Changed successfully!</p>
                                      </div><br>";
                            
                                // Display a button to navigate to the login page
                                echo "<a href='LogIn3.php'><button class='btn'>Login Now</button></a>";
                            } else {
                                // Failed to change password message
                                echo "<div class='message'>
                                        <p>Failed to change!</p>
                                      </div><br>";
                            
                                // Display a button to go back to the previous page
                                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
                                }
                        }   
                        } else {
                            // Password does not match message
                            echo "<div class='message'>
                                    <p>Password does not match.</p>
                                  </div><br>";
                        
                            // Display a button to go back to the password change page
                            echo "<a href='newpass1.php'><button class='btn'>Go Back</button></a>";
                        }
                        

                    } else {

                      ?>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="form-group">
                            <label for="password">New Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        
                        <div class="form-group">
                            <label for="password">Confirm New Password:</label>
                            <input type="password" class="form-control" id="password" name="confirmpassword" required>
                        </div>
                        <div class="form-group ttt1">
                        <button type="submit" name="new" class="btn button" >Set Password</button>
                        </div>
                        <div class="form-group ttt1 text-center">
                            <p><i class="fa-solid fa-arrow-left"></i><a class="lin-12"
                                    href="LogIn3.php">&nbsp;&nbsp;Back to
                                    Sign In</a></p>
                        </div>
                    </form>
                </div>
                    <?php
                    }
                    ?>
                        
            </div>
    </section>
</body>

</html>
