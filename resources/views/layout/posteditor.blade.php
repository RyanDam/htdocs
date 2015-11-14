@extends('layout.editor')

@section('content') 

	<div class="editorback">
		<div class="editorholder">
			<div style="width: auto;">
				@if ($mode === 2)
					<div class="titlelistitemholder" style="width: auto;">
						<div class="titlelistitem" style="width: auto;">
							<center><h2 class="textlistitem textcreateitem menu white fontgothambold" style="width: auto; padding-left:10px; padding-right:10px;">Chỉnh sửa bài đăng</h2></center>
						</div>
					</div>
				@else
					<div class="titlelistitemholder" style="width: auto;">
						<div class="titlelistitem" style="width: auto;">
							<center><h2 class="textlistitem textcreateitem menu white fontgothambold" style="width: auto; padding-left:10px; padding-right:10px;">Tạo bài đăng mới</h2></center>
						</div>
					</div>
				@endif
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
					<form action="{{ route('post.update', $post->id) }}" method="POST" class="formstyle">
				@else
					<form action="{{ route('post.store') }}" method="POST" class="formstyle">
				@endif
					@if ($mode === 2)
						{{ method_field('PUT') }}
					@endif
					{{ csrf_field() }}

					<label for="title">Tiêu đề:</label> <br>
					@if ($mode === 2) 
					<input name="title" type="text" value="{{ $post->title }}" class="inputlong inputstyle" required> <br>
					@else
					<input name="title" type="text" value="" required class="inputlong inputstyle"> <br>
					@endif
					<br>
					@if ($mode === 2)
						<div class="radiogroupholder">
							<div class="radioeditorstyle" style="width:60px;">
								<label for="content" class="radioeditorstyle">Loại bài:</label>
							</div><br>
							<div class="radioeditorstyle">
								<input type="radio" name="type" value="Khảo sát" {{ $post->type=="Khảo sát"?"checked":null }}>Khảo sát
							</div>
							<div class="radioeditorstyle">
								<input type="radio" name="type" value="Tin tức" {{ $post->type=="Tin tức"?"checked":null }}>Tin Trồng trọt
							</div>
							<div class="radioeditorstyle">
								<input type="radio" name="type" value="Kỹ thuật" {{ $post->type=="Kỹ thuật"?"checked":null }}>Kỹ thuật sản xuất
							</div>
							<div class="radioeditorstyle">
								<input type="radio" name="type" value="Mô hình sản xuất" {{ $post->type=="Mô hình sản xuất"?"checked":null }}>Mô hình sản xuất
							</div>
						</div>
					@else 
						<div class="radiogroupholder">
							<div class="radioeditorstyle" style="width:60px;">
								<label for="content" class="radioeditorstyle">Loại bài:</label>
							</div><br>
							<div class="radioeditorstyle">
								<input type="radio" name="type" value="Khảo sát">Khảo sát
							</div>
							<div class="radioeditorstyle">
								<input type="radio" name="type" value="Tin tức">Tin Trồng trọt
							</div>
							<div class="radioeditorstyle">
								<input type="radio" name="type" value="Kỹ thuật">Kỹ thuật sản xuất
							</div>
							<div class="radioeditorstyle">
								<input type="radio" name="type" value="Mô hình sản xuất">Mô hình sản xuất
							</div>
						</div>
					@endif
					<br><br>
					<label for="img">Link hình ảnh:</label><br>
					@if ($mode === 2)
						<input name="img" type="text" value="{{ $post->img }}" class="inputlong inputstyle"><br>
					@else
						<input name="img" type="text" class="inputlong inputstyle"><br>
					@endif
					<br>
					<label for="info">Nội dung:</label> <br>
					@if ($mode === 2)
						<textarea name="content" rows="30">{{ $post->content }}</textarea><br>
					@else
						<textarea name="content" rows="30"></textarea><br>
					@endif

					<center><input type="submit" value="Đăng lên" class="submiteditorbutton"></center>

				</form>
			</div>
		</div>
	</div>

@endsection