<?php
if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
if ($title) {
	immiex_parse_by_format( esc_attr($title), '<span>%1$s</span>', '<span class="txt-400"><i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>
<i class="fas fa-star"></i>%1$s</span>' );
}

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}
if ($phone) {
	$phone = immiex_get_option('topbar_phone');
	echo '<a href="tel:'.immiex_remove_specialchar($phone).'" class="callusbtn txt-400"><i class="fas fa-phone"></i>+1-416-937-5352</a>';
}
 
 