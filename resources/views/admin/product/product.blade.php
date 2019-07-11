@extends('admin.master')
@section('title', 'Product | NL Fashtion')
@section('content')
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Product</h1>
			</div>
		</div><!--/.row-->
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">List product</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								<div style="margin-bottom: 15px">
									<input type="search" class="form-control" placeholder="Search product..." name="search" id="searchProduct">
								</div>
								<a href="{{route('show-add-product')}}" class="btn btn-primary">Add product</a>
								@if(session('status'))
									<div class="alert alert-success" style="margin-top: 15px">
										{{ session('status') }}
									</div>
							 	@endif
								<table class="table table-bordered" style="margin-top:20px;text-align: center;font-size: 13px">				
									<thead>
										<tr class="bg-primary">
											<th style="text-align: center; ">ID</th>
											<th width="10%" style="text-align: center;">Name</th>
											<th style="text-align: center;">Price</th>
											<th style="text-align: center;">Coupon</th>
											<th style="text-align: center;" width="5%">Size</th>
											<th style="text-align: center;">Quantity</th>
											<th width="10%" style="text-align: center;">Product image</th>
											<th style="text-align: center;" width="15%">Description</th>
											<th style="text-align: center;">Category</th>
											<th style="text-align: center;">Brand</th>
											<th style="text-align: center;">Status</th>
										<!-- 	<th style="text-align: center;">Ngày tạo</th>
											<th style="text-align: center;">Cập nhật</th> -->
											<th style="text-align: center;">Option</th>
										</tr>
									</thead>	
									<tbody id="getProduct">
										@foreach($productlist as $product)
											<tr>
												<td>{{$product->id}}</td>
												<td>{{$product->name}}</td>
												<td>{{number_format($product->price,0)}}</td>
												<td>
													@if(empty($product->sale))
														<span style="border-radius: 15px;padding: 5px;background: #FFAF02;color: #fff">0%</span>
													@else
														<span style="border-radius: 15px;padding: 5px;background: #FFAF02;color: #fff">{{$product->sale}}%</span>
													@endif
												</td>
												<td>
													<?php 
														 foreach ($product->images as $item) {
														 	$images['slug'] = $item->slug;
														 }
													 ?>
													@foreach($product->sizes as $item)
														<span style="background: url(//theme.hstatic.net/1000243581/1000361905/14/bg-variant-checked.png?v=131) no-repeat right bottom #fff; padding:2px; border: 1px solid #ccc;">{{$item->name}}</span>
													@endforeach
												</td>
												<td>
													<?php $quantity = 0; ?>
													@foreach ($product->productSizes as $item) 
														 	<?php $quantity += $item->quantity; ?>			
													@endforeach
													{{$quantity}}
												</td>
												<td>
													@if($images['slug'])
														<img src="{{asset($images['slug'])}}" alt="" width="150px">
													@else
														<img src="{{asset($images->slug)}}" alt="" width="150px">
													@endif
												</td>
												<td>
													@if(empty($product->description))
														Chưa có mô tả cho sản phẩm này.
													@else
														{{$product->description}}
													@endif
												</td>
												<td>{{$product->category->name}}</td>
												<td>{{$product->brand->name}}</td>
												<td>@if($product->status == 1)
														<span class="btn-default" style="padding: 2px">Displayed</span>
													@else
														<span class="btn-success" style="padding: 2px">Hidden</span>
													@endif
												</td>
												<!-- <td>{{$product->created_at}}</td>
												<td>{{$product->updated_at}}</td> -->
												<td style="line-height: 50px" style="text-align: center;">
													<a href="{{route('show-edit-product',$product->id)}}" class="btn glyphicon glyphicon-pencil"></a><br>
													<form action="{{route('delete-product',$product->id)}}" method="POST">
														@csrf
														@method('DELETE')
														<button onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="glyphicon glyphicon-trash" style="border: none;background: #fff;color: red;"></button>
													</form>
													
													<a href="{{route('view-product-size',$product->id)}}" class="btn-success">Size</a><br>
												</td>
											</tr>
										@endforeach
									</tbody>
								</table>	

								<div style="margin-left: 45%;">
									{{ $productlist->links()}}
								</div>
									
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
	search product
<script>
	$(document).ready(function($) {
		$('#searchProduct').keyup(function(event) {
			var search = $(this).val();
			//alert(status);
			$.ajax({
				url: 'product/search-product',
				type: 'GET',
				data: {						
					search:search,
					},
				success: function(data) {
					//alert(data); 
					$("#getProduct").html(data);
				},
				error: function($error) {
					alert('Thao tác thất bại!');
				}
			})
		});
	});
</script>
@stop