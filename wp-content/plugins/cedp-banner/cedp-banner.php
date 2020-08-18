<?php
/**
 * Plugin Name: Cepd-Banner
 * Version:     1.0.0
 * Plugin URI:  https://cedp.solutions/wp-plugins/cepd-contact/
 * Author:      CedP
 * Author URI:  https://cedp.solutions
 * Text Domain: cedp-banner
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Description: Create contact custom post type and frontend form to add contact request.
 *
 * @package Cedp_Contact
 * @author  CedP
 * @version 1.0.0
 */

define('CEDP_BANNER_BASE_PATH', plugin_dir_path(__FILE__));
define('CEDP_BANNER_BASE_URL', plugin_dir_url(__FILE__));

require CEDP_BANNER_BASE_PATH . 'vendor/autoload.php';

$initializer = new \Cedp\Banner\Initializer();
$initializer->init();
?>
