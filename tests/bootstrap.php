<?php
ob_start();

// Set directory
define( 'WP_CODEANDBEAUTY_DIR', dirname( __DIR__ ) . '/' );
$_tests_dir = getenv( 'WP_TESTS_DIR' );

// Setup environment
if ( ! $_tests_dir ) {
	$_tests_dir = '/tmp/wp-tests/codeandbeauty-tests-lib';
} else {
	$_tests_dir = '/srv/www/wordpress-develop/trunk/tests/phpunit';

	if ( ! file_exists( $_tests_dir ) ) {
		// Check src
		$_tests_dir = '/srv/www/wordpress-develop/tests/phpunit';
	}
}

if ( ! file_exists( $_tests_dir ) ) {
	// Got problem with test dir location, this plugin is in 6 level deep
	$_tests_dir = dirname( dirname( dirname( dirname( WP_CODEANDBEAUTY_DIR ) ) ) ) . '/tests/phpunit';
}

define( 'WP_TESTS_DIR', $_tests_dir );

// Load tests bootstrap
require WP_TESTS_DIR . '/includes/bootstrap.php';
