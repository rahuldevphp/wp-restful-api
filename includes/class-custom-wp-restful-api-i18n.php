<?php

/**
 * Define the internationalization functionality
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @link       https://github.com/rahuldevphp
 * @since      1.0.0
 *
 * @package    Custom_Wp_Restful_Api
 * @subpackage Custom_Wp_Restful_Api/includes
 */

/**
 * Define the internationalization functionality.
 *
 * Loads and defines the internationalization files for this plugin
 * so that it is ready for translation.
 *
 * @since      1.0.0
 * @package    Custom_Wp_Restful_Api
 * @subpackage Custom_Wp_Restful_Api/includes
 * @author     Rahul Prajapati <p.rahul5892@gmail.com>
 */
class Custom_Wp_Restful_Api_i18n {


	/**
	 * Load the plugin text domain for translation.
	 *
	 * @since    1.0.0
	 */
	public function load_plugin_textdomain() {

		load_plugin_textdomain(
			'custom-wp-restful-api',
			false,
			dirname( dirname( plugin_basename( __FILE__ ) ) ) . '/languages/'
		);

	}



}
