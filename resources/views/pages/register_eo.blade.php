@extends('layout.app')
@section('content')
<br><br><br>
<link href="{{ asset('css/form_login.css') }}" rel="stylesheet">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<br><br><br>
<h2 class="text-center">Register Event Organizer</h2>
<br><br><br>
<div class="container">
    <div class="form-signin">
    <form action="" method="post">
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="" placeholder="Nama Event Organizer" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="email" class="form-control" name="" placeholder="Email Event Organizer" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="" placeholder="Alamat Event Organizer" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="number" class="form-control" name="" placeholder="No. Telp Event Organizer" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="url" class="form-control" name="" placeholder="Website Event Organizer">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <textarea name="" id="" cols="30" rows="10" placeholder="Deskripsi Event Organizer" required="required"></textarea>
            </div>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-outline-danger btn-block btn-lg">Sign In</button>
        </div>
        <p class="hint-text" text-center><a href="#">Lupa Password?</a></p>
    </form>
    </div>
</div>
    <p class="text-center">Belum Punya Akun? <a href="#">Daftar di sini</a></p>
<br><br><br>
@endsection