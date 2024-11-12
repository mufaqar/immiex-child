<?php get_header(); /* Template Name: Business Listing  */ ?>

	<main class="wrapper">

		<div class="main_content">	

		<nav class="pb-15 mt-15" aria-label="breadcrumb">
		  	<ol class="breadcrumb p-0 m-0">
		    	<?php bcn_display_list(); ?>
		  	</ol>
	  	</nav>
			<?php do_action('immiex_content_before');	?>

			<?php
				// Arguments for the custom query
				$args = array(
					'post_type' => 'business-listings', // Your custom post type name
					'posts_per_page' => -1,    // Retrieve all posts
					'order' => 'ASC',          // Order ascending
					'orderby' => 'title'       // Order by post title
				);

				// Custom query
				$business_query = new WP_Query($args);

				// Check if there are posts
				if ($business_query->have_posts()) :
					while ($business_query->have_posts()) : $business_query->the_post(); ?>

						<div class="business-item">
							<h2><?php the_title(); ?></h2>
							<p><?php the_excerpt(); ?></p>
							<a href="<?php the_permalink(); ?>">Read More</a>
						</div>

					<?php endwhile;
				else : ?>
					<p>No businesses found.</p>
				<?php endif; 

				// Reset post data to the main query
				wp_reset_postdata();
				?>

			
			<?php do_action('immiex_content_after');	?>
		</div>
		<div class="sidebar_content">        
			<?php get_template_part( 'template-parts/custom', 'sidebar' ); ?> 
		</div>	 			
	</main>
<?php get_footer(); ?>

<style>


	</style>