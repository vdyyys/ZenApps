@extends('layout.app')
@section('content')
<br><br><br>
<link href="{{ asset('css/form_login.css') }}" rel="stylesheet">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<br><br><br>
<h2 class="text-center">Register</h2>
<br><br><br>
<div class="container">
    <div class="form-signin">
        <form action="" method="post">
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" name="name" placeholder="Masukkan Nama" required="required" value="{{ old('name') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="email" class="form-control" name="email" placeholder="Masukkan Email" required="required" value="{{ old('email') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                    <input type="text" class="form-control" name="no_telp" placeholder="No. Telp" required="required" value="{{ old('no_telp') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                <input type="password" class="form-control" name="password" placeholder="Masukkan Password" required="required" value="{{ old('password') }}">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group">
                <input type="password" class="form-control" name="password" placeholder="Verifikasi Password" required="required" value="{{ old('password') }}">
                </div>
            </div>
            <p class="hint-text">Dengan Mendaftar, anda telah menyetujui <a href="#">Syarat & Kebijakan</a> Kami</p>
            <br>
            <div class="form-group">
                <button type="submit" class="btn btn-outline-danger btn-block btn-lg">Sign up</button>
            </div>
        </form>
    </div>
</div>
    <p class="text-center">Sudah Punya akun? <a href="#"> Sign In</p>
<br><br><br>
@endsection