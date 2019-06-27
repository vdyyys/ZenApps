@extends('layout.app')
@section('content')
<br><br><br><br>
<div class="container">
    <br><br><br>
    <div class="d-flex justify-content-center">
        <h3 class="title text-center">Permintaan Transaksi Anda Disetujui<br><br>
        Segera lakukan pembayaran DP ke 54675 - 789789 a/n Zenith Revenue<br><br>
        Rp. 100.000.000,-<br><br>
        sebelum tanggal 24-07-2020<br><br>
        </h3>
    </div>
    <br><br><br>

    <div class="d-flex justify-content-center">
        <h3 class="title text-center">Bukti Pembayaran<br><br>
        <form action="{{ route('transfer.store') }}" method="post" enctype="multipart/form-data">
        @csrf
            <select name="nama_bank" required>
                <option value="BNI">BNI</option>
                <option value="BRI">BRI</option>
                <option value="Mandiri">Mandiri</option>
            </select> 
             @if($errors->has('nama_bank'))
                <span class="alert alert-danger alert-dismissible fade show">{{$errors->first('nama_bank')}}</span>
            @endif
            <input type="file" name="bukti_transfer" id="" required>
            @if($errors->has('bukti_transfer'))
                <span class="alert alert-danger alert-dismissible fade show">{{$errors->first('bukti_transfer')}}</span>
            @endif
            <button type="submit" class="btn btn-warning">Upload Bukti Transfer</button>
        </form>
    </div>

</div>
@endsection