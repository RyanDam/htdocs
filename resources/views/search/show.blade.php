@extends('layout.layout')

@section('title', 'Kết quả')

@section('content')

	<div class="postlisthoder">
		<div class="headitemholder" style="height: 30px;">
			<div class="titlelistitemholder">
				<div class="titlelistitem">
					<center><h2 class="textlistitem textcreateitem menu white fontgothambold">Kết quả tìm kiếm</h2></center>
				</div>
			</div>
		</div>
		@if (count($result["post"]) == 0 and count($result["bt"]) == 0) 
			<div class="headitemholder" style="height: 30px;">
				<p>Không tìm thấy kết quả</p>
			</div>
		@else

		@foreach ($result["bt"] as $p)
			@include('layout.postlist', ['title' => $p->nameNormal, 'type' => 'Giống cây', 'content' => $p->info, 'thumbnail' => $p->img, 'id' => $p->id, 'mode' => '1'])
		@endforeach

		@foreach ($result["post"] as $post)
			@include('layout.postlist', ['title' => $post->title, 'type' => 'Bài Viết', 'content' => $post->content, 'thumbnail' => $post->img, 'id' => $post->id, 'mode' => '2'])
		@endforeach

		@endif

	</div>

@endsection