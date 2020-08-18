<?php
namespace Cedp\Banner;

class Initializer{
	protected $bannerController;
	protected $slides;
    public function init(){
    	$this->slides = new \Cedp\Banner\Model\ResourceModel\Slide\Collection();
		$this->slides->init();

	    if(get_option('cedp_home_show_banner')){
		    $this->bannerController = new \Cedp\Banner\Controller\Banner();
		    $this->bannerController->init($this->slides);
	    }
    }
}
