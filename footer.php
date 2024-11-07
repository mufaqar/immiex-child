<?php
/**
 * Default template location: immiex/footer
 *
 * @hooked immiex_newsletter_form_template_part - 10
 */
do_action('immiex/footer/before');
?>

<footer id="<?php immiex_footer_id(); ?>" <?php immiex_footer_class(); ?>>
	<div class="footer_top">
		<div class="container_row">
			<div class="footer_left">
				<p>
					Sign Up To Be
				</p>
				<h3>
					The First in Canadian Business Immigration News
				</h3>
			</div>
			<div class="footer_right">
			[contact-form-7 id="97d9ace" title="Footer Subscribe"] 
			</div>
		</div>
	</div>
	<div class="container">
		<?php
		/**
		 * Default template location: immiex/footer
		 *
		 * @hooked immiex_footer_widget_area_template_part - 10
		 * @hooked immiex_footer_copyright_template_part - 20
		 */
		do_action('immiex/footer');
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
do_action('immiex/footer/after');
?>

</div> <!-- End #<?php immiex_wrapper_id(); ?> (Start in header.php) -->

<?php wp_footer(); ?>

</body>

</html>