<?php
namespace Cedp\Contact;

class Initializer{
  protected $contactRequest;
  protected $contactController;

  public function init(){
    $this->contactRequest = new \Cedp\Contact\Model\ContactRequest();
    $this->contactRequest->init();

    if(get_option('cedp_home_show_contact')){
	    $this->contactController = new \Cedp\Contact\Controller\Contact();
	    $this->contactController->init();
    }
  }
}
