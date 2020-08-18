<?php
namespace Cedp\Banner\Model;

class Slide{
    protected $_id = 0;
    protected $_image = '';
    protected $_data = [];

    public function init($data = []){
      $this->_data = $data;
      $this->_id = $data->ID;
      $this->_completeData();
      return $this;
    }

    protected function _completeData(){
      $data = get_fields($this->_id);
      foreach ($data as $k => $v) {
        switch (true) {
          case stripos($k,'image') !== false:
            $this->setImage($v);
          break;
        }
      }
    }

    public function get($i){
      return property_exists($this->_data, $i) ? $this->_data->$i : null;
    }

    public function setImage($v){
      $this->_image =  $v;
      return $this;
    }

    public function getImage(){
      return $this->_image;
    }
}
