<?php
/**
 * Plugin Name: Custom Product Builder For WooCommerce
 * Plugin URI: https://twitter.com/CoderPress
 * Author: CoderPress
 * Description: Custom Product Builder For WooCommerce, Let customer design there own product.
 * Version: 1.0
 * Author: CoderPress
 * License: GPL v2 or later
 * Stable tag: 1.0
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Tags: woocommerce, product builder, custom, designer
 * @author CoderPress
 * @url https://twitter.com/CoderPress
 */


defined( 'ABSPATH' ) || exit;

if ( ! defined( 'CPBWC_PLUGIN_FILE' ) ) {
    define( 'CPBWC_PLUGIN_FILE', __FILE__ );
}

if ( ! defined( 'CPBWC_PLUGIN_URL' ) ) {
    define( 'CPBWC_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
}

require dirname( CPBWC_PLUGIN_FILE ) . '/includes/class-custom-product-builder-wc.php';

\CustomProductBuilderWC\Init::get_instance();
