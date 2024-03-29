@extends('frontend.master')
@section('title', 'Your Cart')
@section('content')
<div class="container" style="margin-top: 30px">
	<div class="row">
		<ol class="breadcrumb nen1">
			<li style="padding-bottom: 10px">
				<a href="{{route('home-user')}}" style="color: #000; text-decoration: none;"><span class="glyphicon glyphicon-home"></span>&nbsp;Index</a>
			</li>
			<li class="active">Your Cart</li>
		</ol>
	</div>
</div>
@if(Cart::getTotalQuantity() > 0)
<div class="container">
	<div class="row" style="margin-top: -20px">
		<div class="col-sm-9" style="border-right:1px solid #ccc; margin-bottom: 20px">
			<form action="" method="GET">
				<table class="table">
					<thead>
						<tr>
							<th width="30%" style="color: #777;" colspan="3">Product</th>
							<th class="th1">Size</th>
							<th class="th1">Price</th>
							<th class="th1">Quantily</th>
							<th class="th1">Total</th>
						</tr>
					</thead>
					<tbody>
						@include('frontend.cart.item-cart')
					</tbody>	
				</table>
			</form>
			<a href="{{route('list-all-product')}}"  style="background:#fff;color:#fa2000;padding:10px 86px;border: 2px solid #fa2000;font-weight: bold;text-decoration: none;">
				<span class="glyphicon glyphicon-heart"></span>&nbsp;Continue Shopping</a>
		</div>
		<div class="col-sm-3">
			<table class="table table-hover" style="color: #777;">
				<thead>
					<tr>
						<th  width="100%">Subtotal</th>
					</tr>
					<tr>
						<td width="14%"><span class="">provisional:</span><span class="pull-right" style="color: #000"><b>
							{{number_format($total,0)}} ₫</b></span>
						</td>
					</tr>	
					<tr>
						<td>Shipping <span class="pull-right">delivery free</span></td>
					</tr>
					<tr>
						<td width="14%"><span class="">Total:</span><span class="pull-right" style="color: #000"><b>{{number_format($total,0)}} ₫</b></span>
							 
						</td>
					</tr>
					<tr>
						<td style="padding-top: 30px"><a href="{{route('show-checkout-user')}}"  style="background:#3CB371;color:#fff;padding:10px 30px;font-weight:bold;text-decoration: none;">TIẾN HÀNH THÀNH TOÁN</a></td>
					</tr>
				</thead>	
			</table>
		</div> 
	</div>
</div>
@elseif(session('success'))
	<div class="container" style="padding-bottom: 9%">							
		<p class="alert alert-success"><strong>ĐẶT HÀNG THÀNH CÔNG</strong>
			<br><span>{{session('success')}}</span>
		</p>
		<br><a href="{{route('list-all-product')}}"  style="background:#fff;color:#fa2000;padding:10px 86px;border: 2px solid #fa2000;font-weight: bold;text-decoration: none;">
		<span class="glyphicon glyphicon-heart"></span> Continue Shopping</a>
	</div>
@else
	<div class="container" style="padding-bottom: 10%">
		You are not cart!
		<br><br><a href="{{route('list-all-product')}}"  style="background:#fff;color:#fa2000;padding:10px 86px;border: 2px solid #fa2000;font-weight: bold;text-decoration: none;">
		<span class="glyphicon glyphicon-heart"></span> Continue Shoping</a>
	</div>
@endif
<script>
	$(document).ready(function(){
		$('.quantityItem').change(function(event) {
			var qty = $(this).val();	
			var id =	$(this).attr('data-id');	
			//alert(id);
			$.ajax({
				url: "{{route('update-quantity-cart')}}",
				type: 'GET',
				data: {
					qty: qty,
					id:id,
								},
				success: function(data) {
					alert('Số lượng của bạn đã được cập nhật thành công!'); 
					location.reload();
				},
				error: function($error) {
					alert('Cật nhật số lượng fail!');
				}
			})
		});
	});
</script>
@stop