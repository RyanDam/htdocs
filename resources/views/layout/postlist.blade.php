<style type="text/css">
	/*p {
		font-size: 14px;
	}*/
</style>

<div class="postitemholder">
	<div class="thumbnailitemholder">
		<img src="/img/{{$thumbnail}}" class="thumbnailitem">
	</div>
	<div class="contenditemholder">

	@if ($mode === '1')
		<h2><a href="{{ route('bt.show', $id) }}" class="fontgothambold darkgray menu">{{$title}}</a></h2>
	@elseif ($mode === '2')
		<h2><a href="{{ route('post.show', $id) }}" class="fontgothambold darkgray menu">{{$title}}</a></h2>
	@endif

	<?php
		// $abc = str_replace("<p>", " ", $content);
		// $xyz = str_replace("</p>", " ", $abc);
	?>

		<p class="postcontent fontcontent itemcontent darkgray">{!! str_limit($content, 250) !!}</p>
	</div>
	<div class="posttypeitemholder">
		<h3 class="posttypeitem darkgray fontgothambold">
			{{$type}}
		</h3>
	</div>
</div>
