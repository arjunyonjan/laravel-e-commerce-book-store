@extends('main_layout')

@section('content')
	<hr>

	<ul>
	@foreach($books as $book)
		<li>
			<h3>{{$book->title}}</h3>
			<p>{{$book->author->name}} {{$book->author->surname}}</p>
			<p>price: {{$book->price}}</p>
			<form action="/cart/add" method="post">
				<input type="hidden" name="book" value="{{$book->id}}">
				<label for="">Amount</label>
				<select name="amount" id="">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
				</select>
				<button class="btn btn-danger">Add to Cart</button>
			</form>
		</li>
	@endforeach
	</ul>
@stop