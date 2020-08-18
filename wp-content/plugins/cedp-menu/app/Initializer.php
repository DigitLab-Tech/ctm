<?php
namespace Cedp\Menu;

class Initializer{
	protected $menuItems;
	protected $menuController;

	public function init() {
		$this->menuItems = new \Cedp\Menu\Model\ResourceModel\Menu\Collection();
		$this->menuItems->init();

		$this->menuController = new \Cedp\Menu\Controller\Menu();
		$this->menuController->init( $this->menuItems );
	}
}
