<?php
namespace Cedp\Team\Model\ResourceModel;

class Member{
  public function init(){
    add_action( 'init', [$this, 'register'] );
  }

  public function register(){
    if(!post_type_exists( 'team_member' )){
      register_post_type( 'team_member',[
        'labels' => [
         'name' => __( 'Membres' ),
         'singular_name' => __( 'Membre' )
        ],
        'public' => true,
        'has_archive' => false,
        'supports' => array( 'title', 'custom-fields' )
      ]);
    }
  }
}
