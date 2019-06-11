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
                                                    <h4 class="card-title mb-0">{{$eos->nama_eo}}</h4>
                                                    <div class="text-muted mb-2">{{$eos->email}}</div>
                                                    <hr>
                                                    <p class="text-justify">{{$eos->deskripsi}}</p>
                                                    <div>
                                                        <a class="btn btn-primary btn-sm" href="#">Hubungi</a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card mb-4">
                                                <div class="card-body">
                                                    <ul class="list-unstyled mb-0">
                                                        <li class="mb-1">
                                                            <p class="text-muted"><span><i class="fa fa-location-arrow"></i> {{$eos->alamat}}</span></p>
                                                        </li>
                                                        <li class="mb-1">
                                                            <p class="text-muted"><span><i class="fa fa-whatsapp"></i> {{$eos->kontak}}</span></p>
                                                        </li>
                                                        <li class="mb-1">
                                                            <a class="link-to-website" href=""><span><i class="fa fa-globe"></i> {{$eos->link}}</span></a>
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
                                                            <h3 class="mb-2"><strong>Paket</strong></h3>
                                                            @if($user->id == $eos->user_id)
                                                            <button class="btn btn-primary" data-toggle="modal" data-target="#modalTambahPaket"><i class="fa fa-plus white"></i></button>
                                                            @endif
                                                            <br><br>
                                                            @foreach($pakets as $p)
                                                            <div class="row">
                                                                <main class="col-sm-12">
                                                                    <article class="">
                                                                        <div class="row">
                                                                            <aside class="col-sm-3">
                                                                                <div class="img-wrap"><img class="img-wrap" alt="{{$p->gambar_paket}}" src="{{ asset('img/gambar_paket/'.$p->gambar_paket) }}" width="100px" height="100px"></div>
                                                                            </aside> 
                                                                            <article class="row-lg-9">
                                                                                <h4 class="title">{{$p->nama_paket}}</h4>
                                                                                <h5 class="texts">Rp {{number_format($p->harga_paket)}}</h5>
                                                                                <p class="texts">{{$p->deskripsi}}</p>
                                                                                <button class="btn btn-info"><i class="fa fa-info white"></i> Info</button>
                                                                                @if($user->id == $eos->user_id)
                                                                                    @if($p->available == 1)
                                                                                    <button onclick="document.getElementById('removeAvailability').submit();" class="btn btn-danger"><i class="fa fa-times"  style="color:white"></i> Hapus Ketersediaan</button>
                                                                                    @else
                                                                                    <button onclick="document.getElementById('addAvailability').submit();" class="btn btn-primary"><i class="fa fa-check"></i> Tambah Ketersediaan</button>
                                                                                    @endif
                                                                                @else
                                                                                <button onclick="document.getElementById('addToCart').submit();" class="btn btn-outline-danger"><i class="fa fa-shopping-basket"></i> Pesan Sekarang</button>
                                                                                @endif
                                                                            </article>
                                                                            <form id="addAvailability" style="display:none;" action="{{route('paket.add',['id'=> $p->id])}}" method="POST">{{csrf_field()}}</form>
                                                                            <form id="removeAvailability" style="display:none;" action="{{route('paket.remove',['id'=> $p->id])}}" method="POST">{{csrf_field()}}</form>
                                                                            <form id="addToCart" style="display:none;" action="{{route('cart.store', ['nama_paket' => str_replace(' ','_',$p->nama_paket)])}}" method="POST">{{csrf_field()}}</form>
                                                                        </div>
                                                                    </article>
                                                                    <hr>
                                                            </div>
                                                            @endforeach

<div id="modalTambahPaket" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="text-center" id="myLargeModalLabel">Tambah Paket Mu</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('paket.store')}}" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="foto_p">Ilustrasi Paket</label>
                        <input type="file" class="form-control" id="foto_p" placeholder=""  required="required" name="gambar_paket">
                    </div>
                    <div class="mb-3">
                        <label for="nama_p">Nama Paket</label>
                        <input type="text" class="form-control" id="nama_p" placeholder=""  required="required" name="nama_paket">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                                <option value="Catering">Catering</option>
                                <option value="Wedding">Wedding</option>
                                <option value="Concert">Concert</option>
                                <option value="Conference">Conference</option>
                                <option value="Party">Party</option>
                                <option value="Rental">Rental</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status_pk">Status Paket</label>
                            <select class="form-control" id="status_pk" name="available">
                                <option>Tersedia</option>
                                <option>Tidak Tersedia</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Fasilitas/ Isi Paket (Deskripsi)</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="harga_pkt">Harga Paket </label>
                        <input type="number" class="form-control" id="harga_pkt" placeholder="Rp" name="harga_paket">
                    </div>
                    <button class="btn btn-danger btn-md btn-block" type="submit">Simpan</button>
                </form>    
            </div>
        </div>
    </div>
</div>

<div id="modalEditPaket" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="text-center" id="myLargeModalLabel">Form Edit Paket</h4>
            </div>
            <div class="modal-body">
                <form action="#" enctype="multipart/form-data" method="POST">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label for="foto_p">Foto Produk</label>
                        <input type="file" class="form-control" id="foto_p" placeholder=""  required="required" name="nama_paket">
                    </div>
                    <div class="mb-3">
                        <label for="nama_p">Nama Produk</label>
                        <input type="text" class="form-control" id="nama_p" placeholder=""  required="required" name="nama_paket">
                    </div>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kategori">Kategori</label>
                            <select class="form-control" id="kategori" name="kategori">
                            <option value="Catering">Catering</option>
                            <option value="Wedding">Wedding</option>
                            <option value="Concert">Concert</option>
                            <option value="Conference">Conference</option>
                            <option value="Party">Party</option>
                            <option value="Rental">Rental</option>
                            </select>
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="status_pk">Status Paket</label>
                            <select class="form-control" id="status_pk" name="available">
                            <option>Tersedia</option>
                            <option>Tidak Tersedia</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="address">Deskripsi</label>
                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="deskripsi"></textarea>
                    </div>
                    <div class="mb-3">
                        <label for="harga_pkt">Harga Paket </label>
                        <input type="text" class="form-control" id="harga_pkt" placeholder="100000" name="harga_paket">
                    </div>
                    <button class="btn btn-danger btn-md btn-block" type="submit">Simpan</button>
                </form>    
            </div>
        </div>
    </div>
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
    <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
@endsection