<?php
$post_id = Immiex::get_id();

if (!is_page_template('temp-listing.php') && !is_singular('business-listings')) {
	?>

	<section id="page_banner"
		style="
	background-image: url('https://ace-law.com/wp-content/uploads/2024/10/Come-To-Canada-As-A-Self-Employed-Professional.png');">
		<div class="container_row wrapper" style="
	background-image: url('https://ace-law.com/wp-content/uploads/2024/02/Shireen.png');">
			<div class="banner_content">
				<h1><?php the_title() ?> </h1>
				<p><?php
				$value = get_field('excerpt');
				if( $value ) {echo $value;}else {
					echo "Empower your innovation by launching your start-up in Canada.";
				}?></p>
				<a href="<?php echo home_url('/consultancy'); ?>"
					class="talk_lawyer">Talk to a Laywer</a>


				<?php if (is_home()): ?>
					<a href="<?php echo home_url('/consultancy'); ?>"
						class="talk_lawyer">Talk to a Lawyer</a>
				<?php endif; ?>

			</div>
			<div class="banner_right">
				<div class="service_logos">
					<img src="https://ace-law.com/wp-content/uploads/2024/10/law-society-of-ontario-2.svg" alt="imgage" />
					<img src="https://ace-law.com/wp-content/uploads/2024/10/tla-2.svg" alt="imgage" />
					<img src="https://ace-law.com/wp-content/uploads/2024/10/oba-2.svg" alt="imgage" />
					<img src="https://ace-law.com/wp-content/uploads/2024/10/cila-1.svg" alt="imgage" />
				</div>
			</div>
	</section>

<?php } ?>