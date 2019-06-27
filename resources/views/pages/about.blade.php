<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Zenue - Your Event Solutions</title>

    <link rel="stylesheet" href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('lib/lightbox/css/lightbox.min.css') }}">
    <link href="https://fonts.googleapis.com/css?family=Muli&display=swap" rel="stylesheet">
    <link rel="shortcut icon" href="{{ asset('img/icon/ze.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="{{ asset('css/fontastic.css') }}">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <link rel="stylesheet" href="lib/wow/css/animate.css">
</head>

<body>
    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top">
            <div class="container">
                <a href="index.php" class="navbar-brand"> <img src="img/logozen.svg" alt="zenue" class="img-fluid"></a>
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right">
                    <i style="font-size: 20px;" class="fa fa-bars ml-2"></i>
                </button>
                <div id="navbarSupportedContent " class="collapse navbar-collapse menu-toggle">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"> <a href="#why" class="nav-link">Kenapa Zenue</a></li>
                        <li class="nav-item"> <a href="#fitur" class="nav-link">Fitur</a></li>
                        <li class="nav-item"> <a href="#get_app" class="nav-link">Download Sekarang</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <!-- landing pages -->
    <section class="hero bg-y">
        <div class="container mb-5">
            <div class="row align-items-center">
                <div class="col-lg-6  wow fadeInUp" data-wow-delay="0.4s">
                    <h1 class="text-bold hero-heading mb-0">Buat Acaramu Mudah & Keren!</h1>
                    <div class="row">
                        <div class="col-lg-10">
                            <p class="lead text-muted mt-4 mb-4 wow fadeInUp" data-wow-delay="0.3s">Temukan layanan organizer untuk berbagai acara di lokasi terdekat Anda dan dapatkan rekomendasi menarik lainnya.</p>
                        </div>
                    </div>
                    <div class="button-group">
                        <a href="#apa" class="btn btn-primary wow" data-wow-delay="0.8s">Dapatkan Aplikasi</a>
                    </div>

                </div>
                <div class="col-lg-6"><img src="img/boking.svg" alt="..." class="hero-image img-fluid d-none d-lg-block"></div>
            </div>
        </div>
    </section>

    <section id="apa" class="">
        <div class="container text-center text-lg-left">
             <div class="section-heading2 text-bold">
                    <h2>Apa itu Zenue?</h2>
                </div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="row">
                        <div class="col-lg-10">
                            <p class="lead divider-subtitle mt-3 text-muted wow fadeInUp" data-wow-delay="0.4s">
                                Zenue adalah aplikasi pemesanan layanan dari berbagai Event Organizer (EO), Catering maupun rental di Indonesia. Aplikasi ini dapat membantu pengguna yang ingin menyelanggarakan acara di bidang tertentu dengan mudah dan cepat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0"><img src="img/events.svg" alt="" class="divider-image img-fluid"></div>
            </div>
        </div>
    </section>
    <section id="why" class="bg-gray feature-section padding">
        <div class="container">
            <div class="section-heading2 text-bold">
                    <h2>Kenapa Zenue?</h2>
                </div>
            <div class="">
                <div id=" " class="row">
                    <div class="col-lg-4 mt-4 wow fadeInUp" data-wow-delay="0.2s">

                        <div class="feature-item" >
                            <div class="feature-content text-center wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1000ms">
                                <div class="icon"><i class="fa fa-users"></i></div>
                                <h3 class="mt-2 text-semibold">EO Handal & Terpercaya</h3>
                                <p>Beragam EO maupun rental profesional yang siap melayani Anda</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="feature-item">
                            <div class="feature-content text-center wow fadeInUp" data-wow-delay="100ms" data-wow-duration="1000ms">
                                <div class="icon"><i class="fa fa-dropbox"></i></div>
                                <h3 class="mt-2 text-semibold">Paket/Layanan Lengkap</h3>
                                <p>Lebih dari 10.000 paket dan layanan event dari berbagai organizer</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mt-4 wow fadeInUp" data-wow-delay="0.3s">
                        <div class="feature-item">
                            <div class="feature-content text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1000ms">
                                <div class="icon"><i class="fa fa-handshake-o"></i></div>
                                <h3 class="mt-2 text-semibold">Mudah & Cepat</h3>
                                <p>Proses booking dan pembayaran yang mudah dan aman</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    
    <section id="fitur" class="content-section bg-grey padding">
		    <div class="container">
                <div class="section-heading2">
                    <h2>Fitur</h2>
                </div>

		        <div class="row d-flex align-items-center content-wrap">
		            <div class="col-md-6 xs-padding">
		                <div class="col-lg-6 col-md-12 sm-text-center sm-margin-30px-bottom wow fadeInRight" data-wow-delay="0.2s">
		                    <img src="img/mobile_app.svg" alt="" class="img-fluid img-effect" />	
		                </div>
		            </div>
                <div class="col-md-6 xs-padding">
                  <div class="padding-50px-left md-padding-30px-left sm-no-padding">
                    <div class="margin-25px-bottom separator-dashed-line-horrizontal-full hover-icon wow fadeInLeft" data-wow-delay="0.2s">
                        <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom text-dark-gray"><span class="service-icon"><i class="fa fa-calendar"></i></span>Booking</h4>
                        <p>Booking paket/layanan apapun dengan mudah & cepat</p>
                    </div>
                    <div class="margin-25px-bottom separator-dashed-line-horrizontal-full hover-icon wow fadeInLeft" data-wow-delay="0.4s">
                        <h4 class="font-size18 sm-font-size16 xs-font-size15 margin-10px-bottom text-dark-gray"><span class="service-icon"><i class="fa fa-handshake-o"></i></span>ZenMitra</h4>
                        <p>Promosikan EO Anda melalui aplikasi ZENUE dan dapatkan keuntungan menarik</p>
                    </div>
                    <div class="margin-30px-bottom hover-icon wow fadeInLeft" data-wow-delay="0.3s">
                        <h4 class="font-size18 text-semibold"><span class="service-icon"><i class="fa fa-check-circle"></i></span>ZenRequest</h4>
                        <p class="">Lihat & kelola transaksi Anda</p>
                    </div>
                  </div>
		        </div>
		    </div>
		    
	</section>
    <section class="" id="get_app">
        <div class="container text-center text-lg-left">
                <div class="section-heading2 ">
                    <h2>Fitur</h2>
                </div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <h2 class="divider-heading text-bold wow fadeInUp" data-wow-delay="0.2s">Dapatkan Sekarang!</h2>
                    <div class="row">
                        <div class="col-lg-10">
                            <p class="lead divider-subtitle mb-3 text-muted wow fadeInUp" style="margin-top:20px;"  data-wow-delay="0.4s">Aplikasi kami tersedia dalam platform Android dan nikmati kemudahan pesan jasa event kapanpun & dimanapun!</p>
                            <div class="button-group" style="margin-top:20px;">
                                <a class="download-btn wow fadeInUp" href="http://play.google.com" data-wow-delay="0.8s"><img src="img/playstore.png" alt="Download Play Store"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0"><img src="img/adro.svg" alt="" class="divider-image img-fluid"></div>
            </div>
        </div>
    </section>
    <footer class="main-footer">
        <div class="copyrights">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 text-center text-lg-left">
                        <p class="copyrights-text mb-3 mb-lg-0">&copy; 2019 Zenue | Hak Cipta Dilindungi</p>
                    </div>
                    <div class="col-lg-6 text-center text-lg-right">
                        <ul class="list-inline social mb-0">
                            <li class="list-inline-item">
                                <a href="#" class="social-link">
                                    <i class="fa fa-facebook"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fa fa-twitter"></i>
                                </a>
                                <a href="#" class="social-link">
                                    <i class="fa fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/wow/js/wow.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/jquery.cookie/jquery.cookie.js">
    </script>
    <script src="lib/lightbox2/js/lightbox.js"></script>
    <script src="js/front.js"></script>
    <script>
        new WOW().init();
    </script>
    <script type='text/javascript'>
      $( () => {
//scroll functional
        $(window).scroll( () => {
          var windowTop = $(window).scrollTop();
          windowTop > 100 ? $('nav').addClass('navShadow') : $('nav').removeClass('navShadow');
          windowTop > 100 ? $('ul').css('top','80px') : $('ul').css('top','100px');
        });
        
        //Click Logo To Scroll To Top
        $('#logo').on('click', () => {
          $('html,body').animate({
            scrollTop: 0
          },500);
        });
        
        //Smooth Scrolling Using Navigation Menu
        $('a[href*="#"]').on('click', function(e){
          $('html,body').animate({
            scrollTop: $($(this).attr('href')).offset().top - 100
          },500);
          e.preventDefault();
        });
        
        //Toggle Menu
        $('#menu-toggle').on('click', () => {
          $('#menu-toggle').toggleClass('closeMenu');
          $('ul').toggleClass('showMenu');
          
          $('li').on('click', () => {
            $('ul').removeClass('showMenu');
            $('#menu-toggle').removeClass('closeMenu');
          });
        });
        
      });
    </script>
</body>

</html>