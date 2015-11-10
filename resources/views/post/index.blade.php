@extends('layout.layout')

@section('title', 'Post')

@section('content')
	
	<a href="{{ route('post.create') }}">Tạo bài</a>
	<div class="postlistholder">
		@foreach ($post as $p) 

			@include('layout.postlist', ['title' => $p->title, 'type' => $p->type, 'content' => $p->content])

		@endforeach
	</div>
@endsection


