<?php
/**
 * Plugin Name:       Plugin name
 * Description:       Example block scaffolded with Create Block tool.
 * Requires at least: 6.3
 * Requires PHP:      7.4
 * Version:           0.1.0
 * Author:            Jean Paiva
 * License URI:       https://www.mit.edu/~amini/LICENSE.md
 * Text Domain:       plugin-domain
 *
 * @package           plugin-domain
 */

namespace Plugin;

const PLUGIN_VERSION     = '0.1.0';
const PLUGIN_TEXT_DOMAIN = 'plugin-domain';
define( 'PLUGIN_DIR', plugin_dir_path( __FILE__ ) );
define( 'PLUGIN_URL', plugin_dir_url( __FILE__ ) );

if ( file_exists( __DIR__ . '/vendor/autoload.php' ) ) {
	require_once __DIR__ . '/vendor/autoload.php';
}

add_action(
	'plugins_loaded',
	function () {
		Plugin::get_instance()->plugins_loaded();
	}
);

add_action(
	'init',
	function () {
		Plugin::get_instance()->init();
	}
);
