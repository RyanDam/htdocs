@extends('layout.layout')

@section('title','Home')

@section('content')

@include('layout.postskeleton', ['title' => 'Phương pháp canh tác rau dền hiệu quả'
			, 'content' => 'Rau dền là loại rau bổ rẽ, ăn rất là sướng, hihi<br>
			các bạn nên ăn vài lần trong ngày để cảm nhận được
			vị bổ của nó, thật không thể tin được. Như các bạn thấy đấy,
			nó được trồng thành luống rất đẹp. Rau dền trước khi thu hoạch có màu xanh,
			sau khi thu hoạch sẽ có màu rau dền rất đẹp. <br><br>
			Ngoài ra ta còn có thể tận dụng củ dền, rất là ngon, hihi.<br>
			Bây giờ mình không biết ghi gì thêm cả, hic, copy thôi, hihi.'
			, 'thumbnail' => '1.jpg', "isleft" => true ])
@include('layout.postskeleton', ['title' => 'Trồng lúa không khó - Chuyện nhà nông'
			, 'content' => 'Rau dền là loại rau bổ rẽ, ăn rất là sướng, hihi<br>
			các bạn nên ăn vài lần trong ngày để cảm nhận được
			vị bổ của nó, thật không thể tin được. Như các bạn thấy đấy,
			nó được trồng thành luống rất đẹp. Rau dền trước khi thu hoạch có màu xanh,
			sau khi thu hoạch sẽ có màu rau dền rất đẹp. <br><br>
			Ngoài ra ta còn có thể tận dụng củ dền, rất là ngon, hihi.<br>
			Bây giờ mình không biết ghi gì thêm cả, hic, copy thôi, hihi.'
			, "thumbnail" => "4.jpg", "isleft" => false ])
@include('layout.postskeleton', ["title" => 'Dâu tây rất dễ - đảm bảo thành công lớn'
			, "content" => 'Rau dền là loại rau bổ rẽ, ăn rất là sướng, hihi<br>
			các bạn nên ăn vài lần trong ngày để cảm nhận được
			vị bổ của nó, thật không thể tin được. Như các bạn thấy đấy,
			nó được trồng thành luống rất đẹp. Rau dền trước khi thu hoạch có màu xanh,
			sau khi thu hoạch sẽ có màu rau dền rất đẹp. <br><br>
			Ngoài ra ta còn có thể tận dụng củ dền, rất là ngon, hihi.<br>
			Bây giờ mình không biết ghi gì thêm cả, hic, copy thôi, hihi.'
			, "thumbnail" => "3.jpg", "isleft" => true ])

@endsection