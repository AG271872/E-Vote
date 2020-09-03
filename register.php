<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>Registration</title>
        <link rel="icon" href="images/favicon1.ico">


        <!--This link is for Google fonts family of web page-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

        <!--This link is for providing functionality CSS stylesheet in web page-->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

        <link rel="stylesheet" href="CSS/styles.css">
        <link rel="stylesheet" href="CSS/style1.css">


        <script src="https://kit.fontawesome.com/6c01e4462a.js" crossorigin="anonymous"></script>

        <!--This link is for providing functionality of Bootstrap script of JS in web page-->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    </head>

    <body>

        <!-- Nav Bar -->

        <section id="title">

            <nav class="navbar navbar-expand-lg navbar-dark">

                <a class="navbar-brand" href="about.php"> <img src="images/logo.jfif" width="90" height="70">&nbsp E-Vote </a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="home.php">Home</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="vote_now.php">Vote Now</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="view_result.php?results">View Result</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="about.php">About Us</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="login.php">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </section>

        <?php
        require_once "config.php";

        $username = $password = $confirm_password = $email = $mobile = "";
        $username_err = $password_err = $confirm_password_err = $email_err = $mobile_err = "";

        if ($_SERVER['REQUEST_METHOD'] == "POST") {

            // Check if username is empty

            if (empty(trim($_POST["username"]))) {
                $username_err = "Username cannot be blank";
            } 
            else {
                $sql = "SELECT id FROM users WHERE username = ?";
                $stmt = mysqli_prepare($conn, $sql);
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "s", $param_username);

                    // Set the value of param username

                    $param_username = trim($_POST['username']);

                    // Try to execute this statement

                    if (mysqli_stmt_execute($stmt)) {
                        mysqli_stmt_store_result($stmt);
                        if (mysqli_stmt_num_rows($stmt) == 1) {
                            $username_err = "This username is already taken";
                            echo"
                                <br>
                                <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                    <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; This username is already taken.</h4></strong> 
                                </div>
                            ";
                        } 
                        else {
                            $username = trim($_POST['username']);
                        }
                    }
                    else {
                        echo "Something went wrong";
                    }
                }
            }

            mysqli_stmt_close($stmt);

            // Check if email is empty

            if (empty(trim($_POST["email"]))) {
                $email_err = "Email cannot be blank";
            } 
            else {
                $sql = "SELECT id FROM users WHERE email = ?";
                $stmt = mysqli_prepare($conn, $sql);
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "s", $param_email);

                    // Set the value of param username

                    $param_email = trim($_POST['email']);

                    // Try to execute this statement

                    if (mysqli_stmt_execute($stmt)) {
                        mysqli_stmt_store_result($stmt);
                        if (mysqli_stmt_num_rows($stmt) == 1) {
                            $email_err = "This email is already taken";
                            echo"
                                <br>
                                <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                    <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; This email is already taken.</h4></strong> 
                                </div>
                            ";
                        } 
                        else {
                            $email = trim($_POST['email']);
                        }
                    }
                    else {
                        echo "Something went wrong";
                    }
                }
            }

            mysqli_stmt_close($stmt);

            // Check for password

            if (empty(trim($_POST['password']))) {
                $password_err = "Password cannot be blank";
            } 
            elseif (strlen(trim($_POST['password'])) < 5) {
                $password_err = "Password cannot be less than 5 characters";

                echo"
                <br>
                <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Password should not be less than 5 characters.</h4></strong> 
                </div>
            ";
            } 
            else {
                $password = trim($_POST['password']);
            }

            // Check for confirm password field.

            if (trim($_POST['password']) !=  trim($_POST['confirm_password'])) {
                $password_err = "Passwords should match";
                echo"
                    <br>
                    <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                        <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Password does not match.</h4></strong> 
                    </div>
                ";
            }

            //Check For Mobile Number.

            if (empty(trim($_POST['mobile']))) {
                $mobile_err = "Mobile cannot be blank";
            } 
            elseif (strlen(trim($_POST['mobile'])) != 10) {
                $mobile_err = "Mobile number must be of 10 digits";

                echo"
                <br>
                <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                    <button type='button' class='close' data-dismiss='alert'>&times;</button>
                    <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Mobile number must be of 10 digits.</h4></strong> 
                </div>
            ";
            } 
            else {
                $mobile = trim($_POST['mobile']);
            }

            //$email = $_POST['email'];
            //$mobile = $_POST['mobile'];
            $gender = $_POST['gender'];

            // If there were no errors, go ahead and insert into the database
            
            if (empty($username_err) && empty($password_err) && empty($confirm_password_err) && empty($email_err) && empty($mobile_err)) {
                $sql = "INSERT INTO users (username, email,password,mobile,gender) VALUES (?, ?, ?, ?, ?)";
                $stmt = mysqli_prepare($conn, $sql);
                if ($stmt) {
                    mysqli_stmt_bind_param($stmt, "sssis", $param_username, $param_email, $param_password, $mobile, $gender);

                    // Set these parameters
                    $param_username = $username;
                    $param_password = password_hash($password, PASSWORD_DEFAULT);
                    $param_email = $email;

                    // Try to execute the query
                    if (mysqli_stmt_execute($stmt)) {
                        header("location: login.php");
                    } 
                    else {
                        echo "Something went wrong... cannot redirect!";
                    }
                }
                mysqli_stmt_close($stmt);
            }
            mysqli_close($conn);
        }
        ?>

        <div class="modal-dialog text-center">
            <div class="col-sm-8 main-section">
                <div class="modal-content">
                    <div class="col-12 user-img">
                        <img src="images\login.png">
                    </div>

                    <div class="col-12 user-name">
                        <h2 style="color:white">User Registration</h2>
                    </div>

                    <div class="col-12 form-input">

                        <form action="register.php" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="username" value="" id="name" placeholder="UserName" required>
                            </div>

                            <div class="form-group">
                                <input type="email" class="form-control" name="email" value="" id="email" placeholder="Email" required>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
                            </div>

                            <div class="form-group">
                                <input type="password" class="form-control" name="confirm_password" id="cpassword" placeholder="Confirm Password" required>
                            </div>

                            <div class="form-group">
                                <input type="text" class="form-control" name="mobile" placeholder="Mobile Number" required>
                            </div>

                            <div class="radios" style="line-height: 1">
                                <br>
                                <div>&nbsp&nbspGender:
                                    <input type="radio" name="gender" value="Male">
                                    <label for="">Male</label>
                                    <input type="radio" name="gender" value="Female">
                                    <label for="">Female</label>
                                </div>
                            </div>
                            <br>
                            <button type="submit" class="btn btn-success" name="reg_user" id="btnsub" value="Submit">Register</button>
                        </form>
                    </div>

                    <div class="col-12 link-part">
                        <a href="login.php"><b>Existing User?</b></a>
                    </div>
                </div>
            </div>
        </div>

        <br><br>
        <br><br>
        <!-- Footer -->

        <footer id="footer">

            <a href="https://www.facebook.com/profile.php?id=100009344712019"><i class="social-icon fab fa-facebook-square fa-3x"></i></a>
            <a href="https://www.linkedin.com/in/arpita-gupta-3b3852196"><i class="social-icon fab fa-linkedin fa-3x"></i></a>
            <a href="https://www.instagram.com/arpitagupta43/"><i class="social-icon fab fa-instagram fa-3x"></i></a>
            <div style="text-align:center"> © Copyright 2020 E-Vote</div>

        </footer>

    </body>
</html>