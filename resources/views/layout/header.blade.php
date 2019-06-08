@php
$user = \Illuminate\Support\Facades\Auth::user();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Zen EO - Your Event Solution</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <!-- CSS Libraries -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">

  <!-- Custom CSS -->
  <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
  <link href="{{asset('css/ui.css')}}" rel="stylesheet">
  
  <!-- Dashboard Libraries  -->
  <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
  <link href="{{ asset('css/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
  <link href="{{ asset('css/plugins.min.css') }}" rel="stylesheet" type="text/css" />

  <!-- Specific CSS -->
  @if(Request::path() == '/')
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
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
<header id="header">
    <div class="container">
      <div class="logo float-left">
        <h1 class="text-light"><a href="{{ url('/') }}" class="scrollto"><span>ZEN</span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="#about">Tentang</a></li>
          <li><a href="{{ url('/mitra') }}">Mitra EO</a></li>
          <li>
              <a href="#" class="widget-header mr-3">
                <i style="font-size: 16pt" class="icon fa fa-shopping-basket"></i>
              </a>
          </li>
          <li>
              <a href="#" class="widget-header mr-3">
                <i style="font-size: 16pt" class="icon fa fa-bell"></i>
              </a>
          </li>
           <li>
                <div class="input-group">
                    <div class="form-group has-search">
                    <form action="{{url('/search')}}" method="post" id="searchPaket">
                    {{ csrf_field() }}
                        <span class="fa fa-glip fa-search form-control-feedback"></span>
                        <input type="text" class="form-controls form-control" name="paket" placeholder="Cari...">
                    </form>
                    </div>
                </div>
            </li>
          @if($user == null)
          <li><a href="" class="trigger-btn" data-toggle="modal" data-target="#modalLogin">LOGIN</a></li> 
          <li><a href="" class="trigger-btn" data-toggle="modal" data-target="#modalRegist">REGISTER</a></li>
          @elseif($user->isEo())
          <li class="drop-down"><a href="#"><span>Event Organizer</span></a>
                <ul>
                  <li><a href="{{ url('/dashboard')}}">Dashboard</a></li>
                  <li><a href="{{ url('/paket') }}">Paket</a></li>
                  <li><a href="{{ url('/logout') }}">Sign Out</a></li>
                </ul>
          </li>
          @else
          <li class="drop-down"><a href="#"><span>Jojo</span></a>
              <ul>
                <li><a href="" class="trigger-btn" data-toggle="modal" data-target="#modalRegistEO">Daftarkan EO</a></li>
                <li><a href="#">Edit Profil</a></li>
                <li><a href="#">My Order</a></li>
                <li><a href="{{ url('/logout') }}">Sign Out</a></li>
              </ul>
          </li>
          @endif
        </ul>
      </nav>
    </div>
  </header>

