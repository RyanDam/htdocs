<div class="postreviewholder whiteback">
	<div class="thumbnailholder">
		<?php echo '<img src="img/'; echo $thumbnail; echo '" class="thumbnail">';?>
	</div>
	<div class="postcontent_rv">
		<div class="titleholder_rv">
			<h1 class="title_rv fontgothambold darkgray">
				<?php echo $title;?>
			</h1>
		</div>
		<div class="contentholder_rv">
			<p class="content_rv fontcontent">
				<?php
					$abc = str_replace("<p class=\"", "<p  class=\"content_rv fontcontent ", $content);
					$abc = str_replace("<p>", "<p  class=\"content_rv fontcontent\"> ", $abc)
				?>
				{!! str_limit($abc, 350) !!}
			</p>
		</div>
	</div>
		
</div>