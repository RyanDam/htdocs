<!DOCTYPE html>
<html>
<head>
	<title>@yield('title')</title>
	<link rel="stylesheet" type="text/css" href="/css/toolbar.css">
	<link rel="stylesheet" type="text/css" href="/css/main.css">
	<link rel="stylesheet" type="text/css" href="/css/footer.css">
	<link rel="stylesheet" type="text/css" href="/css/post.css">
	<link rel="stylesheet" type="text/css" href="/css/style.css">
	<link rel="stylesheet" type="text/css" href="/css/postreview.css">
	<link rel="stylesheet" type="text/css" href="/css/mainpage.css">
	<link rel="stylesheet" type="text/css" href="/css/postitem.css">
	<link rel="stylesheet" type="text/css" href="/css/toolbarsearch.css">
	<link rel="stylesheet" type="text/css" href="/css/editor.css">
	<link rel="stylesheet" type="text/css" href="/css/search.css">
	<link rel="stylesheet" type="text/css" href="/css/viewbt.css">
	<link rel="stylesheet" type="text/css" href="/css/viewpost.css">
	<link rel="stylesheet" type="text/css" href="/css/login.css">
	<link rel="stylesheet" type="text/css" href="/css/question.css">
	@section('header')
	
	@show
</head>
<body>
	<!-- <div class="wholescreen"> -->
		
		@section('toolbar')
			@include('layout.toolbar')
		@show

		@section('content')

		@show	

	<!-- </div> -->

	<!-- @section('footder')
		@include('layout.footer')
	@show -->
</body>
</html>