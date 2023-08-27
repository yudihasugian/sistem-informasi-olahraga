<?php 
include '../db/connection.php';

$berita = mysqli_query($connection,"SELECT * FROM news");
$admins = mysqli_query($connection,"SELECT * FROM admin");
$admin = mysqli_fetch_assoc($admins);
session_start();
if($_SESSION['data']==""){
    header("location:login.php");
}
?>  
<html lang="en">

<head>
    <meta charset="utf-8">
    <link href="../assets2/css/style.min.css" rel="stylesheet">

    <title>Admin</title>
</head>

<body>
    <div id="main-wrapper" data-layout="vertical" data-navbarbg="skin5" data-sidebartype="full"
        data-sidebar-position="absolute" data-header-position="absolute" data-boxed-layout="full">
        <header class="topbar" data-navbarbg="skin5">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
            <div class="container">
                <a class="navbar-brand" href="#"><span class="text-primary">Admin</span></a>

                <!-- <form action="#">
                <div class="input-group input-navbar">
                    <div class="input-group-prepend">
                    <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                    </div>
                    <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="adminname" aria-describedby="icon-addon1">
                </div>
                </form> -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <span class="nav-link"><?= $admin['nama']?></span>
                    </li>
                    <!-- <li class="nav-item">
                    <a class="nav-link admin-img"><img width="60px" border-radius="50px" src="../assets/img/<?= $admin['foto'] ?>" alt=""></a>
                    </li> -->
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
            </nav>
        </header>
        <aside class="left-sidebar" data-sidebarbg="skin6">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <!-- admin Profile-->
                        <!-- <li class="p-15 m-t-10"><a href="javascript:void(0)"
                                class="btn d-block w-100 create-btn text-white no-block d-flex align-items-center"><i
                                    class="fa fa-plus-square"></i> 
                                    <span class="hide-menu m-l-5"></span> </a>
                        </li> -->
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="./index.php" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Admin</span></a></li>
                        <li class="sidebar-item"> 
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="./message.php" aria-expanded="false">
                                <i class="mdi mdi-account-network"></i><span class="hide-menu">Comment</span></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside> 
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Create Data</h4>
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                             <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material mx-2" action="./commands/add_visit.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Judul</label>
                                        <div class="col-md-12">
                                            <input name="judul_berita" type="text" placeholder="Judul"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-check form-check-inline">
                                    <div class="form-group">
                                        <label class="col-md-12">Deskripsi</label>
                                        <div class="col-md-12">
                                            <textarea name="description" type="text" placeholder="Deskripsi"
                                                class="form-control form-control-area" aria-label="With textarea"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tanggal Post</label>
                                        <div class="col-md-12">
                                            <input name="tanggal" type="date" placeholder="Tanggal Post"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="formfile" class="col-md-12">Gambar </label>
                                        <div class="form-label col-md-12">
                                            <div class="mb-3">
                                                  <input name="image" class="form-control" type="file" id="formFile">
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
            <div class="col-lg-12 col-md-7">
                    <div class="card">
                    <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th>Judul</th>
                                            <th>Gambar</th>
                                            <th>Waktu Post</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    
                                    <tbody class="align-middle"> 
                                    <?php while($new = mysqli_fetch_assoc($berita)) :?>  
                                        <tr>
                                            <td>
                                                <p><?= $new['judul_berita']?></p>
                                            </td>
                                            <td><img src="../public/picture/<?= $new['image'] ?>"
                                             width="50" /></td>
                                             <td>
                                                <p><?= $new['tanggal']?></p>
                                            </td>
                                            <td>
                                            <a href="./commands/edit.php?id=<?= $new['id'] ?>" class="btn btn-outline-success">Edit</a>
                                            <a href="./commands/delete.php?id=<?= $new['id']?>"class="btn btn-outline-success">Delete</a>
                                            </td>
                                    
                                        </tr>
                                    <?php endwhile; ?>
                                    </tbody>
                                </table>
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