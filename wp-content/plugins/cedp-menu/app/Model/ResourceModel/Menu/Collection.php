<?php
namespace Cedp\Menu\Model\ResourceModel\Menu;

class Collection{
  protected $_collection;
  protected $_resourceModel;

  public function init(){
    $this->_resourceModel = new \Cedp\Menu\Model\ResourceModel\Menu();
    $this->_resourceModel->init();
  }

  protected function _fill(){
    $collection = get_posts([
      'post_type' => 'menu_item',
      'numberposts' => '-1',
      'meta_key'			=> 'order',
      'orderby'			=> 'meta_value_num',
      'order'				=> 'ASC'
    ]);

    foreach ($collection as $element) {
      if(isset($element->ID) && $element->ID > 0){
        $menu = new \Cedp\Menu\Model\Menu();
        $this->add($menu->init($element));
      }
    }
  }

  public function add($element){
    $this->_collection[] = $element;
  }

  public function getCollection(){
  	if(is_null($this->_collection)){
  		$this->_fill();
    }
    return $this->_collection;
  }

  public function count(){
    return count($this->_collection);
  }

  public function get($i){
    return isset($this->_collection[$i]) ? $this->_collection[$i] : null;
  }
}
