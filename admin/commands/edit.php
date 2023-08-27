<?php 
include '../../db/connection.php';

if(!isset($_GET['id'])){
    header("Location: ../index.php");
}
$id = $_GET['id'];
$query = mysqli_query($connection,"SELECT * FROM news WHERE id=$id");
$berita = mysqli_fetch_array($query);

if(isset($_POST['submit'])){
    $judul_berita = $_POST['judul_berita'];
    $description = $_POST['description'];
    $tanggal = $_POST['tanggal'];
    $image = $_FILES['image']['name'];

    if($image != ""){
        $extension_accepted = ['png','jpg','svg','jpeg'];
        $x = explode('.', $image);
        $extension = strtolower(end($x));
        $file_tmp = $_FILES['image']['tmp_name'];
        $rand = rand(1, 999);
        $new_name = $rand . '-' . $image;

        if(in_array($extension, $extension_accepted)){
            move_uploaded_file($file_tmp,'../../public/picture/' . $new_name);
            $query = "UPDATE news SET judul_berita='$judul_berita', tanggal='$tanggal',description='$description', image='$new_name' WHERE id=$id
        ";
        $result = mysqli_query($connection , $query);
            if (!$result) {
                    die("Query gagal: " . mysqli_errno($connection).
                        " - " . mysqli_error($connection));
                } else {
                    header("Location: ./../index.php");
                    }
                }   
        else{
            header("Location:./edit.php");
        }

    }
    else{
        $query = "UPDATE news SET judul_berita='$judul_berita', tanggal='$tanggal',description='$description' WHERE id=$id
        ";
        $result = mysqli_query($connection , $query);
        if (!$result) {
            die("Query gagal: " . mysqli_errno($connection).
                " - " . mysqli_error($connection));
        } else {
            header("Location: ./../index.php");
        }
        
    }
    
 }
 else{
    echo "error";
 }
?>

<!DOCTYPE html>
<html dir="ltr" lang="en">

<head>
    <meta charset="utf-8">
    <title>Admin</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/images/favicon.png">
    <!-- Custom CSS -->
    <link href="../../assets2/css/style.min.css" rel="stylesheet">
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
                    <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                </div>
                </form> -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                <!-- <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                    <span class="nav-link"><?= $user['nama']?></span>
                    </li> -->
                    <!-- <li class="nav-item">
                    <a class="nav-link admin-img"><img width="60px" border-radius="50px" src="../assets/img/<?= $user['foto'] ?>" alt=""></a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="logout.php">Log Out</a>
                    </li>
                </ul> --> 
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
                        <!-- User Profile-->
                        <li class="p-15 m-t-10"><a href="javascript:void(0)"
                                class="btn d-block w-100 create-btn text-white no-block d-flex align-items-center"><i
                                    class="fa fa-plus-square"></i> <span class="hide-menu m-l-5">Edit</span> </a>
                        </li>
                        <li class="sidebar-item">
                            <a class="sidebar-link waves-effect waves-dark sidebar-link"
                                href="" aria-expanded="false">
                                <i class="mdi mdi-view-dashboard"></i><span class="hide-menu">Edit</span></a></li>
                    </ul>
                </nav>
            </div>
        </aside>
        <div class="page-wrapper">
            <div class="page-breadcrumb">
                <div class="row align-items-center">
                    <div class="col-5">
                        <h4 class="page-title">Edit  &mdash; <?= $berita['judul_berita'] ?></h4>
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
                                <form class="form-horizontal form-material mx-2" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label class="col-md-12">Judul</label>
                                        <div class="col-md-12">
                                            <input name="judul_berita" type="text" value="<?= $berita['judul_berita'] ?>" placeholder="judul"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Deskripsi</label>
                                        <div class="col-md-12">
                                            <input name="description" type="text" value="<?= $berita['description'] ?>" placeholder="Deskripsi"
                                                class="form-control form-control-area">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12">Tanggal Post</label>
                                        <div class="col-md-12">
                                            <input name="tanggal" type="date" value="<?= $berita['tgl'] ?>"
                                                class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="formfile" class="col-md-12">image </label>
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
        </div>
    </div>
     <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script>
        feather.replace()
    </script>
    <script src="../../public/assets/js/bootstrap.min.js"></script>
</body>

</html>