@extends('layout.app')
@section('content')
<body>
    <button type="button" class="mobile-nav-toggle d-lg-none"><i class="fa fa-bars"></i></button>
    <main id="main" class="section-bg2">
        <section class="container">
            <br />  <br />  <br /> <br />
            <div class="bg-white" style="margin-top:50px">
                    <br /><br />  
                    <header class="section-header">
                        <h3 class="title">Detail Transaksi</h3>
                        <p>No Invoice : EO-2134567890</p>
                    </header>
                    <br /><br />
                    <div class="container">
                        <div class="offset-md-2 col-md-8">
                                <div class="form-group row">
                                    <label for="nama_cust" class="col-sm-3 col-form-label"><b> Nama Pembeli</b></label>
                                    <div class="col-sm-9">
                                        <label for="" class="col-form-label">Jojo</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="email" class="col-sm-3 col-form-label"><b> Email</b></label>
                                    <div class="col-sm-9">
                                        <label for="" class="col-form-label">Jojo@gmail.com</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="telpon" class="col-sm-3 col-form-label"><b> Nomor Telepon</b></label>
                                    <div class="col-sm-9">
                                    <label for="" class="col-form-label">+6285811515975</label>

                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="kode_book" class="col-sm-3 col-form-label"><b> Kode Booking</b></label>
                                    <div class="col-sm-9">
                                        <label for="" class="col-form-label">Jojo@gmail.com</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="nama_barang" class="col-sm-6 col-form-label"><b> Nama Paket yang Diambil</b></label>
                                    <div class="col-sm-6">
                                        <label for="" class="col-form-label">Jojo@gmail.com</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="des_pkt" class="col-sm-3 col-form-label"><b>Deskripsi</b></label>
                                    <div class="col-sm-9">
                                        <label for="" class="col-form-label">wkwkwkkwkwkwkkwkkwkkw</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="tgl_ambil" class="col-sm-3 col-form-label"><b>Tanggal Acara</b></label>
                                    <div class="col-sm-9">
                                        <label for="" class="col-form-label">11-01-2019</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_paket" class="col-sm-3 col-form-label"><b>Harga Paket</b></label>
                                    <div class="col-sm-9">
                                        <label for="" class="col-form-label">Rp. 10.000.000,-</label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="harga_paket" class="col-sm-3 col-form-label"><b>Pembayaran</b></label>
                                    <div class="col-sm-9">
                                        <label for="" class="col-form-label">Transfer</label>
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