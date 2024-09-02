<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>

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

    <section id="signin">
      <div class="container">
        <div class="row">
          <!--form div-->
          <div class="col-lg-6">
            <h2 class="titele-sing">Welcome</h2>
            <p class="description-titl">Sign Into Your Account</p>
            <?php
            session_start();
      include "db_connect.php";

      if (isset($_POST['login'])) {
        $email = $_POST['loginemail'];
        $pass = $_POST['loginpassword'];
    
        $sql = "select * from Passenger where Email='$email'";
        $res = mysqli_query($conn, $sql);
    
        if (mysqli_num_rows($res) > 0) {
            // $row = mysqli_fetch_assoc($res);
            // $password = $row['Password'];
            // $decrypt = password_verify($pass, $password);
            $row = mysqli_fetch_assoc($res);
            $password = $row['Password'];
            $decrypt = password_verify($pass, $password);

            

            
            if ($decrypt) {
              $sql = "SELECT Email FROM Passenger WHERE Email = '$email'";
              $result = mysqli_query($conn, $sql);
              $user = mysqli_fetch_array($result, MYSQLI_ASSOC);

              $_SESSION['old_user'] = $email;
  
            //     // Set a cookie for the email address if "Remember me" is checked
            //     if (isset($_POST['remember_me']) && $_POST['remember_me'] == 'on') {
            //         setcookie('remembered_email', $email, time() + (86400 * 30), "/"); // Cookie expires in 30 days
            //     }
    
            //     // $_SESSION['id'] = $row['id'];
            //     $_SESSION['remembered_email'] = $row['Email'];
                header("location: flights1.php");
            } else {
                // Wrong Password
                echo "<div class='message'>
                        <p>Wrong Password</p>
                      </div><br>";
                
            }
        } else {
            // Wrong Email or Password
            echo "<div class='message'>
                    <p>Wrong Email or Password</p>
                  </div><br>";
            
        }
    } else {
        // ... (rest of your existing code for the login form)
    }
        ?>
        <form method="post" action="#">
              <div class="form-group">
                <label for="loginemail">Email:</label>
                <input
                  type="email"
                  class="form-control"
                  id="loginemail"
                  name="loginemail"
                  required
                />
              </div>
              <div class="form-group ttt1">
                <label for="loginpassword">Password:</label>
                <input
                  type="password"
                  class="form-control"
                  id="loginpassword"
                  name="loginpassword"
                  required
                />
              </div>

              <div class="myTest custom-control custom-checkbox">
                <input
                  type="checkbox"
                  class="custom-control-input"
                  id="customCheck1"
                  name="remember_me"
                />
                <label class="custom-control-label" for="remember"
                  >Remember Me</label
                >
              </div>
              <div class="error-message" id="errorMessage"></div>
              
              <div class="form-group ttt1">
                <button type="submit" class="btn button" name="login">
                  Sign In
                </button>
              </div>
              <div class="form-group ttt1">
                <p>
                  Don't have an account ?
                  <a href="Signup1.php" class="lin-12">Sign Up</a>
                </p>
              </div>
              <div class="form-group ttt1">
                <p>
                  Forget password ?
                  <a href="newpass1.php" class="lin-12">Reset Password</a>
                </p>
              </div>
            </form>
          </div>
          <?php
      
      ?>
        </div>
      </div>
    </section>
    <!-- <script src="login1.js"></script> -->
  </body>
</html>