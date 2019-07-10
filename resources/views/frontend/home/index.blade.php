@extends('frontend.master')
@section('title', 'Home')
@section('content')
	@include('frontend.home.banner')
	@include('frontend.home.follow')
	@include('frontend.home.giaohang')
	<div class="content-bottom">
		<div style="background-color: gainsboro; color: teal; padding: 10px 10px;margin-top: 10px;">
			<div class="container">
				<h3>SẢN PHẨM MỚI</h3>
				<p style="font-size: 14px;">Hàng luôn được cật nhật thường xuyên</p>
			</div>
		</div>
		<form  id="formData" name="form">
			<div class="container" style="margin-top: 20px">
				@include('frontend.home.product-cart')
				<div class="clear" style="margin: auto; margin-left: 45%;">{{$products->links()}}</div>
				<div class="clear"></div>
			</div>
			<div style="background: gainsboro; color: teal; padding: 10px 10px;">
				<div class="container">
					<h3>SẢN PHẨM HOT</h3>
					<p style="font-size: 14px;">Cập nhật liên tục những sản phẩm được đặt hàng nhiều nhất</p>
				</div>
			</div>
			<div class="container" style="margin-top: 20px">
				@include('frontend.home.product-hot-cart')
			</div>
		</form>
		<div class="clear"></div>
		</div>
			<div  style="background: gainsboro; color: teal; padding: 10px 10px;">
				<div class="container">
					<h3>THƯƠNG HIỆU NỔI TIẾNG</h3>
					<p style="font-size: 14px;">Những thương hiệu hàng đầu thế giới</p>
				</div>
			</div>
		<div class="container" style="padding: 30px">
			<div class="col-sm-2">
				<a href="https://www.chanel.com/en_SG/fashion.html" target="_blank"><img src="{{asset('images/thuonghieu/chanel1.png')}}" width="130" height="100"></a>
			</div>
			<div class="col-sm-2">
				<a href="https://www.dolcegabbana.com" target="_blank"><img src="{{asset('images/thuonghieu/dg1.jpg')}}" width="130" height="100"></a>
			</div>
			<div class="col-sm-2">
				<a href="https://www.calvinklein.us/en" target="_blank"><img src="{{asset('images/thuonghieu/calvinklein.png')}}" width="150" height="100"></a>
			</div>
			<div class="col-sm-2">
				<a href="https://www.polo.co.za/women" target="_blank"><img src="{{asset('images/thuonghieu/polo.jpg')}}" width="130"></a>
			</div>
			<div class="col-sm-2">
				<a href="https://global.lacoste.com/en/women.html" target="_blank"><img src="{{asset('images/thuonghieu/lacoste.png')}}" width="130" height="100"></a>
			</div>
			<div class="col-sm-2">
				<a href="https://en.louisvuitton.com/eng-nl/products/sleeveless-a-line-dress-with-embroidered-patches-nvprod1430241v" target="_blank"><img src="{{asset('images/thuonghieu/lv-logo.png')}}" width="130" height="100"></a>
			</div>
		</div>

	<div class="footer">
		<div class="footer-top">
		<div class="wrap">
		<div class="col_1_of_footer-top span_1_of_footer-top">
			<ul class="f_list">
				<li><img src="images/f_icon.png" alt=""/><span class="delivery">Free delivery on all orders over £100*</span></li>
			</ul>
		</div>
		<div class="col_1_of_footer-top span_1_of_footer-top">
			<ul class="f_list">
				<li><img src="images/f_icon1.png" alt=""/><span class="delivery">Customer Service :<span class="orange"> (800) 000-2587 (freephone)</span></span></li>
			</ul>
		</div>
		<div class="col_1_of_footer-top span_1_of_footer-top">
			<ul class="f_list">
				<li><img src="images/f_icon2.png" alt=""/><span class="delivery">Fast delivery & free returns</span></li>
			</ul>
		</div>
		<div class="clear"></div>
		</div>
	</div>
	<div class="footer-middle">
	<div class="wrap">
		<div class="section group">
		<div class="col_1_of_middle span_1_of_middle">
			<dl id="sample" class="dropdown">
			<dt><a href="#"><span>Please Select a Country</span></a></dt>
			<dd>
				<ul>
					<li><a href="#">Australia<img class="flag" src="images/as.png" alt="" /><span class="value">AS</span></a></li>
					<li><a href="#">Sri Lanka<img class="flag" src="images/srl.png" alt="" /><span class="value">SL</span></a></li>
					<li><a href="#">Newziland<img class="flag" src="images/nz.png" alt="" /><span class="value">NZ</span></a></li>
					<li><a href="#">Pakistan<img class="flag" src="images/pk.png" alt="" /><span class="value">Pk</span></a></li>
					<li><a href="#">United Kingdom<img class="flag" src="images/uk.png" alt="" /><span class="value">UK</span></a></li>
					<li><a href="#">United States<img class="flag" src="images/us.png" alt="" /><span class="value">US</span></a></li>
				</ul>
			</dd>
			</dl>
			</div>
		<div class="col_1_of_middle span_1_of_middle">
			<ul class="f_list1">
				<li><span class="m_8">Sign up for email and Get 15% off</span>
				<div class="search">	  
					<input type="text" name="s" class="textbox" value="Search" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
					<input type="submit" value="Subscribe" id="submit" name="submit">
					<div id="response"> </div>
				</div><div class="clear"></div>
				</li>
			</ul>
		</div>
		<div class="clear"></div>
		</div>
	</div>
	</div>
</div> 
<script>
	$(document).ready(function(){
	$('.productSize').click(function(event) {
		
	});

	$('.addCart').click(function(event) {
		event.preventDefault();	
		var size = document.getElementsByName("size");
		var product_id =  $(this).attr('data-id');	
		var length = size.length;
		for (var i = 0; i < length; i++){
			if (size[i].checked === true){
				//alert(size[i].value);
				var size_id = size[i].value;
				break;
			}
		}
		//alert(size_id);
		if (typeof  size_id == "undefined") {
			alert("Bạn chưa chọn size!");
		}else{
			$.ajax({
				url: "{{route('add-cart-user')}}",
				type: 'GET',
				data: {						
					product_id:product_id,
					size_id:size_id,
					},
				success: function(data) {
					alert("Thêm giỏ hàng thành công!"); 
					$("#getCart").html(data);
					//location.reload();

				},
				error: function($error) {
					alert("Thêm vào giỏ hàng fail!");
				}
			})
		}
		});		
	});
</script>
@endsection