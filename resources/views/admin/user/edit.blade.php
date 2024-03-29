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
        	<form method="POST">
                @method('PUT')
                @csrf()
                @include('errors.error')  
            	<div class="form-group">
                	<label>Fullname<span style="color: red">*</span></label>
                    <input type="text" name="name" class="form-control" placeholder="Fullname" value="{{$users->name}}" />
                    @if($errors->has('name'))
                        <span class="" style="color:red;font-size: 13px">{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="form-group">
                	<label>Email<span style="color: red">*</span></label>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="{{$users->email}}" />
                    @if($errors->has('email'))
                        <span class="" style="color:red;font-size: 13px">{{$errors->first('email')}}</span>
                    @endif
                </div>
                
                <div class="form-group">
                	<label>User Level<span style="color: red">*</span></label>
                    <select name="role_id" class="form-control">
                    	<option value="2" @if($users->role_id == 2) selected @endif >SuperAdmin</option>
                        <option value="1" @if($users->role_id == 1) selected @endif >User</option>
                    </select>
                </div>
                <input type="submit" name="submit" value="Sửa" class="btn btn-primary" />
                <a href="{{route('user-admin')}}" class="btn btn-danger">Cancel</a>
            </form>
        </div>
    </div>
</div>
@stop