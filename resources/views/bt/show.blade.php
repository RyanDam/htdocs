@extends('layout.layout')

@section('title', 'Kết quả')

@section('content')
	<div class="mainviewbtholder">
		<div class="viewbtholder">
			<br>
			<div class="btviewcontrolholder">
				<form action="{{ route('bt.destroy', $bt->id) }}" method="POST" class="btviewremovebtholder menu white">
					{{ method_field('DELETE') }}
					{{ csrf_field() }}
					<input type="submit" value="Xóa" class="btviewremovebt white">
				</form>
				<a href="{{ route('bt.edit', $bt->id) }}" class="btvieweditbt menu white">Chỉnh sửa</a>
			</div>
			<br><br>

<<<<<<< HEAD
			<div class="btviewheader">
				<div class="btheadimgholder">
					<img src="/img/{{ $bt->img }}" class="btviewimg">
					<div class="btviewmask"></div>
				</div>
				<div class="btviewinfoholder">
					<h1 class="btviewtitle fontgothambold darkgray">Tên thông thường: {{ $bt->nameNormal }}</h1>
					<ul style="list-style-type: none;margin: 0px;padding:0;">
						<li class="btviewitem darkgray"><b>Mã giống cây:</b> {{ $bt->code }}</li>
						<li class="btviewitem darkgray"><b>Tên khoa học: </b>{{ $bt->nameScience }}</li>
					</ul>
				</div>
			</div>
			<div class="btviewcontent">
				<p>
					{!! $bt->info !!}
				</p>
			</div>
				
		</div>
	</div>
=======
	<a href="{{ route('bt.index') }}">Quay lại</a>
	<h1>Giống cây mã : {{ $bt->code }}</h1>
	<ul>
		<li><b>Tên thông thường: </b>{{ $bt->nameNormal }}</li>
		<li><b>Tên khoa học: </b>{{ $bt->nameScience }}</li>
		<li><b>Vùng miền: </b>{{ $bt->area }}</li>
	</ul>
	<img src="{{ $bt->img }}" width="600" height="400"> <br>
	<h3>Thông tin</h3>
	<p>
		{!! nl2br($bt->info) !!}
	</p>
	<a href="{{ route('bt.edit', $bt->id) }}">Chỉnh sửa</a> | 
	<form action="{{ route('bt.destroy', $bt->id) }}" method="POST">
		{{ method_field('DELETE') }}
		{{ csrf_field() }}
		<input type="submit" value="Xóa">
	</form>

>>>>>>> master
@endsection