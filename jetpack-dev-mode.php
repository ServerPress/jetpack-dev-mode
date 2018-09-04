<?php
/*
Plugin Name: JetPack Dev Mode
Plugin URI: http://serverpress.com/plugins/debug-trace
Description: Forces JetPack into "dev" mode while working under DesktopServer.
Author: Dave Jesch
Version: 1.0
Text Domain: jetpack-dev-mode
Author URI: http://steveorevo.com/
*/

if ( FALSE === stripos( __DIR__, 'ds-plugins' ) ) {
	// detect if not in the ds-plugins folder
	if ( is_admin() )
		add_action( 'admin_notices', 'jetpackdm_install_message' );
	return;		// do not initialize the rest of the plugin
}

/**
 * Display admin notification to install plugin in correct directory
 */
function jetpackdm_install_message()
{
	if ( 'Darwin' === PHP_OS )
		$correct_dir = '/Applications/XAMPP/ds-plugins/';		// mac directory
	else
		$correct_dir = 'C:\\xampplite\\ds-plugins\\';			// Windows directory

	echo '<div class="notice notice-error">',
		'<p>',
		sprintf( __('<b>Notice:</b> The JetPack Dev Mode plugin needs to be installed in Desktop Server\'s ds-plugins directory.<br/>Please install in %1$sjetpack-dev-mode', 'jetpack-dev-mode' ),
			$correct_dir),
		'</p>',
		'</div>';
}
