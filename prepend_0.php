<?php
// bind early and suppress initial redefine notice, gets set back to E_ALL in WP's load.php
error_reporting( E_ALL & ~E_NOTICE );
if ( 'cli' !== PHP_SAPI ) {
	define( 'JETPACK_DEV_DEBUG', TRUE );
}
