@extends('layout.app')
@section('content')
<!-- Slider -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="carousel-item active">
      <img class="first-slide img-fluid"  src="img/bg-1.jpg" alt="First slide" width="120%">
      <div class="carousel-caption text-left d-none d-md-block">
        <h3 class="display-4" style="color:white;">Get 30% Off</h3>
        <p class="lead" style="color:white;">Untuk setiap pemesanan pertama</p>
        <a class="btn btn-lg btn-outline-light" href="#" role="button">Pesan Sekarang</a>
      </div>
    </div>
    <div class="carousel-item">
        <img class="second-slide img-fluid" src="img/bg-2.jpg" alt="Second slide" width="120%">
      <div class="carousel-caption text-left d-none d-md-block">
        <h3 class="display-4">Best Day Offer</h3>
        <p class="lead">Diskon besar-besaran untuk event terbaikmu</p>
      </div>
    </div>
    <div class="carousel-item">
        <img class="third-slide img-fluid overlay" src="img/bg-3.jpg" alt="Third slide" width="120%">
      <div class="carousel-caption text-left d-none d-md-block">
        <h3 class="display-4">Pasang Iklanmu di sini!</h3>
        <p class="lead">Nikmati keuntungan lebih dengan mempromosikan mitra Anda</p>
      </div>
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
<!-- End of Slider -->

<!-- Content -->
<main id="main">
  <!-- Services -->
  <section id="services" class="section-bg">
    <div class="container">
      <div class="row">
          <div class="col-md-2 col-sm-4 data-wow-duration="1.4s">
              <a href="/kategori/concert">
              <div class="box">
                  <div class="icon-md" style="background: rgb(193, 23, 23, .5); border-radius:50%">
                    <img src="img/icon/ico-04.svg" style="color:white" alt="">
                  </div>
                  <h4 style="margin-top:10px" class="title">Concert</h4>
              </div>
              </a>
          </div>
          <div class="col-md-2 col-sm-4" data-wow-duration="1.4s">
              <a href="/kategori/party">
              <div class="box">
                  <div class="icon-md" style="background: rgb(193, 23, 23, .5); border-radius:50%">
                    <img src="img/icon/ico-03.svg" style="color:white" alt="">
                  </div>
                  <h4 style="margin-top:10px" class="title">Party</h4>
              </div>
              </a>
          </div>
          <div class="col-md-2 col-sm-4" data-wow-duration="1.4s">
              <a href="/kategori/wedding">
                  <div class="box">
                      <div class="icon-md" style="background: rgb(193, 23, 23, .5); border-radius:50%">
                        <img src="img/icon/ico-01.svg" style="color:white" alt="">
                      </div>
                      <h4 style="margin-top:10px" class="title">Wedding</h4>
                  </div>
              </a>
          </div>
          <div class="col-md-2 col-sm-4" data-wow-duration="1.4s">
              <a href="/kategori/conference">
                  <div class="box">
                      <div class="icon-md" style="background: rgb(193, 23, 23, .5); border-radius:50%">
                        <img src="img/icon/ico-02.svg" style="color:white" alt="">
                      </div>
                      <h4 style="margin-top:10px" class="title">Conference</h4>
                  </div>
              </a>
          </div>
          <div class="col-md-2 col-sm-4" data-wow-duration="1.4s">
              <a href="/kategori/rental">
                  <div class="box">
                      <div class="icon-md" style="background: rgb(193, 23, 23, .5); border-radius:50%">
                        <img src="img/icon/ico-06.svg" style="color:white" alt="">
                      </div>
                      <h4 style="margin-top:10px" class="title">Rental</h4>
                  </div>
              </a>
          </div>
          <div class="col-md-2 col-sm-4" data-wow-duration="1.4s">
              <a href="/kategori/katering">
                  <div class="box">
                      <div class="icon-md" style="background: rgb(193, 23, 23, .5); border-radius:50%">
                        <img src="img/icon/ico-05.svg" style="color:white" alt="">
                      </div>
                      <h4 style="margin-top:10px" class="title">Catering</h4>
                  </div>
              </a>
          </div>        
        </div>
      </div>
  </section>

  <!-- Mitra Kami -->
  <section class="bg-gray"> 
    <div class="container">
      <div class="row">  
        <div class="col-md-12">
          <div id="myCarousel" class="carousel carousels slide" data-ride="carousels" data-interval="0"> 
              <header class="section-header">
                  <h3>Mitra Kami</h3>
                  <br>
              </header>
              <div class="carousel-inner">
                <div class="item carousel-item active">
                  <div class="row">
                    @foreach( $eo as $eo )
                    <div class="col-sm-3">
                      <div class="thumb-wrappers">
                        <div class="img-box">
                            <img src="img/EO/eo-1.png" class="img-responsive img-fluid img-rd" alt="">									
                        </div>
                        <div class="thumb-content">
                          <h4>{{$eo->nama_eo}}</h4>									
                          <p class="item-price"><i class="fa fa-map-marker"></i> <b>{{$eo->kota}}</b></p>
                          <a href="{{ route('eo.show', str_replace(' ', '_', $eo->nama_eo)) }}" class="btn btn-primary">Lihat Profil</a>
                        </div>						
                      </div>
                    </div>
                    @endforeach
                  </div>
                    <br><br>
                    <a href="/eo" class="btn btn-outline-danger">Lihat Semua</a>
                </div>
              </div>
          </div>
        </div>
      </div> 
    </div>                       		                            
  </section>

  <!-- Kenapa Zenith -->
  <section class="bg-white" id="why-us">
    <div class="container">
      <header class="section-header">
        <h3>Kenapa Zenith?</h3>
        <br>
      </header>
      <div class="row">
        <div class="col-lg-4 col-md-5">
          <div class="why-us-content">
            <div class="features">
              <i class="fa fa-users" style="color: #c11717;"></i>
              <h4 class="title">EO Berpengalaman</h4>
              <p>Berasal dari EO profesional dan berpengalaman yang siap melayani Anda</p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="why-us-content">
            <div class="features">
              <i class="fa fa-dropbox" style="color: #c11717;"></i>
              <h4 class="title">Mudah & Cepat</h4>
              <p>Beragam layanan berkualitas dan pengiriman responsif </p>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-5">
          <div class="why-us-content">
            <div class="features">
              <i class="fa fa-lock" style="color: #c11717;"></i>
              <h4 class="title">Aman </h4>
              <p>Pembayaran dan Negosiasi dijamin aman dari EO terpercaya</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Gabung dengan Kami -->
  <section id="call-to-action" class="">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 text-center text-lg-left">
          <h3 class="cta-title">Gabung Zenith</h3>
          <p class="cta-text"> Yuk gabung bersama kami untuk mewujudkan peluang bisnis yang tinggi.</p>
        </div>
        <div class="col-lg-3 cta-btn-container text-center">
          <a href="{{ url('/login') }}" class="cta-btn align-middle">Gabung Sekarang</a>
        </div>
      </div>
    </div>
  </section>
</main>
<!-- End of Content -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/mobile-nav/mobile-nav.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/waypoints/waypoints.min.js"></script>
  <script src="lib/counterup/counterup.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>
  <!-- Template Main Javascript File -->
  <script src="js/main.js"></script>
</body>
@endsection