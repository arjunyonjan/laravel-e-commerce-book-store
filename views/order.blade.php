@extends('main_layout')

@section('content')
	<h1>Orders</h1>

	@foreach($orders as $order)
		<a href="#">Order #{{$order->id}} - {{Auth::user()->name}} - {{$order->created_at}} </a>

		<table class="table table-bordered table-striped"><!-- table-hover table-condensed -->
	        <thead>
	        <tr>
	            <th>Title</th>
	            <th>Amount</th>
	            <th>Price</th>
	            <th>Total</th>
	        </tr>
	        </thead>
	        <tbody>
	        @foreach($order->order_items as $order_item)
	        	<tr>
	        		<td>{{$order_item->title}}</td>
	        		<td>{{$order_item->pivot->amount}}</td>
	        		<td>{{$order_item->pivot->price}}</td>
	        		<td>{{$order_item->pivot->total}}</td>
	        	</tr>
			@endforeach
			<tr>
				<td></td>
				<td></td>
				<td><strong>Total</strong></td>
				<td><strong>{{$order->total}}</strong></td>
			</tr>
	        </tbody>
	    </table>
	@endforeach
@stop