<?php

/**
 * Plugin Name: cash Advance Calculator
 * Plugin URI: http://gabecode.com
 * Description: a Simple block that contains a Cash advance Calculator, custom made (with love <3 ) by Your Dev Apps Manager Gabriel. Use the shortcode [ldb-cash-calculator] in the page you want to display the block
 * Version: 1.1
 * Requires at least: 5.2
 * Requires PHP: 7.2
 * Author: Gabriel Coronado
 * Author URI: https://github.com/gcoronado5100/ldb-roi-calculator-wp
 * Text Domain: ldb-cash-calc
 * Domain Path: /languages
 */

if (!function_exists('add_action')) {
    echo 'You are on my spot (Sheldon Cooper)';
    exit;
}

// Setup
define('LDB_CASH_CALC_PATH', plugin_dir_path(__FILE__));
define('LDB_CASH_CALC_DIR', plugin_dir_url(__FILE__));

// Includes
include(LDB_CASH_CALC_PATH . 'includes/front/enqueue.php');
include(LDB_CASH_CALC_PATH . 'includes/front/calculator-template.php');

// Hooks
add_action('wp_enqueue_scripts', 'ldb_cash_enqueue');
add_shortcode('ldb-cash-calculator', 'ldb_cash_calculator_template');
