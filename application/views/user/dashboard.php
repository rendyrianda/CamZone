<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel = "icon" type = "image/png" href = "<?= base_url('assets/'); ?>img/icon1.png">

  <title>CamZone Shop | Toko Kamera Online</title>

  <!-- Bootstrap core CSS -->
  <link href="<?= base_url('assets/'); ?>user/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="<?= base_url('assets/'); ?>user/css/shop-homepage.css" rel="stylesheet">

</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #4e73df">
    <div class="container">
      <a class="navbar-brand" href="#"></a>
      <img src="<?= base_url('assets/'); ?>img/logo1.png" height="50px" width="100px">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Shop
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Cara Belanja</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Tentang Kami</a>
          </li>
          <a href="<?php echo base_url() ?>index.php/user/dashboard/logout" type="submit" class="btn btn-danger"><i class="fa fa-sign-out"></i> Logout</a>
     
      
        
        </ul>
      </div>
    </div>
  </nav>

  <!-- Page Content -->
  <div class="container">

    <div class="row">

      <div class="col-lg-3">

        <h1 class="my-4">Kategori</h1>
        <div class="list-group">
          <a href="#" class="list-group-item">Kamera DSLR</a>
          <a href="#" class="list-group-item">Kamera Mirrorless</a>
          <a href="#" class="list-group-item">Kamera Compact</a>
          <a href="#" class="list-group-item">Kamera Action</a>
          <a href="#" class="list-group-item">Kamera Semipro</a>
          <a href="#" class="list-group-item">Kamera Pocket</a>
          <a href="#" class="list-group-item">Kamera Polaroid</a>
          <a href="#" class="list-group-item">Kamera Drone</a>
        </div>

      </div>
      <!-- /.col-lg-3 -->

      <div class="col-lg-9">

        <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="d-block img-fluid" src="<?= base_url('assets/'); ?>img/banner1.jpg" alt="First slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url('assets/'); ?>img/banner2.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block img-fluid" src="<?= base_url('assets/'); ?>img/banner4.jpg" alt="Third slide">
            </div>
          </div>
          <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>

        <div class="row">

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?= base_url('assets/'); ?>img/canon300d.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Canon EOS 3000D Kit 18-55mm</a>
                </h4>
                <h5>Rp 4.545.000</h5>
                <p class="card-text">Resolusi 18 Megapixel</p>
                <a href="canon300d.php" class="btn btn-danger btn-xs">Lihat Selengkapnya</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#11088; &#11088; &#11088; &#11088; &#11088;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?= base_url('assets/'); ?>img/fujifilmxt2000.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Fujifilm X-T200 Kit XC 15-45mm</a>
                </h4>
                <h5>Rp 10.999.000</h5>
                <p class="card-text">24MP - APS-C CMOS X</p>
                <a href="#" class="btn btn-danger btn-xs">Lihat Selengkapnya</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#11088; &#11088; &#11088; &#11088; &#11088;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?= base_url('assets/'); ?>img/nikon1j5kit.jpeg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Nikon 1 J5 Kit 10-33mm</a>
                </h4>
                <h5>Rp 4.899.000</h5>
                <p class="card-text">21MP - 1" BSI-CMOS Sensor</p>
                <a href="#" class="btn btn-danger btn-xs">Lihat Selengkapnya</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#11088; &#11088; &#11088; &#11088;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?= base_url('assets/'); ?>img/nikond610.jpg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Nikon D610</a>
                </h4>
                <h5>Rp 11.499.000</h5>
                <p class="card-text">24MP - APS-C CMOS Sensor</p>
                <a href="#" class="btn btn-danger btn-xs">Lihat Selengkapnya</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#11088; &#11088; &#11088;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?= base_url('assets/'); ?>img/djimavic2pro.jpeg" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">DJI Mavic 2 Pro</a>
                </h4>
                <h5>Rp 21.499.000</h5>
                <p class="card-text">20 MP 1” CMOS Sensor</p>
                <a href="#" class="btn btn-danger btn-xs">Lihat Selengkapnya</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#11088; &#11088; &#11088; &#11088; &#11088;</small>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card h-100">
              <a href="#"><img class="card-img-top" src="<?= base_url('assets/'); ?>img/sonyhxr-mc2500.png" alt=""></a>
              <div class="card-body">
                <h4 class="card-title">
                  <a href="#">Sony HXR-MC2500</a>
                </h4>
                <h5>Rp 9.350.000</h5>
                <p class="card-text">1/4" Exmor R CMOS Sensor</p>
                <a href="#" class="btn btn-danger btn-xs">Lihat Selengkapnya</a>
              </div>
              <div class="card-footer">
                <small class="text-muted">&#11088; &#11088; &#11088;</small>
              </div>
            </div>
          </div>

        </div>
        <!-- /.row -->

      </div>
      <!-- /.col-lg-9 -->

    </div>
    <!-- /.row -->

  </div>
  <!-- /.container -->


  <!-- Footer -->
  <footer class="py-5 bg-dark">
    <div class="container">
        <ul class="list-unstyled list-inline social text-center text-white">
          <li style="font-size: 20px">Unduh dan Ikuti Kami di :</li><br>
          <li class="list-inline-item"><a href="https://play.google.com/"><i class="fa fa-google-play"><img src="<?= base_url('assets/'); ?>img/gp.png" height="60px" width="120px"></i></a></li>
          <li class="list-inline-item"><a href="https://www.apple.com/ios/app-store/"><i class="fa fa-appstore"><img src="<?= base_url('assets/'); ?>img/aps.png" height="40px" width="120px"></i></a></li>
          <li class="list-inline-item"><a href="https://www.youtube.com/"><i class="fa fa-youtube"><img src="<?= base_url('assets/'); ?>img/yt.png" height="40px" width="40px"></i></a></li>
          <li class="list-inline-item"><a href="https://www.instagram.com/"><i class="fa fa-instagram" style="border-radius: 4px; content: none;"><img src="<?= base_url('assets/'); ?>img/ig.png" height="40px" width="40px"></i></a></li>
          <li class="list-inline-item"><a href="https://facebook.com/"><i class="fa fa-facebook"><img src="<?= base_url('assets/'); ?>img/fb4.png" height="40px" width="40px"></i></a></li>
          <li class="list-inline-item"><a href="https://twitter.com/login"><i class="fa fa-twitter"><img src="<?= base_url('assets/'); ?>img/tw.png" height="40px" width="40px"></i></a></li>
        </ul>
      </div>
    </hr>
      <p class="m-0 text-center text-white">Copyright &copy; CamZone 2020</p></div><br/>
      <p class="m-0 text-center text-white" style="font-size: 10px">CamZone adalah merek milik PT. Aplikasi Karya Anak PCR. Terdaftar pada Direktorat Jendral Kekayaan Intelektual Republik Indonesia</p>

    </div>
    <!-- /.container -->
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="<?= base_url('assets/'); ?>user/vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/'); ?>user/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

</body>

</html>
