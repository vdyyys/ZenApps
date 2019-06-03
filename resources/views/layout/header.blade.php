@if(Request::path() == '/')
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Zeninth EO - Your Event Solution</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="{{asset('img/favicon.png')}}" rel="icon">
  <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fix.css') }}" rel="stylesheet" type="text/css"/>

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{asset('lib/animate/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/ionicons/css/ionicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
  <link href="{{asset('lib/lightbox/css/lightbox.min.css')}}" rel="stylesheet">
  <link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/ui.css')}}" rel="stylesheet">
  <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
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
          <li><a href="#about">Tentang</a></li>
          <li><a href="#about">Mitra EO</a></li>
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

            <li><a href="" class="trigger-btn" data-toggle="modal" data-target="#modalLogin">LOGIN</a></li> 
          <li><a href="" class="trigger-btn" data-toggle="modal" data-target="#modalRegist">REGISTER</a></li>
          <li class="drop-down"><a href="#"><span>EVENT ORGANIZER</span></a>
                <ul>
                  <li><a href="{{ url('/dashboard')}}">Dashboard</a></li>
                  <li><a href="{{ url('/paket') }}">Paket</a></li>
                  <li><a href="{{ url('/logout') }}">Sign Out</a></li>
                </ul>
          </li>
          <li class="drop-down"><a href="#"><span>JOJO</span></a>
              <ul>
              <li><a href="" class="trigger-btn" data-toggle="modal" data-target="#modalRegistEO">Daftarkan EO</a></li>
                <li><a href="#">Edit Profil</a></li>
                <li><a href="#">My Order</a></li>
                <li><a href="{{ url('/logout') }}">Sign Out</a></li>
              </ul>
        </ul>
      </nav>
    </div>
  </header>
  <div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
              <div class="modal-header">				
                <h4 class="modal-title">Sign In</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                @php $error_login = Session::get('error'); @endphp
                <form action="/login" method="post">
                {{ csrf_field() }}
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user" style="margin-top:10px"></i></span>
                      <input type="text" class="form-control" name="no_telp" placeholder="Masukkan No Telp" required="required">
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock" style="margin-top:10px"></i></span>
                      <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="required">
                    </div>
                  </div>
                  @if (!empty($error))
                  <div class="form-group">
                    <strong id="error" style="margin-left:10px;color:gray;font-size:10px;">{{ $error }}</strong>
                  </div>
                  @endif
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
    <div class="modal fade" id="modalRegist" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
              <div class="modal-header">				
                <h4 class="modal-title">Register</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <form action="{{url('/register')}}" method="post">
                  {{ csrf_field() }}
                  <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-user" style="margin-top:10px"></i></span>
                        <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" required="required" value="{{ old('name') }}">
                      </div>
                  @if ($errors->first('name'))
                    <strong id="error" style="margin-left:10px;color:gray;font-size:10px;">{{ $errors->first('name') }}</strong>
                  @endif
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-envelope" style="margin-top:10px"></i></span>
                      <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required="required" value="{{ old('email') }}">
                    </div>
                    @if ($errors->first('email'))
                      <strong id="error" style="margin-left:10px;color:gray;font-size:10px;">{{ $errors->first('email') }}</strong>
                    @endif
                  </div>
                  <div class="form-group">
                      <div class="input-group">
                        <span class="input-group-addon"><i class="fa fa-phone" style="margin-top:10px"></i></span>
                        <input type="text" class="form-control" name="no_telp" placeholder="No. Telp" required="required" value="{{ old('no_telp') }}">
                      </div>
                      @if ($errors->first('no_telp'))
                        <strong id="error" style="margin-left:10px;color:gray;font-size:10px;">{{ $errors->first('no_telp') }}</strong>
                      @endif
                  </div>
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-lock" style="margin-top:10px"></i></span>
                      <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="required" value="{{ old('password') }}">
                    </div>
                    @if ($errors->first('password'))
                      <strong id="error" style="margin-left:10px;color:gray;font-size:10px;">{{ $errors->first('password') }}</strong>
                    @endif
                  </div>
                  <p class="hint-text">Dengan Mendaftar, anda telah menyetujui <a href="#">Syarat & Kebijakan</a> Kami</p>
                  <br>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Sign up</button>
                  </div>
                  <div class="modal-footer border-top-0">
                      <p class="hint-text">Sudah Punya akun? <a href="#"> Sign In</p>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>
    <div id="modalRegistEO" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-login  modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">				
            <h4 class="modal-title">Buka Event Organizer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <form action="{{'/registereo'}}" method="post">
                {{ csrf_field() }}
              <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-building fa_color" style="margin-top:10px"></i></span>
                    <input type="text" class="form-control" name="namaeo" placeholder="Nama EO" required>
                  </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa_color" style="margin-top:10px"></i></span>
                  <input type="email" class="form-control" name="emaileo" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-map fa_color" style="margin-top:10px"></i></span>
                  <input type="text" class="form-control" name="alamateo" placeholder="Alamat" required>
                </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone fa_color" style="margin-top:10px"></i></span>
                    <input type="text" class="form-control" name="kontakeo" placeholder="Kontak" required="required">
                  </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-globe fa_color" style="margin-top:10px"></i></span>
                  <input type="text" class="form-control" name="linkeo" placeholder="Link (opsional)">
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="gambar_profil_eo" accept="image/*" id="gambarprofil" required>
                  <label class="custom-file-label" for="gambarprofil">Foto Profil</label>
                </div>
              </div>            
              <p class="hint-text"> <a href="#"></a> Dengan Mendaftar, anda telah menyetujui <a href="">Syarat & Ketentuan</a> Kami</p>  
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Sign up</button>
              </div>
              <div class="modal-footer border-top-0">
                  <p class="hint-text">Sudah Punya akun? <a href="#"> Sign In</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

  <script src="{{ asset('lib/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('lib/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('lib/easing/easing.min.js') }}"></script>
  <script src="{{ asset('lib/mobile-nav/mobile-nav.js') }}"></script>
  <script src="{{ asset('lib/wow/wow.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
  <script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('lib/isotope/isotope.pkgd.min.js')}}"></script>
  <!-- Template Main Javascript File -->
  <script src="{{ asset('js/main.js') }}"></script>

@else
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Zeninth EO - Your Event Solution</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Favicons -->
  <link href="img/favicon.png" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="{{ asset('lib/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('css/fix.css') }}" rel="stylesheet" type="text/css"/>

  <!-- Libraries CSS Files -->
  <link href="{{ asset('lib/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/ionicons/css/ionicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
  <link href="{{ asset('lib/lightbox/css/lightbox.min.css') }}" rel="stylesheet">
  <link rel='stylesheet' href="{{ asset ('https://use.fontawesome.com/releases/v5.7.0/css/all.css')}}" integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>
  <link href="{{ asset('css/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/datatables.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/datatables.bootstrap.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/bootstrap-datepicker3.min.css') }}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('css/components.min.css') }}" rel="stylesheet" id="style_components" type="text/css" />
  <link href="{{ asset('css/plugins.min.css') }}" rel="stylesheet" type="text/css" />


  <!-- Main Stylesheet File -->
  <link href="{{asset('css/style.css')}}" rel="stylesheet">
  <link href="{{asset('css/carousel.css')}}" rel="stylesheet">
  <link href="{{asset('css/measure.css')}}" rel="stylesheet">
  <link href="{{asset('css/bootstrap.css')}}" rel="stylesheet" type="text/css"/>
</head>
<button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>
  <header id="header">
    <div class="container">
      <div class="logo float-left">
        <h1 class="text-light"><a href="{{ url('/') }}" class="scrollto"><span>ZEN</span></a></h1>
      </div>

      <nav class="main-nav float-right d-none d-lg-block">
        <ul>
          <li><a href="#about">Tentang</a></li>
          <li><a href="#about">Mitra EO</a></li>
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
          <li><a href="" class="trigger-btn" data-toggle="modal" data-target="#modalLogin">LOGIN</a></li> 
          <li><a href="" class="trigger-btn" data-toggle="modal" data-target="#modalRegist">REGISTER</a></li>
          <li class="drop-down"><a href="#"><span>Event Organizer</span></a>
                <ul>
                  <li><a href="{{ url('/dashboard')}}">Dashboard</a></li>
                  <li><a href="{{ url('/paket') }}">Paket</a></li>
                  <li><a href="{{ url('/logout') }}">Sign Out</a></li>
                </ul>
          </li>
          <li class="drop-down"><a href="#"><span>Jojo</span></a>
              <ul>
              <li><a href="" class="trigger-btn" data-toggle="modal" data-target="#modalRegistEO">Daftarkan EO</a></li>
                <li><a href="#">Edit Profil</a></li>
                <li><a href="#">My Order</a></li>
                <li><a href="{{ url('/logout') }}">Sign Out</a></li>
              </ul>
        </ul>
      </nav>
    </div>
  </header>
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
@endif

<div class="modal fade" id="modalLogin" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
              <div class="modal-header">				
                <h4 class="modal-title">Sign In</h4>
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              </div>
              <div class="modal-body">
                <form action="" method="post">
                  <div class="form-group">
                    <div class="input-group">
                      <span class="input-group-addon"><i class="fa fa-user" style="margin-top:10px"></i></span>
                      <input type="text" class="form-control" name="no_telp" placeholder="Masukkan No Telp" required="required">
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

    <div class="modal fade" id="modalRegist" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-login">
            <div class="modal-content">
              <div class="modal-header">				
                <h4 class="modal-title">Register</h4>
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
                  <p class="hint-text">Dengan Mendaftar, anda telah menyetujui <a href="#">Syarat & Kebijakan</a> Kami</p>
                  <br>
                  <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block btn-lg">Sign up</button>
                  </div>
                  <div class="modal-footer border-top-0">
                      <p class="hint-text">Sudah Punya akun? <a href="#"> Sign In</p>
                  </div>
                </form>
              </div>
            </div>
        </div>
    </div>

    <div id="modalRegistEO" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-login  modal-dialog-scrollable">
        <div class="modal-content">
          <div class="modal-header">				
            <h4 class="modal-title">Buka Event Organizer</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          </div>
          <div class="modal-body">
            <form action="{{'/registereo'}}" method="post">
                {{ csrf_field() }}
              <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-building fa_color" style="margin-top:10px"></i></span>
                    <input type="text" class="form-control" name="namaeo" placeholder="Nama EO" required>
                  </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-envelope fa_color" style="margin-top:10px"></i></span>
                  <input type="email" class="form-control" name="emaileo" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-map fa_color" style="margin-top:10px"></i></span>
                  <input type="text" class="form-control" name="alamateo" placeholder="Alamat" required>
                </div>
              </div>
              <div class="form-group">
                  <div class="input-group">
                    <span class="input-group-addon"><i class="fa fa-phone fa_color" style="margin-top:10px"></i></span>
                    <input type="text" class="form-control" name="kontakeo" placeholder="Kontak" required="required">
                  </div>
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon"><i class="fa fa-globe fa_color" style="margin-top:10px"></i></span>
                  <input type="text" class="form-control" name="linkeo" placeholder="Link (opsional)">
                </div>
              </div>
              <div class="form-group">
                <div class="custom-file">
                  <input type="file" class="custom-file-input" name="gambar_profil_eo" accept="image/*" id="gambarprofil" required>
                  <label class="custom-file-label" for="gambarprofil">Foto Profil</label>
                </div>
              </div>            
              <p class="hint-text"> <a href="#"></a> Dengan Mendaftar, anda telah menyetujui <a href="">Syarat & Ketentuan</a> Kami</p>  
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block btn-lg">Sign up</button>
              </div>
              <div class="modal-footer border-top-0">
                  <p class="hint-text">Sudah Punya akun? <a href="#"> Sign In</p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>