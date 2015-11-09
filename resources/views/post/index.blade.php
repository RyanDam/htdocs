<a href="{{ route('post.create') }}">Tạo bài</a>
@foreach ($post as $p) 
	<h2><a href="{{ route('post.show', $p->id) }}">{{ $p->title }}</a></h2>
	<label>Mục</label><span>{{ $p->type }}</span>
	<p>{{ str_limit($p->content, 250) }}</p>
@endforeach