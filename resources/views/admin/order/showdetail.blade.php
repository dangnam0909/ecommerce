
@extends('admin.master')
@section('title', 'Order detail| NL Fashtion')
@section('content')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header">Order detail</h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-xs-12 col-md-12 col-lg-12">
				
				<div class="panel panel-primary">
					<div class="panel-heading">Order detail</div>
					<div class="panel-body">
						<div class="bootstrap-table">
							<div class="table-responsive">
								@if(session('status'))
									<div class="alert alert-danger">
										{{ session('status') }}
									</div>
							 	@endif
							 	<div class="col-lg-8" style="line-height: 30px">
							 		<p><b style="color: #000">Full name receiver:</b> {{$customer->name}}</p>
							 	<p><span style="font-weight: bold;color: #000">Phone:</span> {{$customer->phone}}</p>
							 	<p><b style="color: #000">Address:</b> {{$customer->address}}</p>
							 	<p><b style="color: #000">Email:</b> <a>{{$customer->email}}</a></p>
							 	<p><b style="color: #000">Order status:
							 	</b> 
										@if($customer->order->status == 0)
											<span class="btn btn-default" style="padding: 1px 7px">New order</span>
										@elseif($customer->order->status == 1)
											<span class="btn btn-success" style="padding: 1px 7px">Approved</span>
										@elseif($customer->order->status == 2)
											<span class="btn btn-info" style="padding: 1px 7px">Processing</span>
										@elseif($customer->order->status == 3)
											<span class="btn btn-primary" style="padding: 1px 7px">Delivered</span>
										@elseif($customer->order->status == 4)
											<span class="btn btn-danger" style="padding: 1px 7px">Cancelled</span>
										@endif
							 	</p>
							 	</div>
							 	<div class="col-lg-4">
							 		<p style="border: 1px solid #ccc; display: inline-block; padding: 15px"><span style="color: #000;font-weight: bold;">Date order: </span>{{date('d/m/Y H:i:s', strtotime($customer->order->date))}}</p>
							 	</div>
								<table class="table table-bordered" style="margin-top:20px;text-align: center;font-size: 12px;width: 60%;">				
									<thead>
										<tr class="bg-primary">
											<th style="text-align: center;">ID</th>
											<th width="20%" style="text-align: center;">Name</th>
											<th style="text-align: center;">Image</th>
											<th style="text-align: center;">Size</th>
											<th style="text-align: center;">Quantity</th>
											<th style="text-align: center;">Price(VNĐ)</th>
											<th width="10%" style="text-align: center;">Coupon(%)</th>
											<th width="15%" style="text-align: center;" width="20%">Price coupon(VNĐ)</th>
										</tr>
									</thead>
									<tbody>
										@foreach($order as $item)
											<?php 
												$image = App\Image::select('slug')->where('product_id',$item->product_id)->first();
											 ?>
											<tr>
												<td>{{$item->id}}</td>
												<td>{{$item->product->name}}</td>
												<td><img src="{{asset($image->slug)}}" alt="" width="100px"></td>
												<td>{{$item->size->name}}</td>
												<td>{{$item->quantity}}</td>
												<td>{{number_format($item->price,0)}} ₫</td>
												<td>{{$item->sale}}</td>
												<td>{{number_format($item->pricesale,0)}} ₫</td>
											</tr>
										@endforeach
									</tbody>
								</table>
								<p style="font-size: 18px"><span style="color: #000; font-weight: bold;margin-right: 10px">Subtotal:</span><span>{{number_format($customer->order->total)}} ₫</span></p>
								<p style="font-size: 18px"><span style="color: #000; font-weight: bold;margin-right: 10px">Payment method: </span><span>{{$customer->order->payment}}</span></p>

								<form action="{{route('status-detail-order',$customer->order->id)}}" method="POST">
									@csrf
									<label>-- Order status --</label>
									<select name="status" id="" class="form-control" style="width:30%;margin-bottom:20px;background:#FFEBCD">
										@if($customer->order->status == 0)
											<option value="1">Approve order</option>
											<option value="4">Cancel order</option>	
										@else
											<option value="2">Processing</option>
											<option value="3">processed</option>
											<option value="4">Cancel order</option>
										@endif
										
									</select>
										@if($errors->has('status'))
			    							<span class="" style="color:red;font-size: 13px;">{{$errors->first('status')}}</span><br>
			    						@endif
										<button type="submit" class="btn btn-success">Processing</button>
										<a href="{{route('order-admin')}}" class="btn btn-danger">Back</a>	
								</form>
								
																
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
@stop