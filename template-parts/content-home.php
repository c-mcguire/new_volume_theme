<?php
/**
 * Template part for displaying the home page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package new_volume
 */
?>
<article id="post-<?php the_ID(); ?>" class="homepage-article"<?php post_class(); ?>>

	<div id="home-page-content" class="entry-content home-page-content">
		<?php
		
		//the_content();
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'new_volume' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		// wp_link_pages( array(
		// 	'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'new_volume' ),
		// 	'after'  => '</div>',
		// ) );
		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
