<?php
/* 	===========================
	FlavorPHP 2.0
	git repository: https://github.com/FlavorPHP/FlavorPHP-2.0

	FlavorPHP 2.0 is a free software licensed under the MIT license
	============================ */
?>
<?php

class ajax {

	protected $registry;
	protected $path;

	public function __construct() {
		$this->registry = registry::getInstance();
		$this->path = $this->registry["path"];
	}

	public function getPath($url="") {
		return $this->path.$url;
	}

}
?>