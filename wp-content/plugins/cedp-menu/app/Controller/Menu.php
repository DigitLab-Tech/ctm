<?php
namespace Cedp\Menu\Controller;

class Menu{
  protected $_items;

  public function init($menuItems){
    $this->_items = $menuItems;
    $this->_registerHooks();
  }

  protected function _registerHooks(){
    add_action('cedp_render_menu', [$this,'render'], 50);
  }

  public function render(){
    \Cedp\Menu\View\Menu::render($this->_items->getCollection());
  }
}
