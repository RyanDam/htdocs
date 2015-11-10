@extends('layout.layout')

@section('title','Home')

@section('content')

	<div class="welcomescreen">
		<div class="welcomescreen_mask">
			
		</div>
		<div class="homesearchholder">
			<center><h1 class="welcometext fontgothambold">CHUYÊN TRANG KHUYẾN NÔNG</h1></center>
			<form action="abc" method="POST" class="searchholder">
				<div class="searchinput_holder">
					<input type="text" name="searchinput" placeholder="Nhập để tìm kiếm" class="seachinputstyle"></input>
				</div>
				<div class="submitsearch_holder">
					<input type="submit" value="TÌM KIẾM" class="submitsearch"></form>
				</div>
			</form>
		</div>
	</div>

	<div class="homecontent" >
		<div class="homecontent_holder">
			@include('layout.postreview', ['title' => 'Phương pháp canh tác rau dền hiệu quả'
						, 'content' => 'Rau dền là loại rau bổ rẽ, ăn rất là sướng, hihi<br>
						các bạn nên ăn vài lần trong ngày để cảm nhận được
						vị bổ của nó, thật không thể tin được. Như các bạn thấy đấy,
						nó được trồng thành luống rất đẹp. Rau dền trước khi thu hoạch có màu xanh,
						sau khi thu hoạch sẽ có màu rau dền rất đẹp.'
						, 'thumbnail' => '1.jpg', "isleft" => true ])
			@include('layout.postreview', ['title' => 'Trồng lúa không khó - Chuyện nhà nông'
						, 'content' => 'Rau dền là loại rau bổ rẽ, ăn rất là sướng, hihi<br>
						các bạn nên ăn vài lần trong ngày để cảm nhận được
						vị bổ của nó, thật không thể tin được. Như các bạn thấy đấy,
						nó được trồng thành luống rất đẹp. Rau dền trước khi thu hoạch có màu xanh,
						sau khi thu hoạch sẽ có màu rau dền rất đẹp.'
						, "thumbnail" => "4.jpg", "isleft" => true ])
			@include('layout.postreview', ["title" => 'Trồng dâu tây rất dễ - đảm bảo thành công lớn'
						, "content" => 'Rau dền là loại rau bổ rẽ, ăn rất là sướng, hihi<br>
						các bạn nên ăn vài lần trong ngày để cảm nhận được
						vị bổ của nó, thật không thể tin được. Như các bạn thấy đấy,
						nó được trồng thành luống rất đẹp. Rau dền trước khi thu hoạch có màu xanh,
						sau khi thu hoạch sẽ có màu rau dền rất đẹp.'
						, "thumbnail" => "3.jpg", "isleft" => true ])
			@include('layout.postreview', ["title" => 'Chăn rau không khó - Bí quyết nhà nông'
						, "content" => 'Rau dền là loại rau bổ rẽ, ăn rất là sướng, hihi<br>
						các bạn nên ăn vài lần trong ngày để cảm nhận được
						vị bổ của nó, thật không thể tin được. Như các bạn thấy đấy,
						nó được trồng thành luống rất đẹp. Rau dền trước khi thu hoạch có màu xanh,
						sau khi thu hoạch sẽ có màu rau dền rất đẹp.'
						, "thumbnail" => "2.jpg", "isleft" => true ])
			@include('layout.postreview', ["title" => 'Lái máy bay phun thuốc diệt cỏ - Hướng đi mới'
						, "content" => 'Rau dền là loại rau bổ rẽ, ăn rất là sướng, hihi<br>
						các bạn nên ăn vài lần trong ngày để cảm nhận được
						vị bổ của nó, thật không thể tin được. Như các bạn thấy đấy,
						nó được trồng thành luống rất đẹp. Rau dền trước khi thu hoạch có màu xanh,
						sau khi thu hoạch sẽ có màu rau dền rất đẹp.'
						, "thumbnail" => "5.jpg", "isleft" => true ])
		</div>
	</div>

@endsection