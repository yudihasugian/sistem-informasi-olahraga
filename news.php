<?php
include 'db/connection.php';

$pesan = mysqli_query($connection,"SELECT * FROM pesan");
$new = mysqli_query($connection, 'SELECT * FROM  news');
$comen = mysqli_query($connection,"SELECT * FROM comment");
$blog = mysqli_query($connection, 'SELECT * FROM  news ORDER BY id DESC LIMIT 5');
$admins = mysqli_query($connection,"SELECT * FROM admin");
$admin = mysqli_fetch_assoc($admins);
?>
<!DOCTYPE html>
<html lang=en>

    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Sport Information</title>
    <link rel="stylesheet" href="assets2/css/maicons.css">
    <link rel="stylesheet" href="assets2/css/bootstrap.css">
    <link rel="stylesheet" href="assets2/vendor/owl-carousel/css/owl.carousel.css">
    <link rel="stylesheet" href="assets2/css/news.css">
    </head>

    <body>
        <header>
        <div class="main">
        <div class="navbar">
            <div class="icon">
                <h2 class="logo">Informasi Olahraga</h2>
            </div>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li class="dropdown">
                    <a href="javascript:void(0)" class="dropbtn">Olahraga</a>
                        <div class="dropdown-content">
                        <a href="olahraga/permainan.php">Permainan</a>
                        <a href="olahraga/atletic.php">Atletik</a>
                        <a href="olahraga/Senam.php">Senam</a>
                        <a href="olahraga/beladiri.php">Beladiri</a>
                        <a href="olahraga/tradisional.php">Tradisional</a>
                        </div>
                <li><a href="news.php">News</a></li>
                <li><a href="contact.php">Contact Us</a></li>
                </li> 
        </div>
        </header>

          
          <div class="page-section">
            <div class="container">
              <div class="row">
                <div class="col-lg-8">
                  <div class="row">
                    <?php while($berita = mysqli_fetch_assoc($new)) : ?>
                    <div class="col-sm-6 py-3">
                    
                      <div class="card-blog">

                        <div class="header">                      
                          <a href="blog-details.php?id=<?= $berita['id']?>"class="post-thumb">
                            <img src="public/picture/<?=$berita['image']?>" alt="">
                          </a>
                        </div>
                        <div class="body">
                          <h5 class="post-title"><a href="blog-details.php?id=<?= $berita['id']?>"><?= $berita['judul_berita'] ?></a></h5>
                          <div class="site-info">
                            <div class="avatar mr-2">
                              <div class="avatar-img">
                                <img src="<?= $admin['foto'] ?>" alt="">
                              </div>
                              <span><?= $admin['nama'] ?></span>
                            </div>
                            <span class="mai-time"></span><?= $berita['tanggal'] ?>
                          </div>
                        </div>
                      </div>
                    </div><?php endwhile; ?>
       
                    
                  </div> <!-- .row -->
                </div>
                <div class="col-lg-4">
                
        
                    <!-- s<div class="col-lg-4"> -->
          <div class="sidebar">
            <div class="sidebar-block">
            <h3 class="sidebar-title">Berita Terbaru</h3>
            <?php while($blogs = mysqli_fetch_assoc($blog)) : ?>
                <div class="blog-item">
                  <a class="post-thumb" href="blog-details.php?id=<?= $blogs['id']?>">
                  <img src="public/picture/<?=$blogs['image']?>" alt="">
                  </a>
                <div class="content">
                  <h5 class="post-title"><a href="blog-details.php?id=<?= $blogs['id']?>"> <?=$blogs['judul_berita']?></a></h5>
                  <div class="meta">
                      <a href="#"><span class="mai-calendar"></span> <?=$blogs['tanggal']?></a>
                      <a href="#"><span class="mai-person"></span> <?=$admin['nama']?></a>
                      <!-- <a href="#"><span class="mai-chatbubbles"></span> 19</a> -->
                  </div>
                  </div>
                </div><?php endwhile; ?>
              </div>
                  </div>
                </div> 
              </div> <!-- .row -->
            </div> <!-- .container -->
          </div> <!-- .page-section -->
        
          <footer class="page-footer">
            <div class="container">
              <div class="row px-md-3">
                <div class="col-sm-6 col-lg-3 py-3">

        
                  <h5 class="mt-3"></h5>
                  <div class="footer-sosmed mt-3">
                  
                </div>
              </div>
        
              <hr>

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>
</body>
</html>