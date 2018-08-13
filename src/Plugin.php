<?php
/**
 * Created by PhpStorm.
 * User: serge
 * Date: 12/08/2018
 * Time: 19:21
 */

namespace TechSpokes\Properties;

/**
 * Class Plugin
 *
 * @package TechSpokes\Properties
 */
class Plugin {

	/**
	 * @var \TechSpokes\Properties\Plugin $instance
	 */
	protected static $instance;

	/**
	 * Plugin constructor.
	 */
	protected function __construct() {

		/**
		 * Fires before the plugin initiates.
		 *
		 * @since 0.0.1
		 */
		do_action( 'pre_properties_plugin_init', $this );

		/**
		 * Fires after the plugin initiates.
		 *
		 * @since 0.0.1
		 */
		do_action( 'properties_plugin_init', $this );
	}

	/**
	 * Loads the plugin within WordPress.
	 */
	public static function load() {

		self::getInstance();
	}

	/**
	 * @return \TechSpokes\Properties\Plugin
	 */
	public static function getInstance() {

		if ( ! ( self::$instance instanceof Plugin ) ) {
			self::setInstance( new self() );
		}

		return self::$instance;
	}

	/**
	 * @param \TechSpokes\Properties\Plugin $instance
	 */
	private static function setInstance( $instance ) {

		self::$instance = $instance;
	}
}
