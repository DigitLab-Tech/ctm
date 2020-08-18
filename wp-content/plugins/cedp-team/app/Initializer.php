<?php
namespace Cedp\Team;

class Initializer{
	protected $members;
	protected $teamController;

	public function init() {
		$this->members = new \Cedp\Team\Model\ResourceModel\Member\Collection();
		$this->members->init();

		$this->teamController = new \Cedp\Team\Controller\Team();
		$this->teamController->init( $this->members );
	}
}
