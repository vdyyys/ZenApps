@extends('layout.app')
@section('content')
    <style>
        .ava-prof{
            width: 70px;
            height: 70px;
            position: relative;
            overflow: hidden;
        }
        .home-pho .img-fluid img{
            position: absolute;
            top: 0;
            left: 0;
            vertical-align: middle;
            background-size: cover;
        }
    </style>
<body>
<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>
<main class="section-bg2">
        <section class="section-content bg padding-y">
                <br><br>
              <div class="row">
                  <main class="col-sm-9">
                        <div class="card">
                            <div class="card-body h-100">
                                <div class="media">
                                    <div class="media-body">
                                        <div class="row">
                                            <main class="col-sm-12">
                                                <a href="">
                                                    <article>
                                                        <div class="row d-flex justify-content-center">
                                                            <aside class="col-sm-2">
                                                                <div class="ava-prof">
                                                                    <img class="home-pho" alt="notif" src="{{ asset('img/paket/weds.jpg') }}">
                                                                </div>
                                                            </aside> 
                                                            <article class="col-sm-9">
                                                                <h5 class="title"> Konfimasi Penerimaan Pesanan</h5>
                                                                <p class="texts">Pesanan BK005 telah diterima.. </p>
                                                                <div class="album-thumbnails">
                                                                </div>
                                                            </article>
                                                        </div> 
                                                        <hr>
                                                    </article>
                                                </a>
                                                      </main> 
                                                  </div>
                                                  <br />
                                          </div>
                                      </div>
                                  </div>
                              </div>

                    </main> 
              </div>
            </div> <!-- container .//  -->
            <br />
            <div class="row d-flex justify-content-center">
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                            </a>
                        </li>
                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                        <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </section>  
    </main>

      
  <!-- ./wrapper -->

  <script src="{{asset('dist/js/demo.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
@endsection