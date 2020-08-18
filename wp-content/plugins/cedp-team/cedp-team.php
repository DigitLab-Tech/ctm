<?php
/**
 * Plugin Name: Cepd-Team
 * Version:     1.0.0
 * Plugin URI:  https://cedp.solutions/wp-plugins/cepd-contact/
 * Author:      CedP
 * Author URI:  https://cedp.solutions
 * Text Domain: cedp-team
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Description: Team manager
 *
 * @package Cedp_Menu
 * @author  CedP
 * @version 1.0.0
 */

 define('CEDP_TEAM_BASE_PATH', plugin_dir_path(__FILE__));
 define('CEDP_TEAM_BASE_URL', plugin_dir_url(__FILE__));

 require CEDP_TEAM_BASE_PATH . 'vendor/autoload.php';

 $initializer = new \Cedp\Team\Initializer();
 $initializer->init();
