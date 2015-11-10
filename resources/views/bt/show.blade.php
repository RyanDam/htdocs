<a href="{{ route('bt.index') }}">Quay lại</a>
<h1>Giống cây mã : {{ $bt->code }}</h1>
<ul>
	<li><b>Tên thông thường: </b>{{ $bt->nameNormal }}</li>
	<li><b>Tên khoa học: </b>{{ $bt->nameScience }}</li>
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