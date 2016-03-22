<?php

if (!defined('DB_NAME')) {
	define('DB_NAME', 'up');
	define('DB_USER', 'root');
	define('DB_PASSWORD', 'root');
	define('DB_HOST', 'localhost');
	define('DB_CHARSET', 'utf8');
	define('DB_COLLATE', 'utf8_unicode_ci');
}

if (!defined('WP_DEBUG')) {
	define('WP_DEBUG', false);
	define('WP_DEBUG_DISPLAY', false);
}

if (!defined('ABSPATH')) {
	define('ABSPATH', dirname(__FILE__) . '/');
}

define('WPTC_CUST_PURCHASES_TABLE', 'cust_purchases');
define('WPTC_CUST_SITES_TABLE', 'cust_sites');
define('WPTC_CUST_USERS_TABLE', 'cust_users');