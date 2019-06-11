@extends('layout.app')
@section('content')
<br><br><br><br><br>
<div class="container">
    <h1 class="text-center">Keranjang Belanja</h1>
    <br><br>
    <div class="container">
        <table id="cart" class="table table-hover table-condensed">
            <thead>
                <tr>
                    <th style="width:40%">Product</th>
                    <th style="width:20%">Price</th>
                    <th style="width:8%">Quantity</th>
                    <th style="width:22%" class="text-center">Subtotal</th>
                    <th style="width:10%"></th>
                </tr>
            </thead>
            @foreach($pakets as $paket)
            <tbody>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-10">
                                <h4 class="nomargin">{{$paket->nama_paket}}</h4>
                                <p>{{$paket->nama_eo}}</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{{$paket->harga_paket}}</td>
                    <td data-th="Quantity">
                        <input type="number" class="form-control text-center" value="1">
                    </td>
                    <td data-th="Subtotal" class="text-center">0</td>
                    <td class="actions" data-th="">
                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>								
                    </td>
                </tr>
            </tbody>
            @endforeach
            <tfoot>
                <tr>
                    <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Lihat Paket</a></td>
                    <td colspan="2" class="hidden-xs">Total</td>
                    <form action="#" method="post">{{csrf_field()}}
                    <td class="hidden-xs text-center"><strong><input type="number" readonly> </strong></td>
                    </form>
                    <td><a href="#" class="btn btn-success">Lanjutkan Booking <i class="fa fa-angle-right"></i></a></td>
                </tr>
            </tfoot>
        </table>
</div>
</div>
@endsection