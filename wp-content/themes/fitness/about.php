

	
	<div class="container">
		<h1><?php single_post_title() ?></h1>

	</div>


<div class="container">

	<?php 
global $more;
$more = 1;       // игнорируем тег more (не обрезаем).
the_content();
?>

	<div class="clear"></div>
</div>




