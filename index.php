<!DOCTYPE html>
<html lang="id">
<?php
	session_start();
	require_once("config/koneksi.php");
?>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="assets/images/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>VIC COMP | Store Website</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/owl.css">

  </head>

  <body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->

    <!-- Header -->
    <header class="">
      <nav class="navbar navbar-expand-lg">
        <div class="container">
          <a class="navbar-brand" href="index.php"><h2>VIC COMP <em>STORE</em></h2></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home
                      <span class="sr-only">(current)</span>
                    </a>
                </li> 

                <li class="nav-item"><a class="nav-link" href="products.php">Products</a></li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">More</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="about-us.php">About Us</a>
                      <a class="dropdown-item" href="blog.php">Blog</a>
                      <a class="dropdown-item" href="testimonials.php">Testimonials</a>
                    </div>
                </li>
                
                <li class="nav-item"><a class="nav-link" href="checkout.php">Checkout</a></li>

                <li class="nav-item"><a class="nav-link" href="contact.php">Contact Us</a></li>
 <?php
                if (isset ($_SESSION['email'])) {?>
                    <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Account</a>
                    <div class="dropdown-menu">
                      <a class="dropdown-item" href="akun.php">My Account</a>
                      <a class="dropdown-item" href="pemesanan.php">Order History</a>
                      <a class="dropdown-item" href="logout.php">logout</a>
                    </div>
                </li>  
                <?php } else {?>
                <li class="nav-item"><a class="nav-link" href="login.php">Sign in</a></li>  
                <?php } ?>

            </ul>
          </div>
        </div>
      </nav>
    </header>

    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner header-text">
      <div class="owl-banner owl-carousel">
        <div class="banner-item-01">
          <div class="text-content">
            <h4>VIC COMP</h4>
            <h2>Build your DESK SETUP!!</h2>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <div class="latest-products">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Featured Products</h2>
              <a href="products.php">view more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>
          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.php"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.php"><h4>Mechanical Keyboard</h4></a>
                <p>Keyboard Mechanical yang kami jual adalah dari berbagai merk ternama dan berbagai ukuran, serta tipe yang beragam. untuk melihat keyboard yang kami jual lebih lengkapnya kalian bisa klik <a href="products.php">Products</a>. kami juga menerima requestan anda melalui kolom <a href="contact.php">contact us.</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.php"><img src="assets/images/product-2-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.php"><h4>Mouse </h4></a>
                <p>Mouse yang kami jual adalah dari berbagai merk ternama dan berbagai jenis,serta fitur yang beragam. untuk melihat Mouse yang kami jual lebih lengkapnya kalian bisa klik <a href="products.php">Products</a>. kami juga menerima requestan anda melalui kolom <a href="contact.php">contact us.</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.php"><img src="assets/images/product-3-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.php"><h4>Coiled cable</h4></a>
                <p>Coiled Cable yang kami jual adalah dari berbagai merk ternama dan berbagai warna,serta panjang yang beragam. untuk melihat Coiled Cable yang kami jual lebih lengkapnya kalian bisa klik <a href="products.php">Products</a>. kami juga menerima requestan anda melalui kolom <a href="contact.php">contact us.</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.php"><img src="assets/images/product-4-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.php"><h4>Deskmat</h4></a>
                <p>Deskmat yang kami jual adalah dari berbagai merk ternama dan berbagai warna, serta ukuran yang beragam. untuk melihat Deskmat yang kami jual lebih lengkapnya kalian bisa klik <a href="products.php">Products</a>. kami juga menerima requestan anda melalui kolom <a href="contact.php">contact us.</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.php"><img src="assets/images/product-5-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.php"><h4>Headphone</h4></a>
                <p>Headphone yang kami jual adalah dari berbagai merk ternama dan berbagai warna serta warna yang beragam, untuk melihat Headphone yang kami jual lebih lengkapnya kalian bisa klik <a href="products.php">Products</a>. kami juga menerima requestan anda melalui kolom <a href="contact.php">contact us.</a></p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="product-item">
              <a href="product-details.php"><img src="assets/images/product-6-370x270.jpg" alt=""></a>
              <div class="down-content">
                <a href="product-details.php"><h4>Monitor</h4></a>
                <p>Monitor yang kami jual adalah dari berbagai merk ternama dan berbagai ukuran, serta fitur yang beragam untuk melihat Monitor yang kami jual lebih lengkapnya kalian bisa klik <a href="products.php">Products</a>. kami juga menerima requestan anda melalui kolom <a href="contact.php">contact us.</a></p>
              </div>
            </div>
          </div>
          
        </div>
      </div>
    </div>

    <div class="best-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Us</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <p>"VIC COMP adalah menjadi pengepul solusi teknologi yang inovatif dan menyediakan peralatan komputer terbaik untuk memenuhi kebutuhan digital Anda. Sejak kami berdiri, tekad kami adalah memberikan akses kepada setiap individu untuk menghadirkan teknologi yang memajukan, memberdayakan, dan menginspirasi. Kami percaya bahwa teknologi adalah pendorong utama perubahan positif, dan oleh karena itu, kami berkomitmen untuk menyediakan peralatan komputer terdepan dengan kualitas terbaik. Dengan menghadirkan produk-produk terbaru dan terkini, kami berharap dapat meningkatkan pengalaman teknologi Anda dan mendukung pertumbuhan serta kesuksesan Anda."</p>
              <a href="about-us.php" class="filled-button">Read More</a>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="assets/images/about-1-570x350.jpg" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="services" style="background-image: url(assets/images/other-image-fullscren-1-1920x900.jpg);" >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Latest blog posts</h2>

              <a href="blog.php">read more <i class="fa fa-angle-right"></i></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-1-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Tips memilih barang barang untuk mereakit Desk Setup Impian</a></h4>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-2-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Tips merawat Desk Setup kita agar tetap terorganisir!!</a></h4>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="service-item">
              <a href="#" class="services-item-image"><img src="assets/images/blog-3-370x270.jpg" class="img-fluid" alt=""></a>

              <div class="down-content">
                <h4><a href="#">Lebih baik Desk Setup PC atau Laptop??!!/a></h4>

                <p style="margin: 0;"> John Doe &nbsp;&nbsp;|&nbsp;&nbsp; 12/06/2020 10:30 &nbsp;&nbsp;|&nbsp;&nbsp; 114</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="happy-clients">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <a href="testimonials.php">read more <i class="fa fa-angle-right"></i></a>
              <h2>Happy Clients</h2>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-clients owl-carousel text-center">
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Hansen</h4>
                  <p class="n-m"><em>"Toko yang sangat bagus o, lu olang kalau mau beli balang buat setup disini aja o, sangat mulah dan teljangkau aa."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Prianda Binjai</h4>
                  <p class="n-m"><em>"Pelayanannya bagus adminnya ramah-ramah, dan juga sangat lengkap."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Agil Petir</h4>
                  <p class="n-m"><em>"Toko yang bagus sangat rekomended, menyediakan banyak setup seperti keyboard, mouse dll."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Agil Petir</h4>
                  <p class="n-m"><em>"Toko yang bagus sangat rekomended, menyediakan banyak setup seperti keyboard, mouse dll."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Prianda Binjai</h4>
                  <p class="n-m"><em>"Pelayanannya bagus adminnya ramah-ramah, dan juga sangat lengkap."</em></p>
                </div>
              </div>
              
              <div class="service-item">
                <div class="icon">
                  <i class="fa fa-user"></i>
                </div>
                <div class="down-content">
                  <h4>Hansen</h4>
                  <p class="n-m"><em>"Toko yang sangat bagus o, lu olang kalau mau beli balang buat setup disini aja o, sangat mulah dan teljangkau aa."</em></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <div class="row">
                <div class="col-md-8">
                  <h4>Lets keep in touch with us</h4>
                  <p>You can request about new product, you can give us provide suggestions and feedback on service times etc..</p>
                </div>
                <div class="col-lg-4 col-md-6 text-right">
                  <a href="contact.php" class="filled-button">Contact Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-content">
              <p>Copyright © 2023 VIC COMP - Create by: <a href="https://www.adtyawd/">adtyawd</a></p>
            </div>
          </div>
        </div>
      </div>
    </footer>


    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


    <!-- Additional Scripts -->
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/owl.js"></script>
  </body>
</html>