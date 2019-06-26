@extends('layout.app')
@section('content')
<br><br><br><br><br>
<header class="section-header">
    <h3 class="title">Mitra Kami</h3>
    <br><br><br>
</header>
<div class="container">
    <div class="card-deck col-md-12">
    @foreach ($eo as $eo)
    <div class="col-md-3 mb-4">
        <div class="card h-100">
            <a class="card-link" href="{{ route('eo.show', str_replace(' ', '_', $eo->nama_eo)) }}">
                <img class="card-img-top" src="{{ asset('img/EO/mama.jpg') }}" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title">{{$eo->nama_eo}}</h3><br>
                    <p>{{$eo->alamat}}</p>
                </div>
            </a>
        </div>
    </div>
    @endforeach
    </div>
    <br><br><br>
</div>
@endsection