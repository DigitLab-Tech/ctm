<?php
namespace Cedp\Banner\Model\ResourceModel\Slide;

class Collection{
  protected $_collection;
  protected $_resourceModel;

  public function init(){
    $this->_resourceModel = new \Cedp\Banner\Model\ResourceModel\Slide();
    $this->_resourceModel->init();
  }

  protected function _fill($wpQuery){
    foreach ($wpQuery as $element) {
      if(isset($element->ID) && $element->ID > 0){
        $model = new \Cedp\Banner\Model\Slide();
        $this->add($model->init($element));
      }
    }
  }

  public function add($element){
    $this->_collection[] = $element;
  }

  public function getCollection(){
  	if(is_null($this->_collection)){
  		$this->_fill(get_posts([
		    'post_type' => 'slide',
		    'numberposts' => '-1'
	    ]));
    }
    return $this->_collection;
  }

  public function count(){
    return count($this->_collection);
  }

  public function get($i){
    return isset($this->_collection[$i]) ? $this->_collection[$i] : null;
  }

  public function getByTitle($title){
	  if(is_null($this->_collection)){
		  $this->_fill(get_posts([
			  'post_type' => 'slide',
			  's' => $title,
			  'numberposts' => '-1'
		  ]));
	  }
	  return $this->_collection;
  }
}
