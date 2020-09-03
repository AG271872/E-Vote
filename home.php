<!DOCTYPE html>
<html>

  <head>
    <meta charset="utf-8">
    <title>Home</title>
    <link rel="icon" href="images/favicon1.ico">


    <!--This link is for Google fonts family of web page-->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Ubuntu:wght@700&display=swap" rel="stylesheet">

    <!--This link is for providing functionality CSS stylesheet in web page-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    
    <link rel="stylesheet" href="css/styles.css">
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
              <a class="nav-link" href="#">Home</a>
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
  
    <!-- Title -->

    <section id="title-home">
      <div class="container-fluid">

        <div class="row">

          <div class="col-lg-6">
            <br><br>
            <h1 class="home-heading">Be bright, Vote for what is right! Each vote matters.</h1>
          </div>

          <div class="col-lg-6">  
            <br><br><br>
            <img class="home-image img-fluid" src="images/home/main.jfif">
            <br><br>
          </div>

        </div>
        <br><br>
      </div>
    </section>
    <br><br>
            
    <!-- Slider -->

    <section id="slider">
      <div class="container-fluid">
        <div id="slider-carousel" class="carousel slide" data-ride="false">
          <div class="carousel-inner">

            <div class="carousel-item active">
              <h2>One election is not going to change everything... But what it does mean is things start getting better. And better is really important.</h2>
              <img class="slider-image" src="images/home/slider/Obama.jpg">
              <em>Barack Obama</em>
            </div>

            <div class="carousel-item">
              <h2 class="slider-text">Voting is the most precious right of every citizen and we have a normal obligation to ensure the integrity of our voting process.</h2>
              <img class="slider-image" src="images/home/slider/hillary.jpg">
              <em>Hillary Clinton</em>
            </div>

            <div class="carousel-item">
              <h2 class="slider-text">A man without a vote is a man without protection.</h2>
              <img class="slider-image" src="images/home/slider/lyndon.jpg" height="100" width="100">
              <em>L. B. Johnson</em>
            </div>

          </div>

          <a class="carousel-control-prev" href="#slider-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          </a>

          <a class="carousel-control-next" href="#slider-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
          </a>

        </div>
      </div>
    </section>

    <!-- Leaders -->

    <section id="leaders">

      <p><img class="vote-img mx-auto d-block img-fluid" src="images/home/vote.png" width="200" height="250"></p>
      
      <div class="card-deck">

        <div class="leaders-column col-lg-4 col-md-6">

          <div class="card">
            <div class="card-header">
              <h3 style="color: orange">BJP</h3>
            </div>
            
            <div class="card-body">
              <img src="images/home/leaders/BJP.jfif" class="img-fluid" width="270" height="200">
              <br><br>
              <button class="btn btn-lg btn-block btn-dark" type="button"><a href="vote_now.php">Vote Now</a></button>
            </div>
      
          </div>

        </div>
        
        <div class="leaders-column col-lg-4 col-md-6">
          <div class="card">
            <div class="card-header">
              <h3 style="color: #00e600">Congress</h3>
            </div>
            
            <div class="card-body">
              <img src="images/home/leaders/Congress.jfif" class="img-fluid" width="270" height="200">
              <br><br>
              <button class="btn btn-lg btn-block btn-dark" type="button"><a href="vote_now.php">Vote Now</a></button>
            </div>

          </div>
    
        </div>
        
        <div class="leaders-column col-lg-4">

          <div class="card">
            <div class="card-header">
              <h3 style="color: blue">AAP</h3>      
            </div>
            
            <div class="card-body">
              <img src="images/home/leaders/AAP.jfif" class="img-fluid" width="270" height="200">
              <br><br>
              <button class="btn btn-lg btn-block btn-dark" type="button"><a href="vote_now.php">Vote Now</a></button>
            </div>

          </div>

        </div>
        
      </div>
    </section>

    <!-- Footer -->

    <footer id="footer">

      <a href="https://www.facebook.com/profile.php?id=100009344712019"><i class="social-icon fab fa-facebook-square fa-3x"></i></a>
      <a href="https://www.linkedin.com/in/arpita-gupta-3b3852196"><i class="social-icon fab fa-linkedin fa-3x"></i></a>
      <a href="https://www.instagram.com/arpitagupta43/"><i class="social-icon fab fa-instagram fa-3x"></i></a>
      <div style="text-align:center"> © Copyright 2020 E-Vote</div>

    </footer>

  </body>
</html>
