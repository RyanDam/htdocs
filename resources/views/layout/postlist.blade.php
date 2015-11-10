<div class="postitemholder">
	<div class="thumbnailitemholder">
		<img src="img/{{$thumbnail}}" class="thumbnailitem">
	</div>
	<div class="contenditemholder">
		<h2><a href="{{ route('post.show', $p->id) }}" class="fontgothambold darkgray menu">{{ $title }}</a></h2>
		<p class="postcontent fontcontent itemcontent darkgray">{{ str_limit($content, 250) }}</p>
	</div>
	<div class="posttypeitemholder">
		<h3 class="posttypeitem darkgray fontgothambold">
			{{$type}}
		</h3>
	</div>
</div>
