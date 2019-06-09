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
            <tbody>
                <tr>
                    <td data-th="Product">
                        <div class="row">
                            <div class="col-sm-10">
                                <h4 class="nomargin">{Paket Sunat ABC}</h4>
                                <p>{Event Organizer}</p>
                            </div>
                        </div>
                    </td>
                    <td data-th="Price">{Rp. 10.000.000,-}</td>
                    <td data-th="Quantity">
                        <input type="number" class="form-control text-center" value="1">
                    </td>
                    <td data-th="Subtotal" class="text-center">{1.99}</td>
                    <td class="actions" data-th="">
                        <a href="" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></a>
                        <a href="" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i></a>								
                    </td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Lihat Paket</a></td>
                    <td colspan="2" class="hidden-xs">Total</td>
                    <td class="hidden-xs text-center"><strong>$1.99</strong></td>
                    <td><a href="#" class="btn btn-success"> Pesan <i class="fa fa-angle-right"></i></a></td>
                </tr>
            </tfoot>
        </table>
</div>
</div>
@endsection