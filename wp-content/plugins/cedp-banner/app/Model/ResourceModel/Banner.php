<?php
namespace Cedp\Banner\Model\ResourceModel;
class Banner {
	public function init(){
		add_action( 'init', [$this, 'register'] );
	}

	public function register(){
		if(!post_type_exists( 'banner' )){
			register_post_type( 'banner',[
				'labels' => [
					'name' => __( 'Banners' ),
					'singular_name' => __( 'Banner' )
				],
				'public' => true,
				'has_archive' => false,
				'supports' => array( 'title', 'editor', 'custom-fields' )
			]);
		}
	}
}