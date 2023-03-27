@extends('layouts.common')
@section('stylesheet')
<style>
	#header-wrap {
		background-color: #e54d24;
	}
</style>
@endsection
@section('content')
   	<div class="container page-content">
		<section id="order-details" class="mt-4">
			<div class="d-flex justify-content-between align-items-start">
				<div>
					<label class="text-bold">Delivery</label>
					<p class="date">{{ date('d-m-Y', strtotime($order->delivered_at)) }}</p>
				</div>
				<div>
					<label class="text-bold">DELIVERY STATUS</label>
					<p>
					@if($order->status == 1)
					Pending
					@elseif ($order->status == 2)
					Processing
					@elseif ($order->status == 3)
					Ongoing
					@elseif ($order->status == 4)
					Delivered
					@elseif ($order->status == 5)
					Received
					@endif
					</p>
				</div>
				<div>
					<label class="text-bold">TRACKING ID</label>
					<p>{{$order->tracking_id}}</p>
				</div>
			</div>			

			<div class="row mt-5" style="align-items: center---;">
				<div class="col-md-6">
					<div class="email-section">
						@if (!empty($order->email))
						<label for="" style="text-transform:none;">All updates of shipment, we'll send this email below</label>
						@else
						<label for="" style="text-transform:none;">Want updates on this shipment? Enter your email and we will do the rest!</label>
						@endif
						<div class="form-floating mb-3 col-sm-12 d-flex">
							@if (!empty($order->email))
							<input type="email" class="form-control" id="floatingInput" disabled placeholder="name@example.com" value="{{ $order->email ?? '' }}" />
							@else
							<input type="email" class="form-control" id="floatingInput" placeholder="name@example.com" value="" />
							<button type="submit" class="btn btn-primary submit-email">SUBMIT</button>
							@endif
							<label for="floatingInput">Email address</label>
						</div>
					</div>
					<p class="mt-4">We promise to deliver to our partners all services and solutions; not just safely but on time; not just a transaction but a fulfillment of our word.</p>
					<p class="mt-4" style="text-align:justify">Highway Transport provides solutions to the chemical industry, including transportation and logistics services. We are recognized by customers and the industry for our dedication to safety, service, community and sustainability. Our proprietary, customer-focused technology provides transparency throughout the supply chain. </p>
					<img src="{{ asset('storage/' . $order->image) }}" style="width: 100%;margin-top: 2rem;"/>

					@if ($order->image || $order->document)
						<div class="d-flex justify-content-center mt-3">
							@if ($order->image)
							<a class="btn btn-warning me-3" href="{{ Storage::url($order->image)}}" target="_blank" download> <i class="icon icon-download"></i> Download Image</a> 
							@endif
							@if ($order->document)
							<a class="btn btn-warning" href="{{ Storage::url($order->document)}}" target="_blank" download> <i class="icon icon-download"></i> Download Document</a> 
							@endif
						</div>
					@endif
				</div>
				<div class="col-md-5 offset-md-1 col-sm-12" style="padding-left: 3rem;">
					<div class="location-map">
						<div class="location">
							<div class="left-green-border"></div>
							<div class="white-dot"></div>
							@if ($order->current_location == 'From Address')
								<div class="current-location"></div>
							@endif

							<p class="title">FROM</p>
							<p class="desc">{{$order->from_address}}</p>
						</div>
					
						@foreach ($order->routes as $route )
							<div class="location">
								<div class="left-green-border"></div>
								<div class="white-dot"></div>
								@if ($order->current_location == $route->name)
								<div class="current-location"></div>
								@endif

								<p class="title">{{$route->name}}</p>
							</div>
						@endforeach						
						
						<div class="location">
							<div class="left-green-border"></div>
							<div class="white-dot"></div>
							@if ($order->current_location == 'Delivery Address')
								<div class="current-location"></div>
							@endif

							
							<p class="title">DELIVERED</p>
							<p class="desc">{{$order->company->name}}</p>
							<p class="date-title">Delivered</p>
							@if ($order->status == 4)
								<p class="date">{{ date('d-m-Y h:i:s', strtotime($order->delivered_at)) }}</p>
							@else
								<p class="date">Not Delivered</p>
							@endif
						</div>
					</div>
				</div>
			</div>
		</section>

		<hr class="mt-5">

		<section class="Shipment Facts mt-5">
			<h2>Shipment Facts</h2>
			<p><i class="icon-box"></i> Shipment overview</p>
			<table class="table table-striped table-centered mb-0">
				<tbody>
					<tr>
						<td>TRACKING NUMBER</td>
						<td>{{$order->tracking_id}}</td>
					</tr>
					{{-- <tr>
						<td>SHIP DATE</td>
						<td>{{$order->tracking_id}}</td>
					</tr> --}}
					<tr>
						<td>ACTUAL DELIVERY</td>
						<td>Assign will later</td>
					</tr>
				</tbody>
			</table>
		</section>
		<section class="Services mt-5">
			<h2>Services</h2>
			<p><i class="icon-car"></i> Shipment overview</p>
			<table class="table table-striped table-centered mb-0">
				<tbody>
					<tr>
						<td>SERVICE</td>
						<td>{{ $order->company->name }}</td>
					</tr>
					<tr>
						<td>SPECIAL HANDLING SECTION</td>
						<td>Deliver Weekday</td>
					</tr>
					
				</tbody>
			</table>
		</section>
	</div>
@endsection