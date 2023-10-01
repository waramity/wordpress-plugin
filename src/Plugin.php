<?php
/**
 * Plugin Class.
 *
 * @package waramity 
 */

namespace Waramity;

/**
 * Class Plugin.
 */
class Plugin {

	/**
	 * Constructor.
	 */
	public function __construct() {
		$this->init();
	}

	public function activate() {}
	public function deactivate() {}

	/**
	 * Initialize plugin
	 */
	private function init() {
		define( 'WARAMITY_PLUGIN_PATH', untrailingslashit( plugin_dir_path( __DIR__ ) ) );
		define( 'WARAMITY_PLUGIN_URL', untrailingslashit( plugin_dir_url( __DIR__ ) ) );
		define( 'WARAMITY_PLUGIN_BUILD_PATH', WARAMITY_PLUGIN_PATH . '/assets/build' );
		define( 'WARAMITY_PLUGIN_BUILD_URL', WARAMITY_PLUGIN_URL . '/assets/build' );
		define( 'WARAMITY_PLUGIN_VERSION', '1.0.0' );

		new Assets();
		new Patterns();
		new SearchApi();
	}
}
