<?php
require 'functions/souvenirfunction.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Buah Tangan Khas Minang</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="description">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <header id="header">
    <div class="container">

      <nav id="nav-menu-container">
        <ul class="nav-menu">
          <li class="menu-active"><a href="#hero">Home</a></li>
          <li><a href="#souvenier">Souvenier</a></li>
          <li><a href="#Makanan">Makanan</a></li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <section id="hero">
    <div class="hero-container">  
      <h1>Buah Tangan Khas Minang</h1>
      <h2>Oleh oleh yang banyak diburu oleh wisatawan bila berkunjung ke Sumatera Barat</h2>
    </div>
  </section>

  <main id="main">
    <section id="souvenier">
      <div class="container wow fadeIn">
        <div class="section-header text-center"><br>
          <h3 class="section-title">Souvenier</h3>
          <p class="section-description">Cendramata yang sangat banyak diburu oleh wisatawan asing apabila berkunjung ke Minangkabau</p>
          </div>
          <div class="row">
          <?php $souvenier = query("SELECT * FROM produk");?>
          <?php foreach ($souvenier as $row):
        ?>
        <div class="col-sm-3">
          <a style="text-decoration: none; color: black;" href="#" data-toggle="modal" data-target="#myModal<?= $row['id_produk']; ?>">
            <div class="card" style="width: 16rem;">
              <img src="admin/img/<?= $row["gambar_produk"]; ?>" class="card-img-top" style="width: 254px; height: 200px;">
              <div class="card-body">
              <h3 style="text-decoration: bold;"><?=$row["nama_produk"]; ?></h3>
              <h6 style="text-decoration: bold;"><?=$row["asal_produk"];?></h6>
              <h6 style="text-decoration: bold;"><?=$row["bahan_produk"];?></h6>
              <p class="card-text"><?=$row["deskripsi_produk"];?></p>
              </div>
              </div>
              </a>
              </div>
      <?php endforeach; ?>
     </div> 
   </div>
    </section>
    <?php
    foreach ($souvenier as $row): 
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="modal fade" id="myModal<?=$row['id_produk'] ;?>">
            <div class="modal-dialog" style="background-color: #acacac; border-radius: 10px;">
              <div class="modal-header">
                <h3 style="text-decoration: bold; color: white;"><?= $row["nama_produk"]; ?></h3>
              </div>
              <div class="modal-body">
                <img src="admin/img/<?=$row["gambar_produk"]; ?>" style="width: 300px; border-radius: 10px;">
                <br><br>
                <h3><?=$row["asal_produk"]; ?></h3>
                <h3><?=$row["bahan_produk"]; ?></h3>
                <h6 class="card-text"><?=$row["deskripsi_produk"]; ?></h6>
              </div>
              <div class="modal-footer">
                <input class="btn btn-info" value="kembali">
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
    <br>
    
    <section id="Makanan">
      <div class="container wow fadeIn">
        <div class="section-header text-center"><br>
          <h3 class="section-title">Makanan</h3>
          <p class="section-description">Oleh oleh yang banyak diburu oleh wisatawan apabila berkunjung ke Minangkabau</p>
          </div>
          <div class="row">
          <?php $makanan = query("SELECT * FROM makanan");?>
          <?php foreach ($makanan as $row):
        ?>
        <div class="col-md-4">
          <a style="text-decoration: none; color: black;" href="#" data-toggle="modal" data-target="#myModal1<?= $row['id_makanan']; ?>">
            <div class="card" style="width: 16rem;">
              <img src="admin/img/<?= $row["gambar_makanan"]; ?>" class="card-img-top" style="width: 254px; height: 200px;">
              <div class="card-body">
              <h3 style="text-decoration: bold;"><?=$row["nama_makanan"]; ?></h3>
              <h6 style="text-decoration: bold;"><?=$row["asal_makanan"];?></h6>
              <h6 style="text-decoration: bold;"><?=$row["bahan_makanan"];?></h6>
              <p class="card-text"><?=$row["deskripsi_makanan"];?></p>
              </div>
              </div>
              </a>
              </div>
      <?php endforeach; ?>
     </div> 
    </div> 
    </section>
 <?php
    foreach ($makanan as $row): 
    ?>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="modal fade" id="myModal1<?=$row['id_makanan'] ;?>">
            <div class="modal-dialog" style="background-color: #acacac; border-radius: 10px;">
              <div class="modal-header">
                <h3 style="text-decoration: bold; color: white;"><?= $row["nama_makanan"]; ?></h3>
              </div>
              <div class="modal-body">
                <img src="admin/img/<?=$row["gambar_makanan"]; ?>" style="width: 300px; border-radius: 10px;">
                <br><br>
                <h3><?=$row["asal_makanan"]; ?></h3>
                <h3><?=$row["bahan_makanan"]; ?></h3>
                <h6 class="card-text"><?=$row["deskripsi_makanan"]; ?></h6>
              </div>
              <div class="modal-footer">
                <input class="btn btn-info" value="kembali">
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
    </div>
    <br>
    
    <section id="contact">
      <div class="container wow fadeInUp ">
        <div class="section-header">
          <h3 class="section-title text-center">Contact</h3>
          <p class="section-description"></p>
        </div>
      </div>

      <div class="container wow fadeInUp mt-5">
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-4">

            <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>
                <p>Jl.Raya Km 7<br>Tanjung Pati, 26271</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>Wahyumuhammdputra17@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>082170070709</p>
              </div>
            </div>

            <div class="social-links">
              <a href="#" class="twitter"><i class="fa fa-twitter"></i></a>
              <a href="#" class="facebook"><i class="fa fa-facebook"></i></a>
              <a href="https://www.instagram.com/wahyumhdp/?hl=id" class="instagram"><i class="fa fa-instagram"></i></a>
              <a href="#" class="google-plus"><i class="fa fa-google-plus"></i></a>
              <a href="#" class="linkedin"><i class="fa fa-linkedin"></i></a>
            </div>

          </div>
        </div>

      </div>
    </section>
    <br>
  </main>
  <footer id="footer">
    <div class="footer-top">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>WahyuMuhammadPutra</strong>
      </div>
      <div class="credits">
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/superfish/hoverIntent.js"></script>
  <script src="lib/superfish/superfish.min.js"></script>

  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>

</body>
</html>