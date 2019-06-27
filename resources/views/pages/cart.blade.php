@extends('layout.app')
@section('content')
<br><br><br><br><br>
<div class="container">
    <h1 class="text-center">Keranjang Belanja</h1>
    <br><br>
    <div class="container">
        <table class="table table-stripped shopping-cart">

            <thead class="column-labels">
                <th class="product-image">Image</th>
                <th class="product-details">Product</th>
                <th class="product-price">Price</th>
                <th class="product-quantity">Quantity</th>
                <th class="product-removal">Remove</th>
                <th class="product-line-price">Total</th>
            </thead>
            <form action="{{route('booking.create' )}}" method="get">
            <tbody>
            
            @foreach ($pakets as $p)
              <tr class="product">
                  <td class="product-image">
                      <img  src="{{asset('img/gambar_paket/'.$p->gambar_paket)}}">
                  </td>
                  <td class="product-details">
                      <div class="product-title">{{$p->nama_paket}}</div>
                      <input type="hidden" name="nama_paket[]" value="{{$p->nama_paket}}">
                      <p class="product-description">{{substr($p->deskripsi,0,25)}}</p>
                  </td>
                  <td class="product-price">{{$p->harga_paket}}</td>
                  <td class="product-quantity">
                      <input type="number" value="1" min="1">
                  </td>
                  <td class="product-removal">
                      <button class=" btn btn-danger btn-sm remove-product">
                        <i class="fa fa-trash-o"></i>
                      </button>
                  </td>
                  <td class="product-line-price">{{$p->harga_paket}}</td>
              </tr>
            @endforeach
            </tbody>
            <tfoot>
              <tr class="totals">
                  <td colspan="4"></td>
                  <td class="totals-item">
                      <label>Subtotal</label>
                      <div class="totals-value" id="cart-subtotal">{{$harga_total}}</div>
                  </td>
                  <td class="totals-item totals-item-total">
                      <label>Grand Total</label>
                      <div class="totals-value" id="cart-total">{{$harga_total}}</div>
                      <input type="hidden" name="harga_total" id="total" >
                  </td>
              <tr>
              @if($pakets->count() != 0)
              <tr>
                <td><a href="#" class="btn btn-warning"><i class="fa fa-angle-left"></i> Lihat Paket</a></td>
                <td colspan="4"></td>
                <td>
                  <button class="btn btn-success checkout">Checkout <i class="fa fa-angle-right"></i></button>
                </td>
              </tr>
              @endif
            </tfoot>
            </form>
        </table>
    </div>
</div>
<script>
    /* Set rates + misc */
var taxRate = 0;
var shippingRate = 0; 
var fadeTime = 300;


/* Assign actions */
$('.product-quantity input').change( function() {
  updateQuantity(this);
});

$('.product-removal button').click( function() {
  removeItem(this);
});


/* Recalculate cart */
function recalculateCart()
{
  var subtotal = 0;
  
  /* Sum up row totals */
  $('.product').each(function () {
    subtotal += parseFloat($(this).children('.product-line-price').text());
  });
  
  /* Calculate totals */
  var tax = subtotal * taxRate;
  var shipping = (subtotal > 0 ? shippingRate : 0);
  var total = subtotal + tax + shipping;
  $('#total').val(total);
  /* Update totals display */
  $('.totals-value').fadeOut(fadeTime, function() {
    $('#cart-subtotal').html(subtotal.toFixed(2));
    $('#cart-total').html(total.toFixed(2));
      $('.checkout').fadeOut(fadeTime);
    if(total == 0){
    }else{
      $('.checkout').fadeIn(fadeTime);
    }
    $('.totals-value').fadeIn(fadeTime);
  });
}


/* Update quantity */
function updateQuantity(quantityInput)
{
  /* Calculate line price */
  var productRow = $(quantityInput).parent().parent();
  var price = parseFloat(productRow.children('.product-price').text());
  var quantity = $(quantityInput).val();
  var linePrice = price * quantity;
  
  /* Update line price display and recalc cart totals */
  productRow.children('.product-line-price').each(function () {
    $(this).fadeOut(fadeTime, function() {
      $(this).text(linePrice.toFixed(2));
      recalculateCart();
      $(this).fadeIn(fadeTime);
    });
  });  
}


/* Remove item from cart */
function removeItem(removeButton)
{
  /* Remove row from DOM and recalc cart total */
  var productRow = $(removeButton).parent().parent();
  productRow.slideUp(fadeTime, function() {
    productRow.remove();
    recalculateCart();
  });
}

</script>
@endsection