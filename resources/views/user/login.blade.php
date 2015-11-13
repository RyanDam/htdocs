@extends('layout.layout')

@section('title', 'Đăng nhập')

@section('content')
	<div class="mainloginholder">
		<div class="mainloginholdermask">
		
		</div>
		<div class="logininfoholder">
			<div class="logintextholder" style="padding-top: 20px;">
				<center><h1 class="welcometext fontgothambold">CHUYÊN TRANG KHUYẾN NÔNG</h1></center>
				<center>
					<p class="white">
						Khuyến nông là trang mạng dùng để tìm kiếm thông tin về nông nghiệp<br>
						Bao gồm các thông tin về giống cây trồng, những bài viết hướng dẫn về làm nông<br>
						và các thông tin hữu ích từ các chuyên gia, kỹ sư nông nghiệp.
					</p>
				</center>
			</div>
			<div class="loginholder">
				<div class="loginformholder" style="padding-top: 40px;">
					<label for="code darkgray">Tên đăng nhập:</label> <br>
					<input name="code darkgray" type="text" value="" class="inputlong inputstyle" style="width:200px;"><br><br>
					<label for="code darkgray">Mật khẩu:</label> <br>
					<input name="code darkgray" type="text" value="" class="inputlong inputstyle" style="width:200px;"><br><br>
					<br>
					<center><input type="submit" value="Đăng nhập" class="toolsearchsubmit white"></center>
				</div>
			</div>
		</div>
	</div>
@endsection