<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php wp_head(); ?>
<?php
	$phpversion = phpversion();
	if( $phpversion > 7.4) : ?>

	<style type="text/css">		
		
		.product-item a i:before { line-height: 2; }

	</style>

<?php endif;?>

</head>
<body <?php body_class(); ?>>

<?php
if ( function_exists( 'wp_body_open' ) ) {
	wp_body_open();
}
/**
 * Default template location: immiex/header
 *
 * @hooked immiex_preloader_template_part - 10
 */
 do_action( 'immiex/preloader' ); 
?>


<div id="<?php immiex_wrapper_id(); ?>" <?php immiex_wrapper_class(); ?>>

	<?php
	get_template_part( 'header/header', get_post_type() );
	get_template_part( 'header/banner', get_post_type() );	
	?>