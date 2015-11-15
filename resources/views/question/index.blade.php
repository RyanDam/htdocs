@extends('layout.editor')

@section('title', 'Tư vấn')

@section('content')
	<div class="mainquesholder">
		<div class="quesinfoholder">
			<label for="title">Tiêu đề câu hỏi:</label> <br>
			<input name="title" type="text" value="" required class="inputlong inputstyle"> <br> <br>

			<label for="title">Nội dung câu hỏi:</label> <br>
			<textarea name="content" rows="30"></textarea><br>
			<center><input type="submit" value="Đăng câu hỏi" class="submiteditorbutton"></center><br><br>
		</div>
	</div>
@endsection