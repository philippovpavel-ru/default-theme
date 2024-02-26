<?php
if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

if ( ! defined( '_SD_T_DIR_' ) ) {
	define( '_SD_T_DIR_', get_template_directory() );
}

if ( ! defined( '_SD_T_URL_' ) ) {
	define( '_SD_T_URL_', get_template_directory_uri() );
}

require_once _SD_T_DIR_ .'/inc/theme-setup.php';
require_once _SD_T_DIR_ .'/inc/theme-scripts.php';
require_once _SD_T_DIR_ .'/inc/theme-custom.php';