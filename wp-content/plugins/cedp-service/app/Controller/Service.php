<?php
namespace Cedp\Service\Controller;

class Service{
  protected $_services;

  public function init($services){
    $this->_services = $services;
    $this->_registerHooks();
  }

  protected function _registerHooks(){
    add_action('cedp_render_content', [$this,'render'], 50);
  }

  public function render(){
    \Cedp\Service\View\Service::render($this->_services);
  }
}
