@extends('layout.editor')

@section('content')

	<div class="editorback">
		
		<div class="editorholder">
			<div style="width: auto;">
				@if ($mode === 2)
					<div class="titlelistitemholder" style="width: auto;">
						<div class="titlelistitem" style="width: auto;">
							<center><h2 class="textlistitem textcreateitem menu white fontgothambold" style="width: auto; padding-left:10px; padding-right:10px;">Chỉnh sửa thông tin cây trồng</h2></center>
						</div>
					</div>
				@else
					<div class="titlelistitemholder" style="width: auto;">
						<div class="titlelistitem" style="width: auto;">
							<center><h2 class="textlistitem textcreateitem menu white fontgothambold" style="width: auto; padding-left:10px; padding-right:10px;">Tạo giống thông tin cây trồng mới</h2></center>
						</div>
					</div>
				@endif
			</div>

			<br><br><br>

			@if (count($errors) > 0)
				<div class="alert alert-danger">
					<strong>Whoops!</strong> Xuất hiện lỗi<br>
					<ul>
						@foreach ($errors->all() as $error)
							<li>{{ $error }}</li>
						@endforeach
					</ul>
				</div>
			@endif

			@if ($mode === 2)
				<form action="{{ route('bt.update', $bt->id) }}" method="POST" class="formstyle">
			@else
				<form action="{{ route('bt.store') }}" method="POST" class="formstyle">
			@endif
				@if ($mode === 2)
					{{ method_field('PUT') }}
				@endif
				{{ csrf_field() }}

				<div class="nameinfoholder">
					<div class="blockinfo centerblock">
						<label for="code">Mã giống cây:</label> <br>
						@if ($mode === 2)
							<input name="code" type="text" value="{{ $bt->code }}" class="inputlong inputstyle"> <br>
						@else
							<input name="code" type="text" value="" class="inputlong inputstyle"> <br>
						@endif
					</div>

					<div class="blockinfo centerblock">
						<label for="nameNormal">Tên thông thường:</label> <br>
						@if ($mode === 2)
							<input name="nameNormal" type="text" value="{{ $bt->nameNormal }}" class="inputlong inputstyle"> <br>
						@else
							<input name="nameNormal" type="text" value="" class="inputlong inputstyle"> <br>
						@endif
					</div>

					<div class="blockinfo centerblock">
						<label for="nameScience">Tên khoa học:</label> <br>
						@if ($mode === 2)
							<input name="nameScience" type="text" value="{{ $bt->nameScience }}" class="inputlong inputstyle"> <br>
						@else
							<input name="nameScience" type="text" value="" class="inputlong inputstyle"> <br>
						@endif
					</div>

					<div class="blockinfo centerblock">
						<br>
						<label for="nameScience">Vùng:</label> <br>
						<select name="area" class="dropdownsearch darkgray fontcontent" style="width: 300px;left: -10px;">
							<option value="Trung du miền núi phía Bắc">Trung du miền núi phía Bắc</option>
							<option value="Đồng bằng sông Hồng">Đồng bằng sông Hồng</option>
							<option value="Bắc Trung Bộ">Bắc Trung Bộ</option>
							<option value="Duyên hải Nam Trung Bộ">Duyên hải Nam Trung Bộ</option>
							<option value="Tây Nguyên">Tây Nguyên</option>
							<option value="Đông Nam Bộ">Đông Nam Bộ</option>
							<option value="Đồng Bằng sông Cửu Long">Đồng Bằng sông Cửu Long</option>
						</select>
					</div>

				</div>

				<br>

				<label for="img">Link hình ảnh:</label> <br>
				@if ($mode === 2)
					<input name="img" type="text" value="{{ $bt->img }}" class="inputlong inputstyle"> <br>
				@else
					<input name="img" type="text" value="" class="inputlong inputstyle"> <br>
				@endif
				<br>
				<label for="info">Thông tin</label> <br>
				@if ($mode === 2)
					<textarea name="info" rows="30">{{ $bt->info }}</textarea><br>
				@else
					<textarea name="info" rows="30"></textarea><br>
				@endif
				<center><input type="submit" value="Đăng lên" class="submiteditorbutton"></center>
			</form>

		</div>

	</div>

@endsection