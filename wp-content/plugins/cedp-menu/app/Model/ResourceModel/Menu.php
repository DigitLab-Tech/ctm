<?php
namespace Cedp\Menu\Model\ResourceModel;

class Menu{
  public function init(){
    add_action( 'init', [$this, 'register'] );
  }

  public function register(){
    if(!post_type_exists( 'menu_item' )){
      register_post_type( 'menu_item',[
        'labels' => [
         'name' => __( 'Menu items' ),
         'singular_name' => __( 'Menu item ' )
        ],
        'public' => true,
        'has_archive' => false,
        'supports' => array( 'title', 'custom-fields' )
      ]);
    }
  }
}
