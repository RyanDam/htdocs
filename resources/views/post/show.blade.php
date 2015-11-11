@extends('layout.layout')

@section('title','Post')

@section('content')


	<a href="{{ route('post.index') }}">Quay lại</a>

	<h1>{{ $post->title }}</h1>
	<label>Mục:</label> <span>{{ $post->type }}</span> <br>
	<img src="/img/{{ $post->img }}" width="600" height="400"> <br>
	<p>
	{!! nl2br($post->content, false) !!}
	</p>

	<a href="{{ route('post.edit', $post->id) }}">Chỉnh sửa</a> | 
	<form action="{{ route('post.destroy', $post->id) }}" method="POST">
		{{ method_field('DELETE') }}
		{{ csrf_field() }}
		<input type="submit" value="Xóa">
	</form>


@endsection