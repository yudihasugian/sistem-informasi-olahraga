<?php 
include '../DB/connection.php';

$pays = mysqli_query($connection,"SELECT * FROM user");
?>
  
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="../public/assets/css/style.min.css" rel="stylesheet">
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">

        <header class="topbar" data-navbarbg="skin5">
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="../index.php" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Home</span>
                            </a>
                            </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="./register.php" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Register</span>
                            </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="./login.php" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Login</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside> 
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Register</h4>
                        <div class="d-flex align-items-center">
                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container-fluid">
                    <div class="alert container-fluid">
                        <?php
                        if(isset($_GET['message'])){
                            if($_GET["message"] == 1){
                                echo "
                                <div class='alert alert-danger' role='alert'>
                                    Email sudah pernah digunakan.
                                </div>
                            ";
                            }elseif($_GET["message"] == 2){
                                echo "
                                <div class='alert alert-success' role='alert'>
                                    Berhasil!!!
                                </div>
                            ";
                            }elseif($_GET["message"] == 3){
                                echo "
                                <div class='alert alert-danger' role='alert'>
                                    Ekstensi photo tidak diperbolehkan.
                                </div>
                            ";
                            }
                        }
                        ?>
                    </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                             <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" action="./commads/register-user.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input required="email" name="email" type="email" placeholder="Email Address"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Password</label>
                                        <div class="col-md-12">
                                            <input required="password" name="password" type="password" placeholder="Password"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Nama</label>
                                        <div class="col-md-12">
                                            <input required="text" name="nama" type="text" placeholder="Nama"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="formfile" class="col-md-12">Photo </label>
                                        <div class="form-label col-md-12">
                                            <div class="mb-3">
                                                  <input name="photo" class="form-control" type="file" id="formFile">
                                                </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button name="submit" class="btn btn-success text-white">Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>