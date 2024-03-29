@extends('frontend.master')
@section('title', 'Apply password')
@section('content')
<!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<style>
.emp-profile{
    padding: 3%;
    margin-top: 3%;
    margin-bottom: 3%;
    border-radius: 0.5rem;
    background: #fff;
}
.profile-img{
    text-align: center;
}
.profile-img img{
    width: 70%;
    height: 100%;
}
.profile-img .file {
    position: relative;
    overflow: hidden;
    margin-top: -20%;
    width: 70%;
    border: none;
    border-radius: 0;
    font-size: 15px;
    background: #212529b8;
}
.profile-img .file input {
    position: absolute;
    opacity: 0;
    right: 0;
    top: 0;
}
.profile-head h5{
    color: #333;
}
.profile-head h6{
    color: #0062cc;
}
.profile-edit-btn{
    border: none;
    border-radius: 1.5rem;
    width: 70%;
    padding: 2%;
    font-weight: 600;
    color: #6c757d;
    cursor: pointer;
}
.proile-rating{
    font-size: 12px;
    color: #818182;
    margin-top: 5%;
}
.proile-rating span{
    color: #495057;
    font-size: 15px;
    font-weight: 600;
}
.profile-head .nav-tabs{
    margin-bottom:5%;
}
.profile-head .nav-tabs .nav-link{
    font-weight:600;
    border: none;
}
.profile-head .nav-tabs .nav-link.active{
    border: none;
    border-bottom:2px solid #0062cc;
}
.profile-work{
    padding: 14%;
    margin-top: -15%;
}
.profile-work p{
    font-size: 12px;
    color: #818182;
    font-weight: 600;
    margin-top: 10%;
}
.profile-work a{
    text-decoration: none;
    color: #495057;
    font-weight: 600;
    font-size: 14px;
}
.profile-work ul{
    list-style: none;
}
.profile-tab label{
    font-weight: 600;
}
.profile-tab p{
    font-weight: 600;
    color: #0062cc;
}
.imgtron{
	width: 100%;
    height: 100%;
    border-radius: 50%;
    background-position: 50%;
    background-size: cover;
    background-repeat: no-repeat;
    cursor: pointer;
}
</style>
<div style="background: #eee;">
	<div class="container" >
		<h3>Profile</h3>
		<p>Manager profile</p>
		<div class="container emp-profile">
			<form method="post" action="{{route('post-email-confirm-password-user', Auth::user()->id)}}" enctype="multipart/form-data">
				@csrf
				<div class="row">
					<div class="col-md-4">
						<div class="profile-img">
							<img id="avatar" src="{{asset(Auth::user()->avatar)}}" class="avatar img-circle img-thumbnail" alt=""/>
						</div>
					</div>
					<div class="col-md-6">
						<div class="profile-head">
							<h3>
								Change email
							</h3>
							<h5 style="color: blue;">
								{{-- Để cập nhật email mới, vui lòng xác nhận bằng cách nhập mật khẩu --}}
								To update the new email, please confirm password
							</h5>
									
							<ul class="nav nav-tabs" id="myTab" role="tablist">
								<li class="nav-item">
									<a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">password authentication</a>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-2">
						<p style="border: 1px solid #ccc; display: inline-block; padding: 15px"><span style="color: #000;font-weight: bold;">Updated now: </span>{{date('d/m/Y H:i:s', strtotime(Auth::user()->updated_at))}}</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4">
						<div class="profile-work">
							<p style="font-size: 15px">Your account</p>
							<a href="{{route('profile-user')}}">Profile</a><br/>
							<a href="{{route('view-update-password-user', Auth::user()->id)}}">Change password</a><br/>
						</div>
					</div>
					<div class="col-md-8" style="margin-top: -60px">
						<div class="tab-content profile-tab" id="myTabContent">
							<div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
								<div class="row">
									<div class="col-md-4">
										<label>Address email</label>
									</div>
									<div class="col-md-8">
										<span>
											{{ substr(Auth::user()->email, 0,2).'*******@gmail.com'}}
										</span>
									</div>
										
								</div>
								<div class="row" style="margin-bottom: 15px;margin-top: 15px;">
									<div class="col-md-4">
										<label>password</label>
									</div>
									<div class="col-md-8">
										<input name="password" type="password" value="" style="padding: 5px;" autofocus>
										@if($errors->has('password'))
											<br><span class="" style="color:red;font-size: 13px">{{$errors->first('password')}}</span>
										@endif			
										@if(session('fail'))
											<br><span class="" style="color:red;font-size: 13px">{{ session('fail') }}</span>
										@endif
										<div style="margin-top: 30px;" >
											<button type="submit" style=" background-color: #ee4d2d; color: #fff; border: none; padding: 10px 17px; border-radius: 3px;margin-right: 5px;">Comfirm</button>
											<a href="{{route('profile-user')}}" style=" background-color: #eee; color: #000; border: none; padding: 10px 20px; border-radius: 3px;text-decoration: none;">Back</a>
										</div>
									</div>
								</div>
							</div>
							</div>
						</div>
					</div>
				</div>
			</form>           
		</div>
	</div>
</div>
@endsection