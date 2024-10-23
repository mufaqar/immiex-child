<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

	immiex_parse_by_format( esc_attr($title), '<span>%1$s</span>', '<a href="mailto:%1$s" class="callusbtn txt-400"><i class="far fa-envelope-open"></i>%1$s</a>');
