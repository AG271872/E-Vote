<?php

require_once "config.php";
session_start();
$uid=$_SESSION['id'];

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true){
    header("location: login.php");
}

?>

<!doctype html>
<html>
    <head>

        <title>Vote Now</title>
        <link rel="icon" href="images/favicon1.ico">

        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


        <!--This link is for Google fonts family of web page-->
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@600&family=Ubuntu:wght@700&display=swap" rel="stylesheet">


        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        
        <link rel="stylesheet" href="CSS/styles.css">
        <link rel="stylesheet" href="CSS/style1.css">

        <script src="https://kit.fontawesome.com/6c01e4462a.js" crossorigin="anonymous"></script>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

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
                            <a class="nav-link" href="#">Vote Now</a>
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
            <hr>
        </section>

        <div class="container">
            <marquee>            
                <h3><?php echo "Welcome ". $_SESSION['username']?></h3>
                <hr>
            </marquee>
        </div>
        
        <?php
            
            if(isset($_POST['BJP'])){
                $sql=mysqli_query($conn,"select cast_vote from users where id='$uid'") or die('ERROR'.mysqli_error($conn));
                $rs=mysqli_fetch_array($sql);
                $vote=$rs[0];
        
			    if($vote == 0){	
                    $sql=mysqli_query($conn,"update votes set BJP = BJP + 1") or die('Error'.mysqli_error($conn));
                    $sql1=mysqli_query($conn,"update users set cast_vote='1' where id='$uid'");
                    echo"
                        <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Thanks For Voting.Your Vote is precious to us.</h4></strong> 
                        </div>
                    ";
                }
                else{
                    echo"
                        <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Vote already casted.</h4></strong> 
                        </div>
                    ";
                }
            }
        
            if(isset($_POST['Congress'])){
                $sql=mysqli_query($conn,"select cast_vote from users where id='$uid'") or die('ERROR'.mysqli_error($conn));
                $rs=mysqli_fetch_array($sql);
                $vote=$rs[0];
        
			    if($vote == 0){	
                    $sql=mysqli_query($conn,"update votes set Congress = Congress + 1") or die('Error'.mysqli_error($conn));
                    $sql1=mysqli_query($conn,"update users set cast_vote='1' where id='$uid'");
                    echo"
                        <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Thanks For Voting.Your Vote is precious to us.</h4></strong> 
                        </div>
                    ";
                }
                else{
                    echo"
                        <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Vote already casted.</h4></strong> 
                        </div>
                    ";
                }
            }
    
            if(isset($_POST['AAP'])){
                $sql=mysqli_query($conn,"select cast_vote from users where id='$uid'") or die('ERROR'.mysqli_error($conn));
                $rs=mysqli_fetch_array($sql);
                $vote=$rs[0];
        
			    if($vote == 0){	
                    $sql=mysqli_query($conn,"update votes set AAP = AAP + 1") or die('Error'.mysqli_error($conn));
                    $sql1=mysqli_query($conn,"update users set cast_vote='1' where id='$uid'");
                    echo"
                        <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Thanks For Voting.Your Vote is precious to us.</h4></strong> 
                        </div>
                    ";
                }
                else{
                    echo"
                        <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Vote already casted.</h4></strong> 
                        </div>
                    ";
                }
            }

            if(isset($_POST['Nirdaliya'])){
                $sql=mysqli_query($conn,"select cast_vote from users where id='$uid'") or die('ERROR'.mysqli_error($conn));
                $rs=mysqli_fetch_array($sql);
                $vote=$rs[0];
        
			    if($vote == 0){	
                    $sql=mysqli_query($conn,"update votes set Nirdaliya = Nirdaliya + 1") or die('Error'.mysqli_error($conn));
                    $sql1=mysqli_query($conn,"update users set cast_vote='1' where id='$uid'");
                    echo"
                        <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Thanks For Voting.Your Vote is precious to us.</h4></strong> 
                        </div>
                    ";
                }
                else{
                    echo"
                        <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Vote already casted.</h4></strong> 
                        </div>
                    ";
                }
            }
    
            if(isset($_POST['NOTA'])){
                $sql=mysqli_query($conn,"select cast_vote from users where id='$uid'") or die('ERROR'.mysqli_error($conn));
                $rs=mysqli_fetch_array($sql);
                $vote=$rs[0];
        
			    if($vote == 0){	
                    $sql=mysqli_query($conn,"update votes set NOTA = NOTA + 1") or die('Error'.mysqli_error($conn));
                    $sql1=mysqli_query($conn,"update users set cast_vote='1' where id='$uid'");
                    echo"
                        <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Thanks For Voting.Your Vote is precious to us.</h4></strong> 
                        </div>
                    ";
                }
                else{
                    echo"
                        <div style='background-color: #ebccff; margin-left:30%; margin-right:30%' class='alert alert-dark alert-dismissible fade show'>
                            <button type='button' class='close' data-dismiss='alert'>&times;</button>
                            <strong><h4 style='text-align: center; color: red;'>&nbsp;&nbsp; Vote already casted.</h4></strong> 
                        </div>
                    ";
                }
            } 
        ?>

        <br><br>
        
        <div class="container">
            <h1 class="main-heading">Cast Your Vote</h1>
            <br>

            <form action="vote_now.php" method="post">
                
                <div class="container party-table">
                
                    <table class="table">
            
                        <tbody>
                            <tr>
                                <td>
                                    <img style="border-radius: 100%;" src="images/Parties Logo/BJP.jfif" width="80" height="80">
                                </td>
                            
                                <td>
                                    <br>
                                    <h4><input class="vote-btn" type="submit" name="BJP" value="Vote for BJP" style="background-color:orange;"></h4>
                                </td>
                            
                            </tr>
                        
                            <tr>
                                <td>
                                    <img style="border-radius: 100%;" src="images/Parties Logo/Congress.jfif" width="80" height="80">
                                </td>

                                <td>
                                    <br>
                                    <h4><input class="vote-btn" type="submit" name="Congress" value="Vote for Congress" style="background-color:#00e600"></h4>                      </td>
                                </td>
                            </tr>
                        
                            <tr>
                                <td>
                                    <img style="border-radius: 100%;" src="images/Parties Logo/AAP.jfif" width="80" height="80">
                                </td>

                                <td>
                                    <br>
                                    <h4><input class="vote-btn" type="submit" name="AAP" value="Vote for AAP" style="background-color:blue"></h4>
                                </td>
                            
                            </tr>

                            <tr>
                                <td>
                                    <img style="border-radius: 100%;" src="images/Parties Logo/Nirdaliya.jfif" width="80" height="80">
                                </td>

                                <td>
                                    <br>
                                    <h4><input class="vote-btn" type="submit" name="Nirdaliya" value="Vote for Nirdaliya" style="background-color:#03b6fc"></h4>
                                </td>
                            
                            </tr>

                            <tr>
                                <td>
                                    <img style="border-radius: 100%;" src="images/Parties Logo/Nota.jfif" width="80" height="80">
                                </td>

                                <td>
                                    <br>
                                    <h4><input class="vote-btn" type="submit" name="NOTA" value="Vote for NOTA" style="background-color:#888b8c"></h4>            
                                </td>
                            
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
            
        </div>
        <br><br><br><br>

        <?php
        
        echo "
           
            <div class='contact-me' style='text-align:center'>
                <a class='testbutton' href='view_result.php?results'>&nbsp&nbsp View Result &nbsp&nbsp</a>
                <br>
            </div>";
        ?>

        <br><br><br><br>
        <!-- Footer -->

        <footer id="footer">

            <a href="https://www.facebook.com/profile.php?id=100009344712019"><i class="social-icon fab fa-facebook-square fa-3x"></i></a>
            <a href="https://www.linkedin.com/in/arpita-gupta-3b3852196"><i class="social-icon fab fa-linkedin fa-3x"></i></a>
            <a href="https://www.instagram.com/arpitagupta43/"><i class="social-icon fab fa-instagram fa-3x"></i></a>
            <div style="text-align:center"> © Copyright 2020 E-Vote</div>

        </footer>
        
    </body>
</html>