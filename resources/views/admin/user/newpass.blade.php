@extends('admin.master')
@section('title','Edit User')
@section('content')
<div class="container" style="margin-left: 17%">
    <div id="navbar" class="row">
    	<div class="col-sm-12">
        	<nav class="navbar navbar-default">
  				<div class="container-fluid">
                	<ul class="nav navbar-nav">
                        <li><a href="{{route('home-admin')}}">Home</a></li>
                        <li><a href="{{route('user-admin')}}">Users</a></li>
                        <li><a href="{{route('show-add-user')}}">Add user</a></li>
                	</ul>
                    <p id="logout" class="navbar-text navbar-right"><a class="navbar-link" href="{{route('logout')}}" onclick="return confirm('Bạn có chắc chắn muốn đăng xuất?')">Logout</a></p>
                </div>
            </nav>
        </div>
    </div>
    <div class="row">
    	<div class="col-sm-6">
        	@if(session('status'))
                <div class="alert alert-info">
                    {{ session('status') }}
                </div>
            @endif
        	<form method="POST" action="{{route('new-password-admin',$id)}}">
                @method('PUT')
                @csrf()
                <div class="form-group">
                	<label>New password:<span style="color: red">*</span></label>
                    <input type="password" name="password" class="form-control" placeholder="new password" value="" />
                    @if($errors->has('password'))
                        <span class="" style="color:red;font-size: 13px">{{$errors->first('email')}}</span>
                    @endif
                </div>
                 <div class="form-group">
                    <label>confirm password:<span style="color: red">*</span></label>
                    <input type="password" name="confirmpassword" class="form-control" placeholder="Confrim password..." value="" />
                    @if($errors->has('confirmpassword'))
                        <span class="" style="color:red;font-size: 13px">{{$errors->first('confirmpassword')}}</span>
                    @endif
                </div>
                <button  type="submit" class="btn btn-primary">Change password</button>
                <a href="{{route('user-admin')}}" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
@stop