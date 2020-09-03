<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Login</title>
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
        //This script will handle login
        session_start();

        // check if the user is already logged in
        if(isset($_SESSION['username']))
        {
            header("location: vote_now.php");
            exit;
        }
        require_once "config.php";

        $username = $password = "";
        $err = "";

        // if request method is post
        if ($_SERVER['REQUEST_METHOD'] == "POST"){
            if(empty(trim($_POST['username'])) || empty(trim($_POST['password']))){
                $err = "Please enter username + password";
            }
            else{
                $username = trim($_POST['username']);
                $password = trim($_POST['password']);
            }

            if(empty($err)){
                $sql = "SELECT id, username, password FROM users WHERE username = ?";
                $stmt = mysqli_prepare($conn, $sql);
                mysqli_stmt_bind_param($stmt, "s", $param_username);
                $param_username = $username;
                
                
                // Try to execute this statement
                if(mysqli_stmt_execute($stmt)){
                    mysqli_stmt_store_result($stmt);
                    if(mysqli_stmt_num_rows($stmt) == 1){
                        mysqli_stmt_bind_result($stmt, $id, $username, $hashed_password);
                        if(mysqli_stmt_fetch($stmt))
                        {
                            if(password_verify($password, $hashed_password)){
                                // this means the password is corrct. Allow user to login
                                //session_start();
                                $_SESSION["username"] = $username;
                                $_SESSION["id"] = $id;
                                $_SESSION["loggedin"] = true;
                                //Redirect user to vote_now page
                                header("location: vote_now.php");
                            }
                            else{
                                echo"
                                    <br>
                                    <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                                        <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                        <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Please enter valid UserName and Password. If you have not registered then click on New User.</h4></strong> 
                                    </div>
                                ";
                            }
                        }
                    }
                    else{
                        echo"
                            <br>
                            <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                                <button type='button' class='close' data-dismiss='alert'>&times;</button>
                                <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Please enter valid UserName and Password. If you have not registered then click on New User..</h4></strong> 
                            </div>
                        ";
                    }
                }
            } 
        }
        
        ?>

    <div class="modal-dialog text-center">
            <div class="col-sm-8 main-section">
                <div class="modal-content">
                    <div class="col-12 user-img">
                        <img src="images\login.png">
                    </div>

                    <div class="col-12 user-name">
                        <h2 style="color:white;">User Login</h2>
                    </div>

                    <div class="col-12 form-input">

                        <form action="login.php" method="post">

                            <div class="form-group">
                                <input type="text" class="form-control" name="username" placeholder="UserName" required>
                            </div>
    
                            <div class="form-group">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
    
                            <button type="submit" class="btn btn-success" name="login_user">Login</button>
                        </form>
                    </div>
                     
                    <div class="col-12 link-part">
                        <a href="register.php"><b>New User?</b></a>
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




