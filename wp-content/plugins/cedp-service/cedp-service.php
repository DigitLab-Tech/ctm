<?php
/**
 * Plugin Name: Cepd-Service
 * Version:     1.0.0
 * Plugin URI:  https://cedp.solutions/wp-plugins/cepd-contact/
 * Author:      CedP
 * Author URI:  https://cedp.solutions
 * Text Domain: cedp-service
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Description: Create service custom post type and frontend representation
 *
 * @package Cedp_Service
 * @author  CedP
 * @version 1.0.0
 */

 define('CEDP_SERVICE_BASE_PATH', plugin_dir_path(__FILE__));
 define('CEDP_SERVICE_BASE_URL', plugin_dir_url(__FILE__));

 require CEDP_SERVICE_BASE_PATH . 'vendor/autoload.php';

 $initializer = new \Cedp\Service\Initializer();
 $initializer->init();
?>
