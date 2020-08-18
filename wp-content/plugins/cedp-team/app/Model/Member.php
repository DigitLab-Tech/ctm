<?php
namespace Cedp\Team\Model;

class Member{
    protected $_id = 0;
    protected $_data = [];

    public function init($data){
      $this->_data = $data;
      $this->_id = $data->ID;
      $this->_completeData();
      return $this;
    }

    protected function _completeData(){
		$data = get_fields($this->_id);

		foreach ($data as $k =>$v){
			$this->_data->$k = $v;
		}
    }

	public function get($i){
		return property_exists($this->_data, $i) ? $this->_data->$i : null;
	}

	public function getFirstName(){
		$name = explode(' ', $this->get('post_title'));
		return isset($name[0]) ? $name[0] : '';
	}

	public function getLastName(){
		$name = explode(' ', $this->get('post_title'));
		return isset($name[1]) ? $name[1] : '';
	}
}
