@extends('layout.app')
@section('content')
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img class="first-slide img-box" style="background: rgb(193, 23, 23, .5); height: 50%;" src="img/bg-1.jpg" alt="First slide">
              <div class="carousel-caption text-left d-none d-md-block ">
                <h3 class="display-4" style="color:white;">Get 30% Off</h3>
                <p class="lead" style="color:white;">Untuk setiap pemesanan pertama</p>
                <a class="btn btn-lg btn-outline-light" href="#" role="button">Pesan Sekarang</a>
              </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide img-fluid" src="img/bg-2.jpg" alt="Second slide">
              <div class="carousel-caption text-left d-none d-md-block">
                <h3 class="display-4">Best Day Offer</h3>
                <p class="lead">Diskon besar-besaran untuk event terbaikmu</p>
              </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide img-fluid overlay" src="img/bg-3.jpg" alt="Third slide">
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
  </section>
  <main id="main">
		<section id="services" class="section-bg">
		    <div class="container">
          <div class="row">
              <div class="col-md-2 col-sm-4 data-wow-duration="1.4s">
                  <a href="">
                  <div class="box">
                      <div class="icon-md" style="background: rgb(193, 23, 23, .5); border-radius:50%">
                      <img src="img/icon/ico-04.svg" style="color:white" alt="">
                      </div>
                      <h4 style="margin-top:10px" class="title">Concert</h4>
                  </div>
                  </a>
              </div>
              <div class="col-md-2 col-sm-4" data-wow-duration="1.4s">
                  <a href="">
                  <div class="box">
                      <div class="icon-md" style="background: rgb(193, 23, 23, .5); border-radius:50%">
                      <img src="img/icon/ico-03.svg" style="color:white" alt="">
                      </div>
                      <h4 style="margin-top:10px" class="title">Party</h4>
                  </div>
                  </a>
              </div>
              <div class="col-md-2 col-sm-4" data-wow-duration="1.4s">
                  <a href="">
                      <div class="box">
                          <div class="icon-md" style="background: rgb(193, 23, 23, .5); border-radius:50%">
                          <img src="img/icon/ico-01.svg" style="color:white" alt="">
                          </div>
                          <h4 style="margin-top:10px" class="title">Wedding</h4>
                      </div>
                  </a>
              </div>
              <div class="col-md-2 col-sm-4" data-wow-duration="1.4s">
                  <a href="">
                      <div class="box">
                          <div class="icon-md" style="background: rgb(193, 23, 23, .5); border-radius:50%">
                          <img src="img/icon/ico-02.svg" style="color:white" alt="">
                          </div>
                          <h4 style="margin-top:10px" class="title">Conference</h4>
                      </div>
                  </a>
              </div>
              <div class="col-md-2 col-sm-4" data-wow-duration="1.4s">
                  <a href="">
                      <div class="box">
                          <div class="icon-md" style="background: rgb(193, 23, 23, .5); border-radius:50%">
                          <img src="img/icon/ico-06.svg" style="color:white" alt="">
                          </div>
                          <h4 style="margin-top:10px" class="title">Rental</h4>
                      </div>
                  </a>
              </div>
              <div class="col-md-2 col-sm-4" data-wow-duration="1.4s">
                  <a href="">
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
		<section class="bg-gray"> 
			<div class="container">
				<div class="row">  
          <div class="col-md-12">
              <div id="myCarousel" class="carousel carousels slide" data-ride="carousels" data-interval="0"> 
                  <header class="section-header">
                      <h3>Best EO</h3>
                      <br>
                    </header>
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                    </ol>   
                    <div class="carousel-inner">
                        <div class="item carousel-item active">
                                <div class="row">
                                <div class="col-sm-3">
                                    <div class="thumb-wrappers">
                                    <div class="img-box">
                                        <img src="img/EO/eo-1.png" class="img-responsive img-fluid img-rd" alt="">									
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Parama Creative</h4>									
                                        <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        </div>
                                        <p class="item-price"><i class="fa fa-map-marker"></i> <b> Jakarta Pusat</b></p>
                                        <a href="#" class="btn btn-primary">Ajukan Penawaran</a>
                                    </div>						
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrappers">
                                        <div class="img-box">
                                        <img src="img/EO/eo-3.jpg" class="img-responsive img-fluid img-rd" alt="">									
                                        </div>
                                        <div class="thumb-content">
                                        <h4>Moment n Co.</h4>									
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <p class="item-price"><i class="fa fa-map-marker" aria-hidden="true"></i> <b> Jakarta Timur</b></p>
                                        <a href="#" class="btn btn-primary">Ajukan Penawaran</a>
                                        </div>						
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrappers">
                                    <div class="img-box">
                                        <img src="img/EO/eo-4.jpg" class="img-responsive img-fluid" alt="">									
                                    </div>
                                    <div class="thumb-content">
                                        <h4>FUN Party</h4>									
                                        <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        </div>
                                        <p class="item-price"><i class="fa fa-map-marker" aria-hidden="true"></i> <b> Jakarta Timur</b></p>
                                        <a href="#" class="btn btn-primary">Ajukan Penawaran</a>
                                    </div>						
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrappers">
                                    <div class="img-box">
                                        <img src="img/EO/mama.jpg" class="img-responsive img-fluid img-rd" alt="">									
                                    </div>
                                    <div class="thumb-content">
                                        <h4>MAM EO</h4>									
                                        <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        </div>
                                        <p class="item-price"><i class="fa fa-map-marker" aria-hidden="true"></i> <b> Jakarta Timur</b></p>
                                        <a href="#" class="btn btn-primary">Ajukan Penawaran</a>
                                    </div>						
                                    </div>
                                </div>
                                </div>
                                <br><br>
                        </div>
                        <div class="item carousel-item">
                                <div class="row">
                                <div class="col-sm-3">
                                    <div class="thumb-wrappers">
                                    <div class="img-box">
                                        <img src="img/EO/eo-1.png" class="img-responsive img-fluid img-rd" alt="">									
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Parama Creative</h4>									
                                        <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        </div>
                                        <p class="item-price"><i class="fa fa-map-marker"></i> <b> Jakarta Pusat</b></p>
                                        <a href="#" class="btn btn-primary">Ajukan Penawaran</a>
                                    </div>						
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrappers">
                                        <div class="img-box">
                                        <img src="img/EO/eo-3.jpg" class="img-responsive img-fluid img-rd" alt="">									
                                        </div>
                                        <div class="thumb-content">
                                        <h4>Moment n Co.</h4>									
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <p class="item-price"><i class="fa fa-map-marker" aria-hidden="true"></i> <b> Jakarta Timur</b></p>
                                        <a href="#" class="btn btn-primary">Ajukan Penawaran</a>
                                        </div>						
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrappers">
                                    <div class="img-box">
                                        <img src="img/EO/eo-4.jpg" class="img-responsive img-fluid" alt="">									
                                    </div>
                                    <div class="thumb-content">
                                        <h4>FUN Party</h4>									
                                        <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        </div>
                                        <p class="item-price"><i class="fa fa-map-marker" aria-hidden="true"></i> <b> Jakarta Timur</b></p>
                                        <a href="#" class="btn btn-primary">Ajukan Penawaran</a>
                                    </div>						
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrappers">
                                    <div class="img-box">
                                        <img src="img/EO/mama.jpg" class="img-responsive img-fluid img-rd" alt="">									
                                    </div>
                                    <div class="thumb-content">
                                        <h4>MAM EO</h4>									
                                        <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        </div>
                                        <p class="item-price"><i class="fa fa-map-marker" aria-hidden="true"></i> <b> Jakarta Timur</b></p>
                                        <a href="#" class="btn btn-primary">Ajukan Penawaran</a>
                                    </div>						
                                    </div>
                                </div>
                                </div>
                                <br><br>
                        </div>
                        <div class="item carousel-item">
                                <div class="row">
                                <div class="col-sm-3">
                                    <div class="thumb-wrappers">
                                    <div class="img-box">
                                        <img src="img/EO/eo-1.png" class="img-responsive img-fluid img-rd" alt="">									
                                    </div>
                                    <div class="thumb-content">
                                        <h4>Parama Creative</h4>									
                                        <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        </div>
                                        <p class="item-price"><i class="fa fa-map-marker"></i> <b> Jakarta Pusat</b></p>
                                        <a href="#" class="btn btn-primary">Ajukan Penawaran</a>
                                    </div>						
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrappers">
                                        <div class="img-box">
                                        <img src="img/EO/eo-3.jpg" class="img-responsive img-fluid img-rd" alt="">									
                                        </div>
                                        <div class="thumb-content">
                                        <h4>Moment n Co.</h4>									
                                        <div class="star-rating">
                                            <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                            </ul>
                                        </div>
                                        <p class="item-price"><i class="fa fa-map-marker" aria-hidden="true"></i> <b> Jakarta Timur</b></p>
                                        <a href="#" class="btn btn-primary">Ajukan Penawaran</a>
                                        </div>						
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrappers">
                                    <div class="img-box">
                                        <img src="img/EO/eo-4.jpg" class="img-responsive img-fluid" alt="">									
                                    </div>
                                    <div class="thumb-content">
                                        <h4>FUN Party</h4>									
                                        <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        </div>
                                        <p class="item-price"><i class="fa fa-map-marker" aria-hidden="true"></i> <b> Jakarta Timur</b></p>
                                        <a href="#" class="btn btn-primary">Ajukan Penawaran</a>
                                    </div>						
                                    </div>
                                </div>
                                <div class="col-sm-3">
                                    <div class="thumb-wrappers">
                                    <div class="img-box">
                                        <img src="img/EO/mama.jpg" class="img-responsive img-fluid img-rd" alt="">									
                                    </div>
                                    <div class="thumb-content">
                                        <h4>MAM EO</h4>									
                                        <div class="star-rating">
                                        <ul class="list-inline">
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star"></i></li>
                                            <li class="list-inline-item"><i class="fa fa-star-o"></i></li>
                                        </ul>
                                        </div>
                                        <p class="item-price"><i class="fa fa-map-marker" aria-hidden="true"></i> <b> Jakarta Timur</b></p>
                                        <a href="#" class="btn btn-primary">Ajukan Penawaran</a>
                                    </div>						
                                    </div>
                                </div>
                                </div>
                                <br><br>
                        </div>
                    </div>
                    <!-- Carousel controls -->
                    <a class="carousel-control left carousel-control-prev" href="#myCarousel" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a class="carousel-control right carousel-control-next" href="#myCarousel" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>
              </div>
          </div> 
				</div>
			</div>                          		                            
    </section>
    <section class="section-bg"> 
        <div class="container">
            <br>
            <header class="section-header">
                <h3 class="title">Best Services</h3>
                <a href="" class="float-right">See All <i class="icon fa fa-chevron-right"></i></a>
                <br>
            </header>
            <br>
            <div class="row-sm">
                <div class="col-md-3 col-sm-6">
                  <a href="#">
                    <figure class="card card-product">
                        <div class="img-wrap"> <img class="" src="" alt="abc"></div>
                        <figcaption class="info-wrap">
                            <a href="#" class="title"><b>Paket Nikah</b></a>
                            <div class="action-wrap">
                              <div class="price-wrap">
                                <span class="price-new">Rp. 10.000,-</span>
                              </div> 
                            </div>
                        </figcaption>
                    </figure>
                  </a>
                </div>
            <br /> <br>
        </div>                    		                            
    </section> 
    <section class="bg-white" id="why-us">
        <div class="container">
          <header class="section-header">
            <h3>Kenapa Zenith?</h3>
            <br>
          </header>
          <div class="row">
            <div></div>
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
    <section id="call-to-action" class="">
        <div class="container">
          <div class="row">
            <div class="col-lg-9 text-center text-lg-left">
              <h3 class="cta-title">Buka EO mu Sekarang</h3>
              <p class="cta-text"> Yuk gabung bersama kami untuk mewujudkan peluang bisnis yang tinggi.</p>
            </div>
            <div class="col-lg-3 cta-btn-container text-center">
              <a href="" class="cta-btn align-middle" data-toggle="modal" data-target=".modalBukaEO">Buka EO</a>
            </div>
          </div>
        </div>
    </section>
  </main>

  <div class="modal fade modalBukaEO" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-login">
          <div class="modal-content">
            <div class="modal-header">				
              <h4 class="modal-title">Register</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <form action="/examples/actions/confirmation.php" method="post">
                <div class="form-group">
                  <div class="input-group">
                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user" style="margin-top:10px"></i></span>
                      <input type="text" class="form-control" name="nama" placeholder="Masukkan Nama" required="required">
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-envelope" style="margin-top:10px"></i></span>
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required="required">
                  </div>
                </div>
                <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-phone" style="margin-top:10px"></i></span>
                      <input type="text" class="form-control" name="no_telp" placeholder="No. Telp" required="required">
                    </div>
                </div>
                <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-lock" style="margin-top:10px"></i></span>
                    <input type="text" class="form-control" name="password" placeholder="Masukkan Password" required="required">
                  </div>
                </div>
                <p class="hint-text">Dengan Mendaftar, anda telah menyetujui <a href="#">Syarat & Kebijakan</a> Kami</p>
                <br>
                <div class="form-group">
                  <button type="submit" class="btn btn-primary btn-block btn-lg">Sign up</button>
                </div>
              </form>
            </div>
            <div class="modal-footer border-top-0">Sudah Punya akun? <a href="#"> Sign In</a></div>
          </div>
      </div>
  </div>
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
  <script>
    $('.carousel').carousel({
  interval: 2000
  })
  </script>

@if ($errors->any())
  <script>
      $('#modalRegist').modal('show');
  </script>
  @endif

@if(!empty($error_login))
<script>
$(function() {
    $('#modalLogin').modal('show');
});
</script>
@endif

<script>
$('body').keypress(function(e){
if (e.keyCode == 13)
{
    $('#searchPaket').submit();
}
});
</script>

<script>
  $('#role_as').change(function(){
    var title = $(this).val();
      $('#eoModal').modal('show');
      $('#modalRegist').modal('hide');

  });
</script>

</body>
</html>
@endsection