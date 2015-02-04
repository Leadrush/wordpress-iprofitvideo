<?php
/**
 * @package   IPV
 * @author    Leadrush Ltd. <support@reallysuccessful.com>
 * @license   GPL-2.0+
 * @link      http://leadrushsupport.com/
 * @copyright 2014 Leadrush Ltd.
 *
 * @wordpress-plugin
 * Plugin Name:			iProfitVideo
 * Plugin URI:        	http://iprofitvideo.com
 * Description:       	Load your video agent easily in Wordpress
 * Version:           	1.0.0
 * Author:       		Leadrush Ltd.
 * Author URI:       	http://leadrushsupport.com/
 * Text Domain:       	ipv
 * License:           	GPL-2.0+
 * License URI:       	http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: 	https://github.com/leadrush/wordpress-iprofitvideo
 */

// If this file is called directly, abort.
if ( ! defined( 'WPINC' ) ) {
	die;
}

/*----------------------------------------------------------------------------*
 * Public-Facing Functionality
 *----------------------------------------------------------------------------*/


require_once( plugin_dir_path( __FILE__ ) . 'public/class-ipv.php' );

register_activation_hook( __FILE__, array( 'IPV', 'activate' ) );
register_deactivation_hook( __FILE__, array( 'IPV', 'deactivate' ) );

add_action( 'plugins_loaded', array( 'IPV', 'get_instance' ) );


if ( is_admin() && ( ! defined( 'DOING_AJAX' ) || ! DOING_AJAX ) ) {

	require_once( plugin_dir_path( __FILE__ ) . 'admin/class-ipv-admin.php' );
	add_action( 'plugins_loaded', array( 'IPV_Admin', 'get_instance' ) );

}
