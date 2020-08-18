<?php
/**
 * Plugin Name: Cepd-Contact
 * Version:     1.0.0
 * Plugin URI:  https://cedp.solutions/wp-plugins/cepd-contact/
 * Author:      CedP
 * Author URI:  https://cedp.solutions
 * Text Domain: cedp-contact
 * License:     GPLv2 or later
 * License URI: https://www.gnu.org/licenses/gpl-3.0.html
 * Description: Create contact custom post type and frontend form to add contact request.
 *
 * @package Cedp_Contact
 * @author  CedP
 * @version 1.0.0
 */

 define('CEDP_CONTACT_BASE_PATH', plugin_dir_path(__FILE__));
 define('CEDP_CONTACT_BASE_URL', plugin_dir_url(__FILE__));

 add_action('wp_enqueue_scripts','addjs');

function addjs() {
    wp_enqueue_script( 'contact', plugins_url( 'app/Assets/js/contact.js', __FILE__ ));
    wp_localize_script('contact', 'ajax',['url' => admin_url( 'admin-ajax.php' )]);
}

 require CEDP_CONTACT_BASE_PATH . 'vendor/autoload.php';

 $initializer = new \Cedp\Contact\Initializer();
 $initializer->init();
?>
