<?php
include ('db/connection.php');

session_start();
$id = $_GET['id'];
$berita = mysqli_query($connection, "SELECT * FROM  news WHERE id='$id'");
$comen = mysqli_query($connection,"SELECT * FROM comment");
$sport = mysqli_fetch_array($berita);
$blog = mysqli_query($connection, 'SELECT * FROM  news ORDER BY id DESC LIMIT 5');
$admins = mysqli_query($connection,"SELECT * FROM admin");
$admin = mysqli_fetch_assoc($admins);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Details</title>
  <link rel="stylesheet" href="assets2/css/maicons.css">
  <link rel="stylesheet" href="assets2/css/bootstrap.css">
  <link rel="stylesheet" href="assets2/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="assets2/css/blog.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

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

  <div class="page-section pt-5">
    <div class="container">
      <div class="row">
        <div class="col-lg-8">
          <nav aria-label="Breadcrumb">
            <ol class="breadcrumb bg-transparent py-0 mb-5">
            </ol>
          </nav>
        </div>
      </div> <!-- .row -->

      <div class="row">
        <div class="col-lg-8">
          <article class="blog-details">
            <div class="post-thumb">
              <img src="public/picture/<?=$sport['image']?>" alt="">
            </div>
            <div class="post-meta">
              <div class="post-author">
                <span class="text-grey">By</span> <a><?=$admin['nama']?></a>  
              </div>
              <span class="divider">|</span>
              <div class="post-date">
                <a href="#"><?= $sport['tanggal'] ?></a>
              </div>
              <span class="divider">|</span>
              <div>
                <a href="#">Olahraga Humbahas</a> <a href="#"></a> <a href="#"></a>  
              </div>
              <!-- <span class="divider">|</span>
              <div class="post-comment-count">
                <a href="#">0 Comments</a>
              </div> -->
            </div>
            <h2 class="post-title h1"><?=$sport['judul_berita']?></h2>
            <div class="post-content">
              <!-- <h6>Jl. Jamin Ginting No.31, Padang Bulan, Kec. Medan Baru, Kota Medan, Sumatera Utara 20157</h6> -->
              <p><?=$sport['description']?></p>

              <p></p>
            </div>
          
            
          </article> <!-- .blog-details -->
          <div class="comment-form-wrap pt-5">
            <h3 class="mb-5">Leave a comment</h3>
            <form action="admin/commands/add_pesan.php" method="POST" enctype="multipart/form-data" class="">
              <div class="form-row form-group">
                <div class="col-md-6">
                  <label for="name">Name *</label>
                  <input type="text" name="nama" class="form-control" id="name">
                </div>
                <div class="col-md-6">
                  <label for="email">Email *</label>
                  <input type="email" name="email" class="form-control" id="email">
                </div>
              </div>
              <!-- <div class="form-group">
                <label for="website">Website</label>
                <input type="url" class="form-control" id="website">
              </div> -->
  
              <div class="form-group">
                <label for="message">Message</label>
                <textarea name="comen" id="message" cols="30" rows="8" class="form-control"></textarea>
              </div>
              <div class="form-group">
                <input type="submit" name="submit" value="Post Comment" class="btn btn-primary">
              </div>
  
            </form>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="sidebar">
          
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


            <!-- <div class="sidebar-block">
              <h3 class="sidebar-title">Comments</h3>
               <?php while($comment = mysqli_fetch_assoc($comen)) :?>
                <h4><?= $comment['nama']?></h4>
                <p><?= $comment['comen']?></p>
                <?php endwhile; ?>       
            </div>
          </div>
        </div>  -->
      </div> <!-- .row -->
    </div> <!-- .container -->
  </div> <!-- .page-section -->

 

  

  <script src="../assets/js/jquery-3.5.1.min.js"></script>

  <script src="../assets/js/bootstrap.bundle.min.js"></script>
  
  <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>
  
  <script src="../assets/vendor/wow/wow.min.js"></script>
  
  <script src="../assets/js/theme.js"></script>
  
</body>
</html>