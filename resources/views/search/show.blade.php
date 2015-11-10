<h1>Tim kiem</h1>
<form action="{{ route('search') }}" method="GET">
	<input type="text" name="searchinput" placeholder="Nhập để tìm kiếm" class="toolsearch darkgray"></input>
	<input type="submit" value="TÌM" class="toolsearchsubmit white"></form>
</form>
<hr>

@if (empty($result["post"]) and empty($result["bt"])) 
	<p>Không tìm thấy kết quả</p>
@else

@foreach ($result["bt"] as $bt)
	<h3><a href="{{ route('bt.show', $bt->id) }}">Giống cây {{ $bt->nameNormal }}</a></h3>
	<ul>
		<li>{{ $bt->code }}</li>
		<li>{{ $bt->nameNormal }}</li>
	</ul>	
@endforeach

@foreach ($result["post"] as $post)
	<h3><a href="{{ route('post.show', $post->id) }}"> {{ $post->title }}</a></h3>
	<p>{{ str_limit($post->content, 250) }}</p>
@endforeach

@endif