








<!DOCTYPE html>
<html lang="en">
  <head>
    <title>KAMPUH &mdash;</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700"> 
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">


    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/style.css">
    
  </head>
  <body>
  <?php
		session_start();
		if( ! isset($_SESSION['username'])){
		header("location:login.php?pesan=gagal");
		}
	?>
  
  <div class="site-wrap">
    

    <div class="site-navbar bg-white py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="#" method="post">`
            <input type="text" class="form-control" placeholder=" Ketik nama penjahit/ jenis pakaian...">
          </form>  
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="index.html" class="js-logo-clone">Kampuh</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class="has-children active">
                  <a href="index.html">Beranda</a>
                  <ul class="dropdown">
                    <li><a href="./lgn/login.html">Logout</a></li>
                    <li><a href="./lgn/register.html">hallo <?php echo $_SESSION['username']; ?></a></li>
                    <li class="has-children">
                      <ul class="dropdown">                     
                      </ul>
                    </li>
                  </ul>
                </li>
                
                <li><a href="shop.html">Belanja</a></li>
                <li><a href="#"> Pesanan </a></li>
                <li><a href="#"> Profil</a></li>
                <li><a href="contact.html"> Kontak</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="#" class="icons-btn d-inline-block"><span class="icon-heart-o"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
              <span class="icon-shopping-bag"></span>
              <span class="number">2</span>
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>

    <div class="site-blocks-cover" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#Selamat Datang</h2>
            <h1>Jahit pakaian sesuai keinginanmu</h1>
            <p><a href="#" class="btn btn-black rounded-0"> pesan sekarang yuk ! </a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/tailor456.jpeg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="title-section mb-5">
          <h2 class="text-uppercase"><span class="d-block">temukan</span> koleksi <h2>
        </div>
        <div class="row align-items-stretch">
          <div class="col-lg-8">
            <div class="product-item sm-height full-height bg-gray">
              <a href="#" class="product-category">Wanita <span>25 items</span></a>
              <img src="images/gaunmewah.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
          <div class="col-lg-4">
            <div class="product-item sm-height bg-gray mb-4">
              <a href="#" class="product-category"> Pria <span>25 items</span></a>
              <img src="images/jaspria1.jpg" alt="Image" class="img-fluid">
            </div>

            <div class="product-item sm-height bg-gray">
              <a href="#" class="product-category"> Anak <span>25 items</span></a>
              <img src="images/kids1.jpg" alt="Image" class="img-fluid">
            </div>
          </div>
        </div>
      </div>
    </div>


    
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section mb-5 col-12">
            <h2 class="text-uppercase"> penjahit populer</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/womansummerdress.jpg" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#"> Dress Musim Panas Wanita - Budi Tailor </a></h2>
            <strong class="item-price">Rp 2.000.000</strong>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/manwinter.jpg" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#"> Coat Pria - Angel Tailor </a></h2>
            <strong class="item-price"><del>Rp 3.000.000</del> Rp 2.400.000</strong>
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/plaidwoolwinterdress.jpg" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#"> Pakaian Musim Dingi Wanita - Veronica Tailor</a></h2>
            <strong class="item-price"><del>Rp 4.900.000</del> Rp 2.850.000</strong>

            <div class="star-rating">
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
            </div>
coat pria manwinter
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/womansummer.jpg" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#"> Dress Wanita Musim Panas - Pororo Tailor</a></h2>
            <strong class="item-price"><del>Rp 4.960.000</del> Rp 1.000.000</strong>
            <div class="star-rating">
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
              <span class="icon-star2 text-warning"></span>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/mansummer.jpg" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#">Pakaian Pria Musim Panas - Yaya Tailor</a></h2>
            <strong class="item-price"><del>Rp 1.900.000</del> Rp 800.000</strong>
          </div>
          <div class="col-lg-4 col-md-6 item-entry mb-4">
            <a href="#" class="product-item md-height bg-gray d-block">
              <img src="images/mansummer2.jpg" alt="Image" class="img-fluid">
            </a>
            <h2 class="item-title"><a href="#">Pakaian Pria Musim Panas - Branie Tailor</a></h2>
            <strong class="item-price">Rp 950.000</strong>
          </div>

        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="title-section text-center mb-5 col-12">
            <h2 class="text-uppercase"> Rating tinggi</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3">
            <div class="nonloop-block-3 owl-carousel">
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/kaoscowok.jpg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#"> Kaos Pria - Yaya Tailor</a></h2>
                  <strong class="item-price"><del>Rp 1.900.000</del> Rp 800.000</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/koreanwoman.jpg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#"> Dress Wanita - Robee Tailor</a></h2>
                  <strong class="item-price"><del>Rp. 460.000</del> Rp. 280.000</strong>

                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/asianman.jpg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#">Jaket Pria - Veronica Tailor</a></h2>
                  <strong class="item-price"><del>Rp. 4.900.000</del> Rp. 2.850.000</strong>

                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>

                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/gaun1.jpg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#"> Gaun Pernikahan - Pororo Tailor</a></h2>
                  <strong class="item-price"><del>Rp. 4.960.000</del> Rp. 1.000.000</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="item-entry">
                  <a href="#" class="product-item md-height bg-gray d-block">
                    <img src="images/gaunbiru.jpg" alt="Image" class="img-fluid">
                  </a>
                  <h2 class="item-title"><a href="#"> Gaun Pesta - Branie Tailor</a></h2>
                  <strong class="item-price"> Rp. 9.050.000</strong>
                  <div class="star-rating">
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                    <span class="icon-star2 text-warning"></span>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="site-blocks-cover inner-page py-5" data-aos="fade">
      <div class="container">
        <div class="row">
          <div class="col-md-6 ml-auto order-md-2 align-self-start">
            <div class="site-block-cover-content">
            <h2 class="sub-title">#Banyak Model pakaian terkini, jangan sampai ketinggalan</h2>
            <h1>trend terbaru</h1>
            <p><a href="#" class="btn btn-black rounded-0">yuk cek model</a></p>
            </div>
          </div>
          <div class="col-md-6 order-1 align-self-end">
            <img src="images/trendman.jpeg" alt="Image" class="img-fluid">
          </div>
        </div>
      </div>
    </div>

    <footer class="site-footer custom-border-top">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-3 mb-4 mb-lg-0">
            <h3 class="footer-heading mb-4">Promo</h3>
            <a href="#" class="block-6">
              <img src="images/sarah.jfif" alt="Image placeholder" class="img-fluid rounded mb-4">
              <h3 class="font-weight-light  mb-0">Sarah Tailor</h3>
              <p>Promo jangka waktu September 15 &mdash; 25, 2019</p>
            </a>
          </div>
          <div class="col-lg-5 ml-auto mb-5 mb-lg-0">
            <div class="row">
              <div class="col-md-12">
                <h3 class="footer-heading mb-4">Informasi Lainnya</h3>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Bantuan </a></li>
                  <li><a href="#">Fitur</a></li>
                  <li><a href="about.html">Tentang Kami</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Pesan </a></li>
                  <li><a href="#">Notifikasi</a></li>
                  <li><a href="#">Pengaturan</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4">
                <ul class="list-unstyled">
                  <li><a href="#">Disukai</a></li>
                  <li><a href="#">Dilaporkan</a></li>
                  <li><a href="#">Riwayat </a></li>
                </ul>
              </div>
            </div>
          </div>
          
          <div class="col-md-6 col-lg-3">
            <div class="block-5 mb-5">
              <h3 class="footer-heading mb-4">info kontak</h3>
              <ul class="list-unstyled">
                <li class="address">jl. dharmahusada no. 166, Surabaya, Prov. Jawa Timur, Indonesia </li>
                <li class="phone"><a href="tel://628082291453455">+6282291452355</a></li>
                <li class="email">kampuhkita@gmail.com</li>
              </ul>
            </div>

            <div class="block-7">
              <form action="#" method="post">
                <label for="email_subscribe" class="footer-heading"> berlangganan </label>
                <div class="form-group">
                  <input type="email" class="form-control py-4" id="email_subscribe" placeholder="Email">
                  <input type="submit" class="btn btn-sm btn-primary" value=" KIRIM">
                </div>
              </form>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Kampuh | Indonesia <i class="icon-heart" aria-hidden="true"></i> Oleh <a href="https://colorlib.com" target="_blank" class="text-primary"> El Dorado Team</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
          
        </div>
      </div>
    </footer>
  </div>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>