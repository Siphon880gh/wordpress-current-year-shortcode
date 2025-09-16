<?php
/**
 * Plugin Name: WF Year Shortcode
 * Plugin URI: https://www.linkedin.com/in/weng-fung/
 * Description: A simple plugin that provides a shortcode [WF_YEAR] to display the current year.
 * Version: 1.0.0
 * Author: Weng Fei Fung
 * Author URI: https://www.linkedin.com/in/weng-fung/
 * License: GPL v2 or later
 * License URI: https://www.gnu.org/licenses/gpl-2.0.html
 * Text Domain: wf-year-shortcode
 * Domain Path: /languages
 */

// Prevent direct access
if (!defined('ABSPATH')) {
    exit;
}

/**
 * Main plugin class
 */
class WF_Year_Shortcode {

    /**
     * Constructor
     */
    public function __construct() {
        add_action('init', array($this, 'init'));
    }

    /**
     * Initialize the plugin
     */
    public function init() {
        // Register the shortcode
        add_shortcode('WF_YEAR', array($this, 'wf_year_shortcode_handler'));
    }

    /**
     * Shortcode handler for [WF_YEAR]
     * 
     * @param array $atts Shortcode attributes
     * @param string $content Shortcode content
     * @return string Current year
     */
    public function wf_year_shortcode_handler($atts = array(), $content = null) {
        // Get current year
        $current_year = date('Y');
        
        // Apply filter to allow customization
        $current_year = apply_filters('wf_year_shortcode_year', $current_year);
        
        return esc_html($current_year);
    }

    /**
     * Get current year (helper method)
     * 
     * @return string Current year
     */
    public static function get_current_year() {
        return date('Y');
    }
}

/**
 * Initialize the plugin
 */
function wf_year_shortcode_init() {
    new WF_Year_Shortcode();
}

// Hook into WordPress
add_action('plugins_loaded', 'wf_year_shortcode_init');

/**
 * Activation hook
 */
register_activation_hook(__FILE__, 'wf_year_shortcode_activate');

function wf_year_shortcode_activate() {
    // Flush rewrite rules on activation
    flush_rewrite_rules();
}

/**
 * Deactivation hook
 */
register_deactivation_hook(__FILE__, 'wf_year_shortcode_deactivate');

function wf_year_shortcode_deactivate() {
    // Clean up on deactivation
    flush_rewrite_rules();
}
