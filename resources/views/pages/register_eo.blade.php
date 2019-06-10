@extends('layout.app')
@section('content')
<br><br><br>
<link href="{{ asset('css/form_login.css') }}" rel="stylesheet">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<br><br><br>
<h2 class="text-center">Register Event Organizer</h2>
<p class="text-center">(* harus di isi)</p>
<br><br><br>
<div class="container">
    <form  action="{{route('eo.store')}}" method="post">
    @csrf
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="nama_eo" placeholder="Nama Event Organizer*" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="email" class="form-control" name="email" placeholder="Email Event Organizer*" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="alamat" placeholder="Alamat Event Organizer*" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="number" class="form-control" name="kontak" placeholder="No. Telp Event Organizer*" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="link" placeholder="Website Event Organizer">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <textarea name="deskripsi" class="form-control" placeholder="Deskripsi Event Organizer*" required="required"></textarea>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-danger btn-block btn-lg">Gabung EO</button>
        </div>
    </form>
</div>
<br><br><br>
@endsection