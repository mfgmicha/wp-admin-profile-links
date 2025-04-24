<?php
/**
 * Plugin Name:     Admin Profile Links
 * Plugin URI:      https://github.com/mfgmicha/wp-admin-profile-link
 * Description:     Adds links to the current author page in the admin bar.
 * Author:          Micha Krapp <micha@mfgmicha.de>
 * Author URI:      https://mfgmicha.de/
 * Text Domain:     admin-profile-links
 * Domain Path:     /languages
 * Version:         1.0.0
 * License:         GPLv2 or later
 * License URI:     https://www.gnu.org/licenses/gpl-2.0.html
 *
 * @package mfgmicha/admin-profile-links
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

// Load main class.
require_once './src/class-admin-profile-links.php';
