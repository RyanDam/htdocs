<h1>Chỉnh sửa giống cây</h1>
<form action="{{ route('bt.update', $bt->id) }}" method="POST">
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
	<label for="code">Mã</label> <br>
	<input name="code" type="text" value="{{ $bt->code }}"> <br>

	<label for="nameNormal">Tên thông thường</label> <br>
	<input name="nameNormal" type="text" value="{{ $bt->nameNormal }}"> <br>

	<label for="nameScience">Tên khoa học</label> <br>
	<input name="nameScience" type="text" value="{{ $bt->nameScience }}"> <br>

	<label for="img">Link hình ảnh</label> <br>
	<input name="img" type="text" value="{{ $bt->img }}"> <br>

	<label for="info">Thông tin</label> <br>
	​<textarea name="info" rows="10" cols="70">{{ $bt->info }}</textarea><br>
	<input type="submit" value="Submit">
</form>