<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <title>Contact</title>

  <link rel="stylesheet" href="assets2/css/maicons.css">
  <link rel="stylesheet" href="assets2/css/bootstrap.css">
  <link rel="stylesheet" href="assets2/vendor/owl-carousel/css/owl.carousel.css">
  <link rel="stylesheet" href="assets2/vendor/animate/animate.css">
  <link rel="stylesheet" href="assets2/css/news.css">
</head>

<body>
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

      <div class="page-section">
        <div class="container">
          <h1 class="text-center wow fadeInUp">Message</h1>
    
          <form class="contact-form mt-5" action="admin/commands/add_pesan.php" method="POST" enctype="multipart/form-data">
            <div class="row mb-3">
              <div class="col-sm-6 py-2 wow fadeInLeft">
                <label for="fullName">Name</label>
                <input type="text" name="nama" id="fullName" class="form-control" placeholder="Full name..">
              </div>
              <div class="col-sm-6 py-2 wow fadeInRight">
                <label for="emailAddress">Email</label>
                <input type="email" name="email" id="emailAddress" class="form-control" placeholder="Email address..">
              </div>
              <div class="col-12 py-2 wow fadeInUp">
                <label for="message">Comment</label>
                <textarea id="message" name="comen" class="form-control" rows="8" placeholder="Enter Message.."></textarea>
              </div>
            </div>
            <button  name="submit" class="btn btn-primary wow zoomIn">Send Message</button>
          </form>
        </div>
      </div>

      <footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">
       
        <div class="col-sm-6 col-lg-3 py-3">
          <h5>Contact</h5>

      </div>


<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
</body>
</html>