<?php
/**
 * Plugin Name: Cepd-Menu
 * Version:     1.0.0
 * Plugin URI:  https://cedp.solutions/wp-plugins/cepd-contact/
 * Author:      CedP
 * Author URI:  https://cedp.solutions
 * Text Domain: cedp-menu
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Description: Menu Manager
 *
 * @package Cedp_Menu
 * @author  CedP
 * @version 1.0.0
 */

 define('CEDP_MENU_BASE_PATH', plugin_dir_path(__FILE__));
 define('CEDP_MENU_BASE_URL', plugin_dir_url(__FILE__));

 require CEDP_MENU_BASE_PATH . 'vendor/autoload.php';

 $initializer = new \Cedp\Menu\Initializer();
 $initializer->init();
?>
