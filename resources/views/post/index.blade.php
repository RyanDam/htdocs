@extends('layout.layout')

@section('title', 'Post')

@section('content')
	<div class="postlisthoder">
		<a href="{{ route('post.create') }}">Tạo bài</a>
		@foreach ($post as $p) 

			@include('layout.postlist', ['title' => $p->title, 'type' => $p->type, 'content' => $p->content, 'thumbnail' => '4.jpg'])

		@endforeach
	</div>
@endsection


