@extends('layout.app')
@section('content')
<br><br><br>
<link href="{{ asset('css/form_login.css') }}" rel="stylesheet">
<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
<br><br><br>
<h2 class="text-center">Sign In</h2>
<br><br><br>
<div class="container">
    <div class="form-signin">
    <form action="" method="post">
        <div class="form-group">
            <div class="input-group">
                <input type="text" class="form-control" name="no_telp" placeholder="Email" required="required">
            </div>
        </div>
        <div class="form-group">
            <div class="input-group">
                <input type="password" class="form-control" name="password" placeholder="Password" required="required">
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