<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>My_Blog Title</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">
	<script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/latest/TweenMax.min.js"></script>
	<script src="//http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</head>
<body>
	<div class="col-lg-12 jumbotron">
		<h1 class="col-lg-offset-3">Welcome to My Blog </h1>
		<h3 class="col-lg-offset-3">It's where I share my humble opinion on that which opinion should not matter.</h3>
		<a href="#"><h3 class="col-lg-offset-3">Learn More About What Makes Me Tick</h3></a>
	</div>
	<div class="wrapper">
		@yield('content')
	</div>	
</body>
</html>