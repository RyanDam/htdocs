<div class="postitemholder">
	<h2><a href="{{ route('post.show', $p->id) }}">{{ $title }}</a></h2>
	<label>Mục: </label><span>{{ $type }}</span>
	<p>{{ str_limit($content, 250) }}</p>
</div>
