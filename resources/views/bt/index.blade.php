<h1>Danh sách giống cây</h1>
<a href="{{ route('bt.create') }}">Tạo giống cây</a>
@foreach ($bts as $bt) 
	<h2><a href="{{ route('bt.show', $bt->id) }}">Mã {{ $bt->code }}</a></h2>
	<ul>
		<li><b>Tên thông thường: </b>{{ $bt->nameNormal }}</li>
		<li><b>Tên khoa học: </b>{{ $bt->nameScience }}</li>
	</ul>
@endforeach