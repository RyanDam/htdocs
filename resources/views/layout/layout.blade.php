<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="css/toolbar.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
	<link rel="stylesheet" type="text/css" href="css/footer.css">
	<link rel="stylesheet" type="text/css" href="css/post.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
	<div class="wholescreen">
		
		@section('toolbar')
			@include('layout.toolbar')
		@show

		@section('content')

		@show	

	</div>

	@section('footder')
		@include('layout.footer')
	@show
</body>
</html>