<?php
?>
	
	<div class="entry-content">
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s', 'sds-revamp' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'sds-revamp' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
				'pagelink'    => '<span class="screen-reader-text">' . __( 'Page', 'sds-revamp' ) . ' </span>%',
				'separator'   => '<span class="screen-reader-text">, </span>',
			) );
		/*the_content();*/
		?>
		<?php echo do_shortcode("[ninja_form id=1]"); ?>
		<?php echo apply_filters( 'the_content',' [ninja_form id=1] '); ?>
	</div><!-- .entry-content -->

	<?php
		// Author bio.
		if ( is_single() && get_the_author_meta( 'description' ) ) :
			get_template_part( 'author-bio' );
		endif;
	?>


