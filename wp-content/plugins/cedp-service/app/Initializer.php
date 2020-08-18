<?php
namespace Cedp\Service;

class Initializer{
  protected $services;
  protected $serviceController;

  public function init(){
    $this->services = new \Cedp\Service\Model\ResourceModel\Service\Collection();
    $this->services->init();

    if(get_option('cedp_home_show_service')){
	    $this->serviceController = new \Cedp\Service\Controller\Service();
	    $this->serviceController->init($this->services);
    }
  }
}
