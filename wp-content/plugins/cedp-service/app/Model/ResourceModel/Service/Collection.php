<?php
namespace Cedp\Service\Model\ResourceModel\Service;

class Collection{
  protected $_collection;
  protected $_resourceModel;

  public function init(){
    $this->_resourceModel = new \Cedp\Service\Model\ResourceModel\Service();
    $this->_resourceModel->init();
    $this->_fill();
  }

  protected function _fill(){
    $collection = get_posts([
      'post_type' => 'service',
      'numberposts' => '-1'
    ]);
    foreach ($collection as $element) {
      if(isset($element->ID) && $element->ID > 0){
        $service = new \Cedp\Service\Model\Service();
        $this->add($service->init($element));
      }
    }
  }

  public function add($element){
    $this->_collection[] = $element;
  }

  public function getCollection(){
    return $this->_collection;
  }

  public function getEvenIndexedElements(){
    $collection = [];
    for($i = 0; $i < $this->count(); $i++){
      if(($i + 1) % 2){
        $collection[] = $this->get($i);
      }
    }
    return $collection;
  }

  public function getOddIndexedElements(){
    $collection = [];
    for($i = 0; $i < $this->count(); $i++){
      if(!(($i + 1) % 2)){
        $collection[] = $this->get($i);
      }
    }
    return $collection;
  }

  public function count(){
    return count($this->_collection);
  }

  public function get($i){
    return isset($this->_collection[$i]) ? $this->_collection[$i] : null;
  }
}
