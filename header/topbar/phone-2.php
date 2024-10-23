<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
if ($title) {
	$phone = immiex_get_option('topbar_phone_2');
	immiex_parse_by_format( esc_attr($title), '<span>%1$s</span>', '<a href="tel:'.immiex_remove_specialchar($phone).'" class="callusbtn b-right txt-400 pl-2"><i class="fas fa-phone"></i>%1$s</a>');
 }