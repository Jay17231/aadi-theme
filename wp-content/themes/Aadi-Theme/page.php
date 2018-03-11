<!doctype html>
<html>

<body>

<div class="wrapper">
	
	<?php include("header.php"); ?>

	<?php 
		if ( have_posts() ) : while ( have_posts() ) : the_post();

			get_template_part( 'content', get_post_format() );

		endwhile; endif; 
	?>
		
	<?php include ("footer.php");?>
	
</div>
</body>
</html>