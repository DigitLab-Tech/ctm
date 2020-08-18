<?php
namespace Cedp\Banner\Controller;
class Banner{
	protected $slides = [];
  public function init($slides = []){
  	$this->slides = $slides;
    $this->_registerHooks();
  }

  protected function _registerHooks(){
    add_action('cedp_render_content', [$this,'render'], 10);
  }

  public function render(){
    \Cedp\Banner\View\Banner::render($this->slides->getByTitle('Main Background'));
  }
}
