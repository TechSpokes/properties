<?php
/**
 * Plugin Name: Properties by TechSpokes Inc.
 * Plugin URI:  https://techspokes.com/property-management-software/
 * Description: Property management software.
 * Version:     0.0.1
 * Author:      TechSpokes Inc.
 * Author URI:  https://techspokes.com
 * Text Domain: properties
 * License:     GPL-3.0+
 * License URI: http://www.gnu.org/licenses/gpl-3.0.txt
 */

/**
 * Make sure ABSPATH is defined.
 */
defined( 'ABSPATH' ) or die( sprintf( 'Please do not load %s directly', __FILE__ ) );

/**
 * Load plugin namespace.
 */
require_once dirname( __FILE__ ) . '/autoload.php';

/**
 * Load properties plugin text domain.
 */
add_action( 'plugins_loaded', function () {

	load_plugin_textdomain( 'properties', false, basename( dirname( __FILE__ ) . '/languages' ) );
}, 10, 0 );

/**
 * Load properties plugin.
 */
add_action( 'plugins_loaded', array( 'TechSpokes\Properties\Plugin', 'load' ), 10, 0 );
