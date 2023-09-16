<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="author" content="templatemo">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">

    <title>Lelangku.id tempat lelang paling nyaman </title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <!-- Additional CSS Files -->
    <link rel="stylesheet" href="assets/css/fontawesome.css">
    <link rel="stylesheet" href="assets/css/templatemo-liberty-market.css">
    <link rel="stylesheet" href="assets/css/owl.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet"href="https://unpkg.com/swiper@7/swiper-bundle.min.css"/>
<!--

TemplateMo 577 Liberty Market

https://templatemo.com/tm-577-liberty-market

-->
  </head>

<body>

  <!-- ***** Preloader Start ***** -->
  <div id="js-preloader" class="js-preloader">
    <div class="preloader-inner">
      <span class="dot"></span>
      <div class="dots">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  </div>
  <!-- ***** Preloader End ***** -->

  <!-- ***** Header Area Start ***** -->
  <header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="" class="logo">
                        <img src="assets/images/logo4.png" alt="">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                        <li><a href="" class="active">Home</a></li>
                        <li><a href="#about">About</a></li>
                        <li><a href="#barang">Barang Lelang</a></li>
                        <li><a href="/logout">Logout</a></li>
                    </ul>   
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
  </header>
  <!-- ***** Header Area End ***** -->

  <!-- ***** Main Banner Area Start ***** -->
  <div class="main-banner">
    <div class="container">
      <div class="row">
        <div class="col-lg-6 align-self-center">
          <div class="header-text">
            <h6>Hallo {{ Auth::user()->name }}</h6>
            <h2>Beli Barang &amp; Kebutuhan Dengan Harga Murah.</h2>
            <p>Beli barang lelang terpercaya dan dijamin aman yaa di Lelangku aja yakan.</p>
            <div class="buttons">
              <div class="border-button">
                <a href="#about">Tentang Kami</a>
              </div>
              <div class="main-button">
                <a href="#barang">Barang Lelang</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-1">
          <div class="owl-banner owl-carousel">
            <div class="item">
              <img src="assets/images/banner-03.png" alt="">
            </div>
            <div class="item">
              <img src="assets/images/banner-04.png" alt="">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- ***** Main Banner Area End ***** -->
  <div class="categories-collections" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="categories">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <div class="line-dec"></div>
                  <h2>AB<em>OUT</em></h2>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-01.png" alt="">
                  </div>
                  <h4>Terstruktur</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-02.png" alt="">
                  </div>
                  <h4>Detail</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-03.png" alt="">
                  </div>
                  <h4>Aman</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-04.png" alt="">
                  </div>
                  <h4>Lengkap</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-05.png" alt="">
                  </div>
                  <h4>Murah</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
              <div class="col-lg-2 col-sm-6">
                <div class="item">
                  <div class="icon">
                    <img src="assets/images/icon-06.png" alt="">
                  </div>
                  <h4>Terintegrasi</h4>
                  <div class="icon-button">
                    <a href="#"><i class="fa fa-angle-right"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-12" id="barang">
          <div class="collections">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <div class="line-dec"></div>
                  <h2>Barang<em> Lelang</em></h2>
                </div>
              </div>
              @foreach ($barang as $item)
              <div class="col-6 col-md-4 col-lg-4">
                  <div class="item">
                    <img src="{{ asset('images/'.$item->foto) }}" alt="" width="300" height="330">
                    <div class="down-content">
                      <h4>{{ $item->nama_barang }}</h4>
                      <span class="collection">Harga Awal:<br><strong>{{ $item->harga_awal }}</strong></span>
                      <div class="main-button">
                        <a href="{{ route('masyarakat.show', $item->id) }}">Ikutan Lelang</a>
                      </div>
                    </div>
                  </div>-
              </div>
              @endforeach
            </div> 
          </div>
        </div>
      </div>
    </div>
  </div>


  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

  <script src="assets/js/isotope.min.js"></script>
  <script src="assets/js/owl-carousel.js"></script>

  <script src="assets/js/tabs.js"></script>
  <script src="assets/js/popup.js"></script>
  <script src="assets/js/custom.js"></script>

  </body>
</html>