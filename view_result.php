<?php
require_once "config.php";
?>

<!doctype html>
<html>

    <head>

        <title>View Result</title>
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
            <hr>
        </section>
        <br><br>

    <?php

    if (isset($_GET['results'])) {
        $get_votes = "select * from votes";
        $run_votes = mysqli_query($conn, $get_votes);
        $row_votes = mysqli_fetch_array($run_votes);

        $BJP = $row_votes['BJP'];
        $Congress = $row_votes['Congress'];
        $AAP = $row_votes['AAP'];
        $Nirdaliya = $row_votes['Nirdaliya'];
        $NOTA = $row_votes['NOTA'];

        $count = $BJP + $Congress + $AAP + $Nirdaliya + $NOTA;

        $per_BJP = round($BJP * 100 / $count) . "%";
        $per_Congress = round($Congress * 100 / $count) . "%";
        $per_AAP = round($AAP * 100 / $count) . "%";
        $per_Nirdaliya = round($Nirdaliya * 100 / $count) . "%";
        $per_NOTA = round($NOTA * 100 / $count) . "%";

        echo "
            
            <div style='padding: 10px; text-align:center;'>

                <center>
                    <h1 class='main-heading'>Result</h1>
                    <br><br>

                    <h4 style='background-color:orange; color:white; padding: 10px; width:400px;'>

                        <b>BJP:</b>  $BJP  ($per_BJP)
                    </h4>
                    <br>

                    <h4 style='background-color:#00e600; color:white; padding: 10px; width:400px;'>

                        <b>Congress:</b>  $Congress   ($per_Congress)
                    </h4>
                    <br>

                    <h4 style='background-color:blue; color:white; padding: 10px; width:400px;'>

                        <b>AAP:</b>  $AAP   ($per_AAP)
                    </h4>
                    <br>

                    <h4 style='background-color:#03b6fc; color:white; padding: 10px; width:400px;'>

                        <b>Nirdaliya:</b>  $Nirdaliya  ($per_Nirdaliya)
                    </h4>
                    <br>

                    <h4 style='background-color:#888b8c; color:white; padding: 10px; width:400px;'>

                        <b>NOTA:</b>  $NOTA   ($per_NOTA)
                    </h4>
                    <br>

                </center>
            </div>";
        }
        
        ?>
        <br><br><br>
        <!-- Footer -->

        <footer id="footer">

            <a href="https://www.facebook.com/profile.php?id=100009344712019"><i class="social-icon fab fa-facebook-square fa-3x"></i></a>
            <a href="https://www.linkedin.com/in/arpita-gupta-3b3852196"><i class="social-icon fab fa-linkedin fa-3x"></i></a>
            <a href="https://www.instagram.com/arpitagupta43/"><i class="social-icon fab fa-instagram fa-3x"></i></a>
            <div style="text-align:center"> © Copyright 2020 E-Vote</div>

        </footer>

    </body>
</html>