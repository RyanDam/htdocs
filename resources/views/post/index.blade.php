@extends('layout.layout')

@section('title', 'Bài đăng')

@section('content')

	<div class="postlisthoder">
		<div class="headitemholder" style="height: 30px;">
			<div class="createitemholder createitem">
				<center><a href="{{ route('post.create') }}" class="textcreateitem menu white fontgothambold">Tạo bài</a></center>
			</div>
			<div class="titlelistitemholder">
				<div class="titlelistitem">
					<center><h2 class="textlistitem textcreateitem menu white fontgothambold">Danh sách bài đăng</h2></center>
				</div>
			</div>
		</div>
		@foreach ($post as $p) 

			@include('layout.postlist', ['title' => $p->title, 'type' => $p->type, 'content' => $p->content, 'thumbnail' => $p->img, 'id' => $p->id, 'mode' => '2'])

		@endforeach
	</div>
	
@endsection


