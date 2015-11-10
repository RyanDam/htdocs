<div class="postitemholder">
	<div class="thumbnailitemholder">
		<img src="img/{{$thumbnail}}" class="thumbnailitem">
	</div>
	<div class="contenditemholder">
		<h2><a href="{{ route('post.show', $p->id) }}" class="fontgothambold darkgray menu">{{ $title }}</a></h2>
		<!-- <label>Mục: </label><span>{{ $type }}</span> -->
		<p class="postcontent fontcontent">{{ str_limit($content, 250) }}</p>
	</div>
</div>
