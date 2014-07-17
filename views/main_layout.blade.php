<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<title>Awesome Book Store</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css">

</head>
<body>
	<div class="container">
		<h1>Awesome Book Store</h1>

		@if(!Auth::check())
			<p>Please Login</p>
			<form action="/user/login" method="post">
				<div class="form-group">
					<input type="text" class="form-control input-sm" name="email" placeholder="email">
				</div>

				<div class="form-group">
					<input type="password" class="form-control input-sm" name="password" placeholder="password">
				</div>
				<button class="btn btn-primary">Sign in</button>
			</form>
		@else
			<a href="/cart">Your Cart</a>
			<div class="dropdown">
			  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome, {{ Auth::user()->name}} <b class="caret"></b></a>
			  <ul class="dropdown-menu">
			    <li><a href="/user/orders">My orders</a></li>
			    <li><a href="/user/logout">Logout</a></li>
			  </ul>
			</div>
		@endif


		@yield('content')

	</div><!-- end .container -->

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>

	<script>

		//even if js write blade here.. no worries.....

		@if(Session::has('error'))
			alert("{{Session::get('error')}}");
		@endif

		//alert the message
		@if(Session::has('message'))
			alert("{{Session::get('message')}}");
		@endif

	</script>
</body>
</html>