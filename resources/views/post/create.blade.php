<h1>Đăng bài</h1>
@if (count($errors) > 0)
	<div class="alert alert-danger">
		<strong>Whoops!</strong> Xuất hiện lỗi khi tạo bài:<br>
		<ul>
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	</div>
@endif
<form action="{{ route('post.store') }}" method="POST">
	{{ csrf_field() }}
	<label for="title">Tiêu đề</label> <br>
	<input name="title" type="text"> <br>

	<label for="content">Loại bài</label> <br>
	<input type="radio" name="type" value="Khảo sát">Khảo sát<br>
	<input type="radio" name="type" value="Tin tức">Tin Trồng trọt<br>
	<input type="radio" name="type" value="Kỹ thuật">Kỹ thuật sản xuất<br>
	<input type="radio" name="type" value="Mô hình sản xuất">Mô hình sản xuất<br>

	<label for="content">Nội dung</label> <br>
	​<textarea name="content" rows="10" cols="70"></textarea><br>
	<input type="submit" value="Submit">
</form>