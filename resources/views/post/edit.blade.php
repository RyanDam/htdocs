<h1>Chỉnh sửa</h1>
<form action="{{ route('post.update', $post->id) }}" method="POST">
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
	{{ method_field('PUT') }}
	{{ csrf_field() }}
	<label for="title">Tiêu đề</label> <br>
	<input name="title" type="text" value="{{ $post->title }}"> <br>

	<label for="content">Loại bài</label> <br>
	<input type="radio" name="type" value="khaosat">Khảo sát<br>
	<input type="radio" name="type" value="tintuc">Tin Trồng trọt<br>
	<input type="radio" name="type" value="kythuat">Kỹ thuật sản xuất<br>
	<input type="radio" name="type" value="mohinh">Mô hình sản xuất<br>

	<label for="content">Nội dung</label> <br>
	​<textarea name="content" rows="10" cols="70">{{ $post->content }}</textarea><br>
	<input type="submit" value="Submit">
</form>