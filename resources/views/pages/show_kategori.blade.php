@extends('layout.app')
@section('content')
<br>
<br>
<br>
<div class="container">
    <header class="section-header">
        <h3>List Paket</h3>
    </header>
    <div class="item text-center">
        <div class="row">
            <div class="container">
            @foreach($paket as $p)
                <div class="col-sm-3">
                    <div class="thumb-wrappers">
                        <div class="img-box">
                            <img src="{{($p->gambar_paket != null )? asset('img/gambar_paket/'.$p->gambar_paket) : asset('img/favicon.png') }}" class="img-responsive img-fluid img-rd" alt="">									
                        </div>
                        <div class="thumb-content mt-2">
                            <h4>{{$p->nama_paket}}</h4>									
                            <p class="item-price">IDR <b>{{number_format($p->harga_paket)}}</b></p>
                            <a href="{{route('paket.show', ['id' => $p->id])}}" class="btn btn-outline-info"><i class="fa fa-info white"></i> Lihat</a>
                            <button onclick="document.getElementById('addToCart').submit();" class="btn btn-danger mt2"><i class="fa fa-shopping-basket"></i> Booking Sekarang</button>
						<form id="addToCart" style="display:none;" action="{{route('cart.store', ['nama_paket' => str_replace(' ','_',$paket->nama_paket)])}}" method="POST">{{csrf_field()}}</form>
                        </div>						
                    </div>
                </div>
            @endforeach
            </div>
        </div>
    </div>
    
    

</div>

@endsection
