<?php
namespace Cedp\Service\Model;

class Service{
    protected $_id = 0;
    protected $_image = '';
    protected $_keyWords = [];
    protected $_data = [];

    public function init($data){
      $this->_data = $data;
      $this->_id = $data->ID;
      $this->_completeData();
      return $this;
    }

    protected function _completeData(){
      $data = get_fields($this->_id);
      foreach ($data as $k => $v) {
        switch (true) {
          case stripos($k,'icon') !== false:
            $this->setImage($v);
          break;
          case stripos($k,'offre_') !== false:
            $this->addKeyWord($v);
          break;
        }
      }
    }

    public function get($i){
      return property_exists($this->_data, $i) ? $this->_data->$i : null;
    }

    public function addKeyWord($v){
      if(!empty($v))
      $this->_keyWords[] = $v;
      return $this;
    }

    public function getKeyWords($glue = ''){
      if($glue == ''){
        return $this->_keyWords;
      }
      return implode($glue, $this->_keyWords);
    }

    public function setImage($v){
      $this->_image =  wp_get_attachment_url($v);
      return $this;
    }

    public function getImage(){
      return $this->_image;
    }
}
