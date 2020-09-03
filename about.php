<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8">
        <title>About Us</title>
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

        <br>
        <h1 class="main-heading"> About e-Vote </h1>
        <br>       
        <div class="container-fluid about-us">
            <div class="row">
                <div class="col-lg-6">
                    <div>
                        <br>
                        <img src="images\about.jfif" class="img-fluid" width="500%" height="600%";>
                    </div>
                </div>
                    
                <div class="col-lg-6">
                    <br>
                    <p>
                    E-Vote is an electronic system that allows voters to cast their votes for different 
                    candidates. In this voting system, voters can vote for the candidates of their choice 
                    with a digital aid. In this voting system, users have to login firstly with their 
                    username and password. In case user is not registered, he have to register to be a 
                    valid voter. Then after logging in, he/she shall be able to cast his/her vote for 
                    respective candidates. Apart from casting votes, users can also see live results of 
                    the election after polling.
                    </p>
                    <p>
                    
                    E-Vote is a secure and user-friendly system of voting. Our site allows the voting for the
                    candidates with ease. E-Vote maintains the system of secret ballot, where the voters can 
                    maintain their privacy of voting. Every voter is allowed only to vote one time only. After
                    casting of vote, the choice can neither be changed, nor taken back. It ensures a fair voting
                    sytem for both - voters and candidates.     
                    </p>
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