@php
$user = \Illuminate\Support\Facades\Auth::user();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Zen EO - Your Event Solution</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <!-- CSS Libraries -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  
  <!-- Dashboard Libraries  -->
  <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
  <link href="{{ asset('css/plugins.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Specific CSS -->
  @if(Request::path() == '/')
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('css/fix.css') }}" rel="stylesheet" type="text/css"/>
  @else
    <link href="{{asset('css/measure.css')}}" rel="stylesheet">
  @endif

  <!-- Javascript -->
  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/mobile-nav/mobile-nav.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('js/main.js') }}"></script>
  <script src="{{ asset('js/jquery.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/js.cookie.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.blockui.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap-switch.min.js')}}" type="text/javascript"></script>
  <script src="{{ asset('js/datatable.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/datatables.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/datatables.bootstrap.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/bootstrap-datepicker.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/app.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/table-datatables-buttons.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/dashboard.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/moment.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.sparkline.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.flot.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/layout.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/demo.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/quick-sidebar.min.js') }}" type="text/javascript"></script>
  <script src="{{ asset('js/quick-nav.min.js')}}" type="text/javascript"></script>
</head>
<body>
<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>
<header id="header">
  <div class="container">
    <div class="logo float-left">
      <h1 class="text-light"><a href="{{ url('/') }}" class="scrollto"><span>ZEN</span></a></h1>
    </div>

    <nav class="main-nav float-right d-none d-lg-block">
      <ul>
        <li><a href="{{ url('/about')}}">Tentang</a></li>
        <li><a href="{{ url('/eo') }}">Mitra EO</a></li>
        <li>
            <a href="{{ url('/cart')}}" class="widget-header mr-3">
              <i style="font-size: 16pt" class="icon fa fa-shopping-basket"></i>
            </a>
        </li>
        <li>
            <a href="{{ url('/notifikasi') }}" class="widget-header mr-3">
              <i style="font-size: 16pt" class="icon fa fa-bell"></i>
            </a>
        </li>
        <li>
            <div class="input-group">
                <div class="form-group has-search">
                  <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-white my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
                  </form>
                </div>
            </div>
        </li>
        @if($user == null)
        <li><a href="" class="trigger-btn" data-toggle="modal" data-target="#modalLogin">LOGIN</a></li> 
        <li><a href="" class="trigger-btn" data-toggle="modal" data-target="#modalRegist">REGISTER</a></li>
        @elseif($user->isEo())
        <li class="drop-down"><a href="#"><span>{{App\Eo::where('user_id', $user->id)->first()->nama_eo}} Organizer</span></a>
          <ul>
            <li><a href="{{ route('user')}}">Dashboard</a></li>
            <li><a href="{{ url('/paket') }}">Paket</a></li>
            <li><a href="#" onclick="document.getElementById('logout-form').submit();">Sign Out</a></li>
          </ul>
        </li>
        @else
        <li class="drop-down"><a href="#"><span>{{$user->name}}</span></a>
          <ul>
            <li><a href="{{route('eo.create')}}" class="trigger-btn">Daftarkan EO</a></li>
            <li><a href="#">My Profile</a></li>
            <li><a href="#">My Order</a></li>
            <li><a href="#" onclick="document.getElementById('logout-form').submit();">Sign Out</a></li>
          </ul>
        </li>
        @endif
      </ul>
    </nav>
  </div>
  <form style="display:none;" id="logout-form" action="{{route('logout')}}" method="POST">
    {{csrf_field()}}
  </form>
</header>

<!-- Modal Login -->
<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">				
        <h4 class="modal-title">Sign In</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="{{route('login')}}" method="post">
        {{csrf_field()}}
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user" style="margin-top:10px"></i></span>
              <input type="text" class="form-control" name="email" placeholder="Masukkan email" required="required">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock" style="margin-top:10px"></i></span>
              <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="required">
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Sign In</button>
          </div>
          <p class="hint-text"><a href="#">Lupa Password?</a></p>
        </form>
      </div>
      <div class="modal-footer">Belum Punya Akun? <a href="#">Daftar di sini</a></div>
    </div>
  </div>
</div>

<!-- Modal Register -->
<div class="modal fade" id="modalRegist" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">				
        <h4 class="modal-title">Register</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="{{route('register')}}" method="post">
        {{csrf_field()}}
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user" style="margin-top:10px"></i></span>
              <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" required="required" value="{{ old('name') }}">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope" style="margin-top:10px"></i></span>
              <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required="required" value="{{ old('email') }}">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-phone" style="margin-top:10px"></i></span>
              <input type="text" class="form-control" name="no_telp" placeholder="No. Telp" required="required" value="{{ old('no_telp') }}">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock" style="margin-top:10px"></i></span>
              <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="required" value="{{ old('password') }}">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-unlock-alt" style="margin-top:10px"></i></span>
              <input type="password" class="form-control" name="password_confirmation" placeholder="Verifikasi Password" required="required" value="{{ old('password') }}">
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
          </div>
          <p class="hint-text"><a href="#">Lupa Password?</a></p>
        </form>
      </div>
      <div class="modal-footer">Belum Punya Akun? <a href="#">Daftar di sini</a></div>
    </div>
  </div>
</div>

<!-- Modal Register EO -->
<div class="modal fade" id="modalRegistEO" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-login">
    <div class="modal-content">
      <div class="modal-header">    
        <h4 class="modal-title">Register Event Organizer</h4>
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
      </div>
      <div class="modal-body">
        <form action="" method="post">
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-user" style="margin-top:10px"></i></span>
              <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" required="required" value="{{ old('name') }}">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-envelope" style="margin-top:10px"></i></span>
              <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required="required" value="{{ old('email') }}">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-phone" style="margin-top:10px"></i></span>
              <input type="text" class="form-control" name="no_telp" placeholder="No. Telp" required="required" value="{{ old('no_telp') }}">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-lock" style="margin-top:10px"></i></span>
              <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="required" value="{{ old('password') }}">
            </div>
          </div>
          <div class="form-group">
            <div class="input-group">
              <span class="input-group-addon"><i class="fa fa-unlock-alt" style="margin-top:10px"></i></span>
              <input type="password" class="form-control" name="password" placeholder="Verifikasi Password" required="required" value="{{ old('password') }}">
            </div>
          </div>
          <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block btn-lg">Register</button>
          </div>
          <p class="hint-text"><a href="#">Lupa Password?</a></p>
        </form>
      </div>
      <div class="modal-footer">Belum Punya Akun? <a href="#">Daftar di sini</a></div>
    </div>
  </div>
</div>
