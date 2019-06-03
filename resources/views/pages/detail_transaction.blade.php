@extends('layout.app')
@section('content')
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Pengambilan Paket</title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="{{asset('img/favicon.png')}}" rel="icon">
    <link href="{{asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
    <link href="{{asset('css/style2.css')}}" rel="stylesheet">
    <link href="{{asset('css/ui.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,500,600,700,700i|Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="{{asset('lib/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('css/fix.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{asset('lib/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">

</head>
<body>
    <button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>
    <main id="main" class="section-bg2">
        <section class="container">
            <br />  <br />  <br /> <br />
            <div class=" bg-white" style="margin-top:50px">
                    <br /><br />  
                    <header class="section-header">
                        <h3 class="title">Form Ambil Paket</h3>
                    </header>
                    <br /><br />
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <form action="/form_paket" method="post">
                            @csrf
                                <div class="form-group row">
                                    <label for="nama_cust" class="col-sm-3 col-form-label"><b> Nama Pembeli</b></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="nama_cust" value="Jojo" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label"><b> Email</b></label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" value="jojo@jojo.com" name="email"  readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telpon" class="col-sm-3 col-form-label"><b> Nomor Telepon</b></label>
                                    <div class="col-sm-9">
                                      <input type="number" class="form-control" name="no_telp" value="+628581155975" readonly id="telpon" placeholder="0813xxxx">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kode_book" class="col-sm-3 col-form-label"><b> Kode Booking</b></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" value="EO-1234567" id="kode_book" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_barang" class="col-sm-3 col-form-label"><b> Nama Paket yang Diambil</b></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_barang" name="nama_paket" placeholder="" value="Paket Nikah ABC" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="des_pkt" class="col-sm-3 col-form-label"><b>Deskripsi</b></label>
                                    <div class="col-sm-9">
                                        <textarea name="deskrisi_pkt" class="form-control" name="deskripsi" id="des_pkt" rows="3"  readonly>nikah nikah </textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_ambil" class="col-sm-3 col-form-label"><b>Tanggal Acara</b></label>
                                    <div class="col-sm-9">
                                        <input type="date" class="form-control" id="tgl_acara" name="tanggalacara">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_paket" class="col-sm-3 col-form-label"><b>Harga Paket</b></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="tgl_ambil" name="harga_paket" placeholder="" value="10.000.000" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_paket" class="col-sm-3 col-form-label"><b>Pembayaran</b></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" name="harga_paket" value="Transfer" readonly>
                                    </div>
                                </div>
                                <br />
                                <div class="text-center">
                                    <button class="btn btn-outline-danger" type="reset">Kembali</button>
                                    <button class="btn btn-danger" type="submit">Ambil Paket</button>
                                </div>
                                <br /><br />
                            </form>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <br />
            </div>
             <div class=" bg-white" style="margin-top:50px">
                    <br /><br />  
                    <header class="section-header">
                        <h3 class="title">Form Ambil Paket</h3>
                    </header>
                    <br /><br />
                    <div class="row">
                        <div class="col-md-2"></div>
                        <div class="col-md-8">
                            <form action="">
                                <div class="form-group row">
                                    <p class="col-sm-3 col-form-label"><b> Nama Pembeli</b></p>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="nama_cust" value="Joko Mulyadi" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label"><b> Email</b></label>
                                    <div class="col-sm-9">
                                        <input type="email" class="form-control" id="email" placeholder="" name="email" value="jokomul13@gmail.com">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telpon" class="col-sm-3 col-form-label"><b> Nomor Telepon</b></label>
                                    <div class="col-sm-9">
                                      <input type="number" class="form-control" name="no_telpon" id="telpon" placeholder="0813xxxx" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kode_book" class="col-sm-3 col-form-label"><b> Kode Booking</b></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" value="EO-1234567" id="kode_book" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_barang" class="col-sm-3 col-form-label"><b> Nama Paket yang Diambil</b></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="nama_barang" name="nama_barang" placeholder="" name="email" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="des_pkt" class="col-sm-3 col-form-label"><b>Deskripsi</b></label>
                                    <div class="col-sm-9">
                                        <textarea name="deskrisi_pkt" class="form-control" name="" id="des_pkt" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_ambil" class="col-sm-3 col-form-label"><b>Tanggal Ambil</b></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="tgl_ambil" name="nama_barang" placeholder="" name="email" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_paket" class="col-sm-3 col-form-label"><b>Harga Paket</b></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control" id="tgl_ambil" name="nama_barang" placeholder="" name="harga_paket" value="">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_paket" class="col-sm-3 col-form-label"><b>Pembayaran</b></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="tgl_ambil" name="nama_barang" placeholder="" name="harga_paket" value="Transfer" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_paket" class="col-sm-3 col-form-label"><b>Status Pembayaran</b></label>
                                    <div class="col-sm-9">
                                        <input type="text" class="form-control-plaintext" id="tgl_ambil" name="nama_barang" placeholder="" name="harga_paket" value="Sudah Membayar Uang Penuh" readonly>
                                    </div>
                                </div>
                                <br />
                                <div class="text-center">
                                    <button class="btn btn-outline-danger" type="reset">Kembali</button>
                                    <button class="btn btn-danger" type="submit">Ambil Paket</button>
                                </div>
                                <br /><br />
                            </form>
                        </div>
                        <div class="col-md-2"></div>
                    </div>
                    <br />
            </div>
        </section>
        <br /><br /><br /><br /><br />
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