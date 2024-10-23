<?php get_header(); /* Template Name: New Page */ ?>

<main class="wrapper">

<div class="main_content">
	
		<?php do_action('immiex_content_before');	?>

		
		
		<?php
		if ( have_posts() ) :

			/* Start the Loop */
			while ( have_posts() ) : the_post();

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', 'page' );

				wp_link_pages( array(					
					'nextpagelink'     => esc_attr__( 'Next', 'immiex'),
					'previouspagelink' => esc_attr__( 'Previous', 'immiex' ),
					'pagelink'         => '%',
					'echo'             => 1
				) );

			endwhile;

			// If comments are open or we have at least one comment, load up the comment template.
            if ( comments_open() || get_comments_number() ) :
                comments_template();
            endif;
			
		else :

			get_template_part( 'template-parts/post/content', 'none' );

		endif;
		?>
		</div>
		
		
	<?php do_action('immiex_content_after');	?>
	<div class="sidebar_content">
        
    <?php get_template_part( 'template-parts/custom', 'sidebar' ); ?> 
    </div>
	 			
	</main>
<?php get_footer(); ?>

<style>

	.wrapper {  margin:0px auto; position: relative;}
	.sidebar_content { position: absolute; top:120px; right:20%; max-width: 380px; width:100%; height:350px;  }
	</style>