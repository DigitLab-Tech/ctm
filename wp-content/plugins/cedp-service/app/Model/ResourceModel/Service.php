<?php
namespace Cedp\Service\Model\ResourceModel;

class Service{
  public function init(){
    add_action( 'init', [$this, 'register'] );
  }

  public function register(){
    if(!post_type_exists( 'service' )){
      register_post_type( 'service',[
        'labels' => [
         'name' => __( 'Services' ),
         'singular_name' => __( 'Service' )
        ],
        'public' => true,
        'has_archive' => false,
        'supports' => array( 'title', 'editor', 'custom-fields' )
      ]);
    }
  }
}
