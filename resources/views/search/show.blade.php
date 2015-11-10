<h1>Tim kiem</h1>
<form action="{{ route('search') }}" method="GET">
	<input type="text" name="searchinput" placeholder="Nhập để tìm kiếm" class="toolsearch darkgray"></input>
	<input type="submit" value="TÌM" class="toolsearchsubmit white"></form>
</form>
<hr>

@if (count($result["post"]) == 0 and count($result["bt"]) == 0) 
	<p>Không tìm thấy kết quả</p>
@else

@foreach ($result["bt"] as $bt)
	<h3><a href="{{ route('bt.show', $bt->id) }}">[Giống cây] Mã {{ $bt->code }}</a></h3>
	<ul>
		<li>Tên thông thường: {{ $bt->nameNormal }}</li>
		<li>Tên khoa học: {{ $bt->nameScience }}</li>
	</ul>	
@endforeach

@foreach ($result["post"] as $post)
	<h3><a href="{{ route('post.show', $post->id) }}">[Bài viết] {{ $post->title }}</a></h3>
	<p>{{ str_limit($post->content, 250) }}</p>
@endforeach

@endif