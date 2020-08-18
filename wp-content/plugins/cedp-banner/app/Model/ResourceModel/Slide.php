<?php
namespace Cedp\Banner\Model\ResourceModel;
class Slide {
	public function init(){
		add_action( 'init', [$this, 'register'] );
	}

	public function register(){
		if(!post_type_exists( 'slide' )){
			register_post_type( 'slide',[
				'labels' => [
					'name' => __( 'Slides' ),
					'singular_name' => __( 'Slide' )
				],
				'public' => true,
				'has_archive' => false,
				'supports' => array( 'title', 'editor', 'custom-fields' )
			]);
		}
	}
}