@extends('main_layout')

@section('content')
	<h1>Your Cart</h1>

		<table class="table">
			<tr>
				<td>Title</td>
				<td>Amount</td>
				<td>Price</td>
				<td>Total</td>
				<td>Delete</td>
			</tr>
			@foreach($cart_books as $cart_item)
				<tr>
					<td>{{$cart_item->Books->title}}</td>
					<td>{{$cart_item->amount}}</td>
					<td>{{$cart_item->Books->price}}</td>
					<td>{{$cart_item->total}}</td>
					<td>
						<a href="{{URL::route('delete_book_from_cart', [$cart_item->id] )}}" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			@endforeach
			<tr>
				<td></td>
				<td></td>
				<td>Total</td>
				<td>{{$cart_total}}</td>
				<td></td>
			</tr>

		</table>

		<h1>Shipping</h1>
		<form action="/order" method="post">
			<div class="form-group">
                <label for="">Address</label>
                <textarea name="address" class="form-control"></textarea>
            </div>
          	<button class="btn btn-info">Place Order</button>
		</form>
@stop