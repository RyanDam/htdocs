@extends('layout.layout')

@section('title', 'Kết quả')

@section('header')

<script type="text/javascript">
	function changeareastate(select) {
		var x = select.value;
		if (x == "post" || x == "all") {
			document.getElementById("area_selector").style.visibility = "hidden";
		}
		else {
			document.getElementById("area_selector").style.visibility = "visible";
		}
	}
</script>

@endsection

@section('content')

	<div class="postlisthoder">

		<div class="headitemholder" style="height: 70px;background-color: #f5f5f5;box-shadow:0px 1px 5px rgba(0,0,0,0.1);">
			<div class="toolbarsearchholder" style="width: 800px;margin: 0 auto;left: 40px;">
				<form action="{{ route('search') }}" method="GET" id="searchForm">
					<div>
						<div class="searchengine">
							<div class="toolsearchholder" style="width: 300px;">
								<input type="text" name="searchinput" placeholder="Nhập để tìm kiếm" class="toolsearch darkgray" required value="{{ $result['keyword'] }}"></input>
							</div>
							<div class="searchopholder">
								<p class="dropdownname fontcontent darkgray">Loại: </p>
								<select name="category" class="dropdownsearch darkgray fontcontent" form="searchForm" onchange="changeareastate(this)">
									<option value="all">Tất cả</option>
									<option value="bt">Giống cây</option>
									<option value="post">Bài viết</option>
								</select>
							</div>
							<div class="searchopholder" id="area_selector">
								<p id="abc" class="dropdownname fontcontent darkgray">Vùng: </p>
								<select name="area" class="dropdownsearch darkgray fontcontent" form="searchForm">
									<option value="Trung du miền núi phía Bắc">Trung du miền núi phía Bắc</option>
									<option value="Đồng bằng sông Hồng">Đồng bằng sông Hồng</option>
									<option value="Bắc Trung Bộ">Bắc Trung Bộ</option>
									<option value="Duyên hải Nam Trung Bộ">Duyên hải Nam Trung Bộ</option>
									<option value="Tây Nguyên">Tây Nguyên</option>
									<option value="Đông Nam Bộ">Đông Nam Bộ</option>
									<option value="Đồng Bằng sông Cửu Long">Đồng Bằng sông Cửu Long</option>
								</select>
							</div>
							<script type="text/javascript">
								document.getElementById("area_selector").style.visibility = "hidden";
							</script>
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