@extends('admin.master')
@section('title', 'Category Manager')
@section('content')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Category</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-5 col-lg-5">
					<div class="panel panel-primary">
						<div class="panel-heading">
							Add category
						</div>
						<div class="panel-body">
							<form action="{{route('add-category')}}" method="POST">
								@if(session('status'))
									<div class="alert alert-info">
										{{ session('status') }}
									</div>
							 	@endif
								@csrf()
								<div class="form-group">
									<label>Name:<span style="color: red;">*</span></label>
	    							<input type="text" name="name" class="form-control" placeholder="Name category..." value="{{old('name')}}">
	    							@if($errors->has('name'))
		    							<span class="" style="color:red;font-size: 13px">{{$errors->first('name')}}</span>
		    						@endif
								</div>
								<div class="form-group">
									<label>Description:</label><br>
	    							<textarea name="description" id="" cols="54" rows="10" class="" style="padding: 10px">
	    								{{old('description')}}
	    							</textarea>
								</div>

								<div class="form-group">
	    							<input type="submit" name="insert" class="btn btn-success" value="Add category" width="30%">
								</div>
							</form>
						</div>
					</div>
			</div>
			<div class="col-xs-12 col-md-7 col-lg-7">
				<div class="panel panel-primary">
					<div class="panel-heading">List category</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<table class="table table-bordered" style="text-align: center;">
				              	<thead>
					                <tr class="bg-primary">
					                  <th>Name</th>
					                  <th>Slug</th>
					                  <th style="width:40%">Description</th>
					                  <th style="width:24%">Options</th>
					                </tr>
				              	</thead>
				              	<tbody>
				              		@foreach($category_list as $item)
									<tr>
										<td>{{$item->name}}</td>
										<td>{{$item->slug}}</td>
										<td>@if(empty($item->description))
												Not description!
											@else
												{{$item->description}}
											@endif</td>
										<td>
				                    		<a href="{{route('show-edit-category',$item->id)}}"><span class="btn glyphicon glyphicon-pencil"></span></a>
				                    		<form action="{{route('delete-category',$item->id)}}" method="POST">
				                    			@csrf()
				                    			@method('DELETE')
				                    			<button onclick="return confirm('Bạn có chắc chắn muốn xóa? Warning: Tất cả những sản phẩm thuộc danh mục này cũng bị xóa!')" class="glyphicon glyphicon-trash" style="border: none;background: #fff;color: red;"></button>
				                    		</form>
				                  		</td>
				                  	</tr>	
				                  	@endforeach
				                </tbody>
				            </table>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop