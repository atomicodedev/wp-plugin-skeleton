<?php
/**
 * The Plugin class file.
 *
 * @package Plugin
 */

namespace Plugin;

use Plugin\Utils\Singleton;

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

/**
 * Main class for the plugin.
 *
 * @since 0.1.0
 */
class Plugin extends Singleton {

	/**
	 * Init action callback.
	 *
	 * @return void
	 */
	public function init() {
		register_block_type( PLUGIN_DIR . '/build/blocks/dynamic' );
		register_block_type( PLUGIN_DIR . '/build/blocks/static' );
	}

	/**
	 * Plugins loaded action callback.
	 *
	 * @return void
	 */
	public function plugins_loaded() {
		load_plugin_textdomain( PLUGIN_TEXT_DOMAIN );
	}
}
