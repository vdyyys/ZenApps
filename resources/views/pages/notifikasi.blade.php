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
<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>
<main class="section-bg2">
    <section class="section-content bg padding-y">
        <br><br>
        <!-- Notification Content -->
        <div class="row-lg-12 d-flex justify-content-center">
            <main>
                <div class="card">
                    <div class="card-body h-100">
                        <div class="media">
                            <div class="media-body">
                                <div class="row">
                                    <main class="col-sm-12">
                                        <article>
                                            <div class="row d-flex justify-content-center">
                                                <aside class="col-md-3">
                                                    <div class="ava-prof">
                                                        <img class="home-pho" alt="notif" src="{{ asset('img/paket/weds.jpg') }}">
                                                    </div>
                                                </aside> 
                                                <aside class="col-md-9">
                                                    <h5 class="title"> Konfimasi Penerimaan Pesanan Paket Nikah</h5>
                                                    <p class="texts">Pesanan BK00535481749012 telah diterima.. </p>
                                                    <div>
                                                        <button class="btn btn-warning">Approve</button>
                                                        <button class="btn btn-danger">Disapprove</button>
                                                    </div>
                                                </aside>
                                            </div> 
                                            <hr>
                                        </article>
                                    </main> 
                                </div>
                                <br />
                            </div>
                        </div>
                    </div>
                </div>
            </main> 
        </div>
        <br />

        <!-- Pagination -->
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

  <script src="{{asset('dist/js/demo.js')}}"></script>
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('lib/wow/wow.min.js')}}"></script>
  <script src="{{asset('lib/waypoints/waypoints.min.js')}}"></script>
  <script src="{{asset('js/main.js')}}"></script>
</body>
</html>
@endsection