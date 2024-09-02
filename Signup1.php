<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
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
                    <h2 class="titele-sing">Create An Account</h2>
                    <p class="description-titl">and come fly with us.</p>
                    <form method="post" action="#">
                    <?php

                        session_start();
                        use PHPMailer\PHPMailer\PHPMailer;
                        use PHPMailer\PHPMailer\Exception;

                        // Include PHPMailer autoloader
                        require 'phpmailer/src/Exception.php';
                        require 'phpmailer/src/PHPMailer.php';
                        require 'phpmailer/src/SMTP.php';

                        include "db_connect.php";

                        if (isset($_POST['register'])) {
                          $fname = $_POST['Fname'];
                          $lname = $_POST['Lname'];
                          $phone = $_POST['phone'];
                          $passportno = $_POST['Passport_No'];
                          $email = $_POST['email'];
                          $pass = $_POST['password'];
                          $cpass = $_POST['confirmpassword'];

                            


                          


                          $check = "select * from Passenger where Email='{$email}'";

                          $res = mysqli_query($conn, $check);

                          $passwd = password_hash($pass, PASSWORD_DEFAULT);

                          $key = bin2hex(random_bytes(12));




                          if (mysqli_num_rows($res) > 0) {
                            echo "<div class='message'>
                        <p>This email is used, Try another One Please!</p>
                        </div><br>";

                            echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";


                          } else {

                            if ($pass === $cpass) {

                              $sql = "insert into Passenger(Fname,Lname,Phone,Passport_No,Email,Password) values('$fname','$lname','$phone','$passportno','$email','$passwd')";

                              $result = mysqli_query($conn, $sql);

                              if ($result) {

                                $_SESSION['user'] = $fname;

                                echo "<div class='message'>
                        <p>You are registered successfully!</p>
                        </div><br>";
                        $mail = new PHPMailer(true);

                            // try {
                                // Server settings
                                $mail->isSMTP();
                                $mail->Host = 'smtp.gmail.com';
                                $mail->SMTPAuth = true;
                                $mail->Username = 'airportshennawy@gmail.com';
                                $mail->Password = 'okxfbporgffgfcsz';
                                $mail->SMTPSecure = 'tls'; // Updated to use TLS
                                $mail->Port = 587; // Updated port for TLS

                                // Recipient
                                $mail->setFrom('airportshennawy@gmail.com');
                                $mail->addAddress($email);

                                // Content
                                $mail->isHTML(true);

                                $subject = "Welcome to our family, ".$_SESSION['user']."!";
                                $body = "<strong>THANK YOU FOR CHOOSING US!</strong><br><br>You have successfully created an account, now you can enjoy our services.";

                                $mail->Subject = $subject;
                                $mail->Body = $body;

                                $mail->SMTPDebug = 2; // Enable debugging

                                $mail->send();
            
                                // header("Location: about1.php");
                                // exit();
                            // } 
                            // catch (Exception $e) {
                            //     // header("Location: emailerror.php");
                            //     exit();
                            // }

                                echo "<a href='LogIn3.php'><button class='btn'>Login Now</button></a>";

                              } else {
                                echo "<div class='message'>
                        <p>This email is used, Try another One Please!</p>
                        </div><br>";

                                echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button></a>";
                              }

                            } else {
                              echo "<div class='message'>
                        <p>Password does not match.</p>
                        </div><br>";

                              echo "<a href='Signup1.php'><button class='btn'>Go Back</button></a>";
                            }
                          }
                        } else {
                          

                          ?>
                        <div class="form-group">
                            <label for="Fname">First Name:</label>
                            <input type="text" class="form-control" id="Fname" name="Fname" required>
                        </div>
                        <div class="form-group">
                            <label for="Lname">Last Name:</label>
                            <input type="text" class="form-control" id="Lname" name="Lname" required>
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" id="phone" name="phone" placeholder="01234567891" required>
                        </div>
                        <div class="form-group">
                            <label for="passport_no">Passport Number:</label>
                            <input type="text" class="form-control" id="passno" name="Passport_No" placeholder="A12345678" required>
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required>
                        </div>
                        <div class="form-group">
                            <label for="password">Password:</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="form-group">
                          <label for="confirmpassword">Confirm Password:</label>
                          <input type="password" class="form-control" id="confirmpassword" name="confirmpassword" required>
                        </div>
                        <div class="error-message" id="errorMessage1"></div>
                        <div class="form-group">
                            <button type="submit" name="register" class="btn button" >Sign Up</button>
                        </div>
                        <div class="form-group">
                            <p>Already Have An Account? <a href="LogIn3.php" class="lin-12">Sign In</a></p>
                        </div>
                        
                        
                    </form>
                </div>
                <?php
          }
          ?>
                
            </div>
    </section>
    <!-- <script src="login1.js"></script> -->
</body>

</html>