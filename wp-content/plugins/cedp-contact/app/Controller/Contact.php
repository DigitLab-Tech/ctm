<?php
namespace Cedp\Contact\Controller;
class Contact{
  public function init(){
    $this->_registerHooks();
  }

  protected function _registerHooks(){
    add_action('wp_ajax_nopriv_send_contact_form', [$this, 'doIt']);
    add_action('wp_ajax_send_contact_form', [$this,'doIt']);
    add_action('cedp_render_content', [$this,'render'], 100);
  }

  public function doIt(){
    	try{
    		$id = wp_insert_post([
    			'post_type' => 'contact',
    			'post_title' => sanitize_text_field($_POST['name']),
    			'post_status' => 'publish'
    		]);
    		add_post_meta($id, 'email', sanitize_text_field($_POST['email']));
    		add_post_meta($id, 'phone', sanitize_text_field($_POST['phone']));
    		add_post_meta($id, 'activity', sanitize_text_field($_POST['activity']));
    		add_post_meta($id, 'subject', sanitize_text_field($_POST['subject']));
    		wp_die(json_encode('success'), 200);
    	}
    	catch(\Exception $e){
    		wp_die('Something went wrong', 400);
    	}
  }

  public function render(){
    \Cedp\Contact\View\ContactForm::render($this->_getViewData());
  }

  protected function _getViewData(){
  	$optionNames = [
  		'cedp_contact_address',
	    'cedp_contact_city',
	    'cedp_contact_province',
	    'cedp_contact_country',
	    'cedp_contact_zipcode',
	    'cedp_contact_email',
	    'cedp_contact_phone'
    ];

  	$data = [];

  	foreach ($optionNames as $name => $label){
  		$data[$name] = get_option($name);
    }

  	return $data;
  }
}
