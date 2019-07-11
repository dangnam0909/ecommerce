@extends('admin.master')
@section('title', 'Product image manager' | NL Fashtion')
@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Edit Type Image</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">List</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<a href="{{route('product-admin')}}" class="btn btn-primary">Back</a>
								@if(session('status'))
									<div class="alert alert-success">
										{{ session('status') }}
									</div>
							 	@endif
								<form action="{{route('edit-type-product-image',$image->id)}}" method="POST">
									@csrf
									@method('PUT')
									<div class="form-group" style="margin-top: 30px; width: 40%;">
										<select name="status" id="" class="form-control">
											<option value="1" @if($image->status == 1) selected @endif >Avatar</option>
										<option value="0" @if($image->status == 0) selected @endif >Description image</option>
										</select>
									</div>
									<button type="submit" class="btn btn-success">Edit</button>
								</form>
									
								<div style="margin-left: 45%;">
									
								</div>
									
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	<script type="text/javascript">
</script>
@stop