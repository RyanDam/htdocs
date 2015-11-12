@extends('layout.editor')

@section('content')

	<h1>Tạo giống cây</h1>
	@if (count($errors) > 0)
		<div class="alert alert-danger">
			<strong>Whoops!</strong> Xuất hiện lỗi khi tạo giống cây:<br>
			<ul>
				@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
				@endforeach
			</ul>
		</div>
	@endif
	<form action="{{ route('bt.store') }}" method="POST">
		{{ csrf_field() }}
		<label for="code">Mã</label> <br>
		<input name="code" type="text"> <br>

		<label for="nameNormal">Tên thông thường</label> <br>
		<input name="nameNormal" type="text"> <br>

		<label for="nameScience">Tên khoa học</label> <br>
		<input name="nameScience" type="text"> <br>

		<label for="img">Link hình ảnh</label> <br>
		<input name="img" type="text"> <br>

		<label for="info">Thông tin</label> <br>
		​<textarea name="info" rows="10"></textarea><br>
		<input type="submit" value="Submit">
	</form>

@endsection