@extends('layout.layout')

@section('title', 'Kết quả')

@section('content')

	<div class="postlisthoder">

		<div class="headitemholder" style="height: 70px;background-color: #f5f5f5;box-shadow:0px 1px 5px rgba(0,0,0,0.1);">
			<div class="toolbarsearchholder" style="width: 800px;margin: 0 auto;left: 40px;">
				<form action="{{ route('search') }}" method="GET">
					<div>
						<div class="searchengine">
							<div class="toolsearchholder" style="width: 300px;">
								<input type="text" name="searchinput" placeholder="Nhập để tìm kiếm" class="toolsearch darkgray" required></input>
							</div>
							<div class="searchopholder">
								<p class="dropdownname fontcontent darkgray">Loại: </p>
								<select class="dropdownsearch darkgray fontcontent">
									<option value="bt">Giống cây</option>
									<option value="post">Bài viết</option>
								</select>
							</div>
							<div class="searchopholder">
								<p class="dropdownname fontcontent darkgray">Vùng: </p>
								<select class="dropdownsearch darkgray fontcontent">
									<option value="bt">Đồi thông</option>
									<option value="post">Mâm quả</option>
									<option value="post">Khe suối</option>
									<option value="post">Hang động</option>
								</select>
							</div>
							
						</div>
						<div class="searchitemchooserholder">
							<div class="toolsearchsubmitholder">
								<input type="submit" value="TÌM" class="toolsearchsubmit white"></form>
							</div>
						</div>
					</div>
				</form>
				
			</div>
		</div>

		<div class="headitemholder" style="height: 30px;">
			<div class="titlelistitemholder">
				<div class="titlelistitem">
					<center><h2 class="textlistitem textcreateitem menu white fontgothambold">Kết quả tìm kiếm</h2></center>
				</div>
			</div>
			<div class="titlelistitemholder" style="width: auto;">
				<div class="titlelistitem" style="width: auto;">
					<center><h2 class="textlistitem textcreateitem menu blue fontgothambold lightgrayback" style="width: auto; padding-left:10px; padding-right:10px;">{{ $result['keyword'] }}</h2></center>
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