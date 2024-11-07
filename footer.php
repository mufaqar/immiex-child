		
		<?php 
		/**
		 * Default template location: immiex/footer
		 *
		 * @hooked immiex_newsletter_form_template_part - 10
		 */
		do_action( 'immiex/footer/before' ); 
		?>
		
		<footer id="<?php immiex_footer_id(); ?>" <?php immiex_footer_class(); ?>>
			<div class="container">

				<?php 
				/**
				 * Default template location: immiex/footer
				 *
				 * @hooked immiex_footer_widget_area_template_part - 10
				 * @hooked immiex_footer_copyright_template_part - 20
				 */
				do_action( 'immiex/footer' ); 
				?>				
				

			</div> <!-- End .container -->	
			<div class="parallax-inner"></div>									
		</footer> <!-- End footer -->

		<?php 
		/**
		 * Default template location: immiex/footer
		 *
		 * @hooked immiex_quick_contact_form_template_part - 10
		 */
		do_action( 'immiex/footer/after' ); 
		?>
		
	</div>	<!-- End #<?php immiex_wrapper_id(); ?> (Start in header.php) -->

<?php wp_footer(); ?>

</body>
</html>
