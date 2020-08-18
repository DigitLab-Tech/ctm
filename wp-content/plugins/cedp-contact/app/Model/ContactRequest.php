<?php
namespace Cedp\Contact\Model;

class ContactRequest{
    public function init(){
      $this->_registerHooks();
    }

    protected function _registerHooks(){
      add_action( 'init', [$this, 'addCpt'] );
      add_action( 'manage_contact_posts_columns', [$this,'customizeTableContent']);
      add_filter('manage_contact_posts_custom_column', [$this,'fillTable'], 10, 2);
    }

    public function addCpt() {
    	register_post_type( 'contact',[
    	  'labels' => [
    	   'name' => __( 'Contacts' ),
    	   'singular_name' => __( 'Contact' )
    		],
    	  'public' => true,
    	  'has_archive' => false,
    	]);
    }

    public function customizeTableContent($defaults) {
    		$date = $defaults['date'];
    		unset($defaults['date']);
        $defaults['email']  = 'Email';
        $defaults['phone']    = 'Phone';
        $defaults['activity']   = 'Activity';
        $defaults['subject'] = 'Subject';
    		$defaults['date'] = $date;
        return $defaults;
    }

    public function fillTable( $column_name, $post_id ) {
        if ($column_name == 'email') {
          echo get_post_meta( $post_id, 'email', true );
        }
        if ($column_name == 'phone') {
        	echo get_post_meta( $post_id, 'phone', true );
        }
        if ($column_name == 'activity') {
        	echo get_post_meta( $post_id, 'activity', true );
        }
    		if ($column_name == 'subject') {
    			echo get_post_meta( $post_id, 'subject', true );
    		}
    }
}
