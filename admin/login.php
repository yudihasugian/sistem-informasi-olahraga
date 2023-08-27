<?php 
include '../db/connection.php';

$admins = mysqli_query($connection,"SELECT * FROM admin");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <link rel="stylesheet" href="../assets2/css/tema.css">
    <link rel="stylesheet" href="../assets2/css/maicons.css">
    <link rel="stylesheet" href="../assets2/css/bootstrap.css">
    <link rel="stylesheet" href="../assets2/vendor/owl-carousel/css/owl.carousel.css">
</head>
<body>
    
    <header>
        <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">Admin</span></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                    <a class="nav-link" href="../index.php">Home</a>
                    </li>
                    <li class="nav-item">
                    <!-- <a class="nav-link" href="about.php">About Us</a> -->
                    </li>
                    <li class="nav-item">
                    <!-- <a class="nav-link" href="doctors.html">Doctors</a> -->
                    </li>
                    <li class="nav-item">
                    <!-- <a class="nav-link" href="vaccine_location.html">Vaccine Location</a> -->
                    </li>
                    <li class="nav-item">
                    <!-- <a class="nav-link" href="contact.html">Contact</a> -->
                    </li>
                    <li class="nav-item">
                    <!-- <a class="btn btn-primary ml-lg-3" href="#">Login / Register</a> -->
                    </li>
                </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
            </nav>
        </header>
        <!-----------------------Acount page -------------------------->
        <div class="acount-page">
            <div class="container">
                <div class="row">
                    <div class="col-2">
                    <img class="img-circle" src="../image/admin4.png" width="350px"  height="600px" alt="">
                    </div>
                    <div class="col-2">
                        <div class="form-container">
                            <div class="form-btn">
                                <span>Login</span>
                                <hr id="Indicator">
                                <!-- <span onclick="register()">Register </span> -->
                                
                            </div>
                            <form id="LoginForm" action="../auth/commads/login-user.php" method="POST">
                                <input type="text" name="username" placeholder="Username">
                                <input type="password" name="password" placeholder="password">
                                <button type="submit" name="login" class="btn">Login</button>
                                <!-- <a href="">forget password</a> -->
                            </form>
                            <!-- <form id="RegForm" action="auth/commads/register-user.php" method="POST">
                                <input type="text" name="username" placeholder="Username">
                                <input type="Email" name="email" placeholder="Email">
                                <input type="password" name="password" placeholder="password">
                                <button type="submit" name="register" class="btn">Register</button>
                                
                            </form> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>
</html>