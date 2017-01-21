<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>LOGIN PAGE</title>
	<link rel="stylesheet prefetch" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>
<div class="container">

<ul class="nav nav-pills">
	@if(\Auth::check())
	<li>
		{{link_to_route('logout','LOGOUT')}}
	</li>
	<li>
		{{link_to_route('fruits','HOME')}}
	</li>
	@else
	<li>
 		{{link_to_route('login','LOGIN')}}
	</li>
	<li>
		{{link_to_route('users.create','REGISTER')}}
	</li>
	@endif
</ul>

	@yield('content')
</div>
</body>
</html>