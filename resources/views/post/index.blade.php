@extends('layout.layout')

@section('title', 'Post')

@section('content')

	<div class="postlisthoder">
		<div class="headitemholder" style="height: 30px;">
			<div class="createitemholder createitem">
				<center><a href="{{ route('post.create') }}" class="textcreateitem menu white fontgothambold">Tạo bài</a></center>
			</div>
		</div>
		@foreach ($post as $p) 

			@include('layout.postlist', ['title' => $p->title, 'type' => $p->type, 'content' => $p->content, 'thumbnail' => $p->img])

		@endforeach
	</div>
	
@endsection


