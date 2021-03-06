@extends('layout.layout')

@section('title','Home')

@section('content')
<div style="position:relative;">
	<div class="welcomescreen">
		<div class="welcomescreen_mask">
		</div>
		<div class="homesearchholder">
			<center><h1 class="welcometext fontgothambold">CHUYÊN TRANG KHUYẾN NÔNG</h1></center>
			<form action="{{ route('search') }}" method="GET" class="searchholder">
				<div class="searchinput_holder">
					<input type="text" name="searchinput" placeholder="Nhập để tìm kiếm" class="seachinputstyle" required></input>
				</div>
				<div class="submitsearch_holder">
					<input type="submit" value="TÌM KIẾM" class="submitsearch"></form>
				</div>
			</form>
		</div>
	</div>
	<div class="homecontent" >
		<center><p class="titletext">Bài viết mới nhất</p></center>
		<div class="homecontent_holder">
			@foreach ($posts as $post)
			@include('layout.postreview', [
						'id' => $post->id,
						'title' => $post->title,
						'content' => $post->content,
						'thumbnail' => $post->img, 
						"isleft" => true ])
			@endforeach
		</div>
		<br><br>
	</div>
</div>

@endsection