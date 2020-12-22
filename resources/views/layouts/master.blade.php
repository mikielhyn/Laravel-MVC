<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>@yield('title')</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>
<body>

	<nav class="navbar navbar-expand-sm bg-primary navbar-dark fixed-top">
		<ul class="navbar-nav">
			<li class="nav-item active">
				<a class="nav-link" href="/home">Home Page</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="/contact">Contact Me</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="/photos">Photos</a>
			</li>
			<li class="nav-item active">
				<a class="nav-link" href="/social">Social</a>
			</li>
		</ul>
	</nav>
	<br><br><br>
	@yield('content')

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>