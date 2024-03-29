@extends('frontend.master')
@section('title', 'Login')
@section('content')
    <div class="login">
		<div class="wrap">
			<div class="col_1_of_login span_1_of_login">
				<h4 class="title">New Customers</h4>
				<h5 class="sub_title">Register Account</h5>
				<p>With long-term experience working in the field of fashion and high-end products, the shop is always confident to bring products of fashion design, quality assurance. Products that help customers show their sophistication and class in aesthetic sense, wish their customers are always updated and leading the trend. Shop always aims to the highest goal is to satisfy customers.</p>
				<div class="button1">
					<a href="register.html"><input type="submit" name="Submit" value="Continue"></a>
					</div>
					<div class="clear"></div>
			</div>
			<div class="col_1_of_login span_1_of_login">
				<div class="login-title">
				<h4 class="title">Registered Customers</h4>
					<div class="comments-area">
					<form action="{{route('postLogin')}}" method="post">
						@csrf()
						<p>
							<label>Name</label>
							<span>*</span>
							<input type="text" value="" name="email">
						</p>
						<p>
							<label>Password</label>
							<span>*</span>
							<input type="password" value="" name="password">
						</p>

						@if(count($errors) > 0)
							<div class="alert alert-danger">
								@foreach($errors->all() as $error)
									<li> {{$error}} </li>
								@endforeach
							</div>
						@endif
						@if(session('status'))
							<div class="alert alert-info">
								{{ session('status') }}
							</div>
						@endif
							<div class="sky-form">
							<label>
								<input type="checkbox" value="remember">
								Ghi nhớ đăng nhập
							</label>
							</div>
							<p id="login-form-remember">
							<label><a href="#">Forget Your Password ? </a></label>
							</p>
							<p>
							<input type="submit" value="Login">
						</p>
					</form>
				</div>
				</div>
			</div>
			<div class="clear"></div>
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
@endsection