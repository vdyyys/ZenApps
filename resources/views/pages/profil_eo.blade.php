@extends('layout.app')
@section('content')
    <style>
        .img-circle{
          width: 100px;
          height: 100px;
        }
        .txt-small{
          font-size: 15px;
      }
    </style>
</head>
<body>
    <main id="main" class="section-bg">
            <br />  <br /> <br />
        <section class="container ">
                <div class="row">
                   <div class="col-md-12">
                        <div class="cover-photo" style="background-image: url('img/bg-1.jpg') ;">
                            <br /><br />
                            <div class="row">
                                    <div class="col-12 col-lg-4 col-xl-3 order-2 order-lg-1">
                                            <div class="card mb-4">
                                                <div class="card-body text-center">
                                                    <img src="{{ asset('img/EO/eo-2.jpg') }}" alt="Jono Organizer" class="img-fluid rounded-circle mb-2 img-circle" width="128" height="128">
                                                    <h4 class="card-title mb-0">Jono Organizer</h4>
                                                    <div class="text-muted mb-2">@JonoOrganizer</div>
                                                    <hr>
                                                    <p class="text-justify">Menerima Jasa Event MC, singer, make-up, fotografi, dancer, magcian, model, usher, band. Jakarta, Bandung dan luar kota lainnya. BASE DI JAKARTA
                                                            MC, Singer, Fotografi, Videographer, Band, DJ, dll</p>
                                                    <div>
                                                        <a class="btn btn-primary btn-sm" href="#">Hubungi</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="mb-1">
                                                            <p class="text-muted"><span><i class="fa fa-calendar"></i> 26 Oktober 2011</span></p>
                                                        </li>
                                                        <li class="mb-1">
                                                            <p class="text-muted"><span><i class="fa fa-location-arrow"></i> Jakarta</span></p>
                                                        </li>
                                                        <li class="mb-1">
                                                            <p class="text-muted"><span><i class="fa fa-whatsapp"></i> 081315234655</span></p>
                                                        </li>
                                                        <li class="mb-1">
                                                            <a class="link-to-website" href=""><span><i class="fa fa-globe"></i> www.jono-organizer.com</span></a>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                    </div>
                                    <div class="col-12 col-lg-8 col-xl-9 order-1 order-lg-2">
                                            <div class="card">
                                                <div class="card-body h-100">
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h4 class="mb-2"><strong>Hasil Kerja</strong></h4>   
                                                            <small class="float-right text-navy">See All</small>                   
                                                            <div class="row no-gutters mt-1">
                                                                <div class="col-3">
                                                                    <img src="{{ asset('img/items/cat-1.jpg') }}" class="img-fluid pr-1" alt="Unsplash">
                                                                </div>
                                                                <div class="col-3">
                                                                    <img src="{{ asset('img/items/cat-1.jpg') }}" class="img-fluid pl-1" alt="Unsplash">
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                
                                                    <hr>
                                                    <div class="media">
                                                        <div class="media-body">
                                                            <h3 class="mb-2"><strong>Paket Jono Organizer</strong></h3>
                                                            <br><br>
                                                            <div class="row">
                                                                    <main class="col-sm-12">
                                                                        <article class="">
                                                                            <div class="row">
                                                                                    <aside class="col-sm-3">
                                                                                        <div class="img-wrap"><img class="img-wrap" alt="gambar nikana" src="{{ asset('img/paket/weds.jpg') }}"></div>
                                                                                    </aside> 
                                                                                    <article class="row-lg-9">
                                                                                        <h4 class="title"> Paket Katering Diet</h4>
                                                                                            <h5 class="texts">Rp. 10,-</h5>
                                                                                            <p class="texts"> Cocok untuk Anda yang ingin menurunkan berat badan... </p>
                                                                                            <button class="btn btn-info"><i class="fa fa-info white"></i></button>
                                                                                            <button class="btn btn-warning"><i class="fa fa-pencil-square-o white"></i></button>
                                                                                            <button class="btn btn-danger"><i class="fa fa-trash white"></i></button>
                                                                                    </article>
                                                                            </div>
                                                                        </article>
                                                                        <hr>
                                                                            </div>
                                                                        </article>
                                                                    </main> 
                                                                </div>
                                                                <br />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                    </div>
                            </div>
                        </div>
                   </div>
                </div>
        </section>
    </main>
    
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
    <br /><br /><br /><br />
@endsection