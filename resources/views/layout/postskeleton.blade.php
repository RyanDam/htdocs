<div class="postholder whiteback">

	<?php
		// $isleft = true;

		if ($isleft) 
			echo '<div class="leftsidepost leftpos">';
		else 
			echo '<div class="leftsidepost rightpos">';
	?>
	<?php echo '<img src="img/';
		echo $thumbnail;
		echo '" class="postthumbnail">';?>
		<div class="postthumbnailmask">
			
		</div>
	</div>



	<?php
		if ($isleft) 
			echo '<div class="titleholder lefttitle">';
		else 
			echo '<div class="titleholder righttitle">';
	?>
		<h1 class="posttitle fontgothambold darkgray"><?php echo $title;?></h1>
	</div>
	<?php
		if ($isleft) 
			echo '<div class="contentholder rightpos padleftcontent">';
		else 
			echo '<div class="contentholder leftpos padrightcontent">';
	?>
		<p class="postcontent fontcontent">
		<?php echo $content; ?>
		</p>
		<p class="postcontent blue fontcontent">
			xem tiếp...
		</p>
	</div>
</div>