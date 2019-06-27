@extends('layout.app')
@section('content')
<main id="main" class="section-bg2">
    <section class="container">
        <br />  <br />  <br /> <br />
        <div class="bg-white" style="margin-top:50px">
            <br /><br />  
            <header class="section-header">
                <h3 class="title">Booking Paket</h3>
                <p>{Event Organizer}</p>
            </header>
            <br /><br />
            <div class="container">
                <div class="offset-md-2 col-md-8">
                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-6 col-form-label"><b>Nama Pemesan</b></label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control" id="tgl_ambil" name="harga_paket" placeholder="" value="{{$user->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama_barang" class="col-sm-6 col-form-label"><b>Nama Eo Tujuan</b></label> 
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control" id="tgl_ambil" name="harga_paket" placeholder="" value="{{$eo->nama_eo}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_paket" class="col-sm-6 col-form-label"><b>Nama Paket Yang di pesan</b></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="tgl_ambil" name="harga_paket" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="des_pkt" class="col-sm-6 col-form-label"><b>Harga Total</b></label>
                        <div class="col-sm-6">
                            <input type="text" readonly class="form-control" id="tgl_ambil" name="harga_paket" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="tgl_ambil" class="col-sm-6 col-form-label"><b>Tanggal Acara</b></label>
                        <div class="col-sm-6">
                            <input type="date" class="form-control" id="tgl_ambil" name="harga_paket" placeholder="" value="">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="harga_paket" class="col-sm-6 col-form-label"><b>Metode pembayaran</b></label>
                        <div class="col-sm-6">
                            <input type="text" class="form-control" id="tgl_ambil" name="harga_paket" placeholder="" value="">
                        </div>
                    </div>
                    <br />
                    <div class="text-center">
                        <button href="{{ url('/dashboard') }}" class="btn btn-outline-danger" type="reset">Pesan Paket</button>
                    </div>
                    <br /><br />
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