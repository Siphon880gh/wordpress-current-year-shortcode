=== WF Year Shortcode ===
Contributors: yourname
Tags: shortcode, year, copyright, date
Requires at least: 4.7
Tested up to: 6.4
Requires PHP: 7.4
Stable tag: 1.0.0
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

A simple plugin that provides a shortcode [WF_YEAR] to display the current year.

== Description ==

WF Year Shortcode is a lightweight WordPress plugin that adds a simple shortcode to display the current year. This is particularly useful for copyright notices, footers, or any content where you want to automatically display the current year without manually updating it each year.

**Features:**
* Simple `[WF_YEAR]` shortcode
* Automatically displays the current year
* Lightweight and fast
* No configuration needed
* Developer-friendly with filter hooks

**Usage:**
Simply add `[WF_YEAR]` anywhere in your posts, pages, or widgets, and it will be replaced with the current year (e.g., 2025).

**Example:**
```
Copyright © [WF_YEAR] Your Company Name
```
Will display as:
```
Copyright © 2024 Your Company Name
```

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/wf-year-shortcode` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress.
3. Use the `[WF_YEAR]` shortcode in your posts, pages, or widgets.

== Frequently Asked Questions ==

= How do I use the shortcode? =

Simply type `[WF_YEAR]` anywhere in your content where you want the current year to appear.

= Does the year update automatically? =

Yes! The shortcode will always display the current year based on your server's time zone.

= Can I customize the output? =

Developers can use the `wf_year_shortcode_year` filter to customize the output:

```php
add_filter('wf_year_shortcode_year', function($year) {
    return '© ' .  $year . ' Your Company. All rights reserved.';
});
```

= Is this plugin compatible with page builders? =

Yes, the shortcode works with most page builders that support WordPress shortcodes.

== Screenshots ==

1. Example usage in a post editor
2. Frontend display of the shortcode

== Changelog ==

= 1.0.0 =
* Initial release
* Added [WF_YEAR] shortcode functionality
* Basic plugin structure and documentation

== Upgrade Notice ==

= 1.0.0 =
Initial release of Year Shortcode plugin.

== Developer Information ==

**Hooks:**
* `wf_year_shortcode_year` - Filter to modify the year output

**Functions:**
* `WF_Year_Shortcode::get_current_year()` - Static method to get current year

For more information and support, please visit the plugin's repository or contact the developer.
