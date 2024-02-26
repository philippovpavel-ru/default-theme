<?php
add_action( 'after_setup_theme', '_sd_t_content_width', 0 );
function _sd_t_content_width() {
	$GLOBALS['content_width'] = apply_filters( '_sd_t_content_width', 1320 );
}