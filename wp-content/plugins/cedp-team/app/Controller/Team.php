<?php
namespace Cedp\Team\Controller;

class Team{
  protected $_members;

  public function init($members){
    $this->_members = $members;
    $this->_registerHooks();
  }

  protected function _registerHooks(){
    add_action('cedp_render_content', [$this,'render'], 50);
  }

  public function render(){
    \Cedp\Team\View\Team::render($this->_members->getCollection());
  }
}
