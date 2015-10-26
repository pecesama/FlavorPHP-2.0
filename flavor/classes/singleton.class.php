<?php 
/* 	===========================
	FlavorPHP 2.0
	git repository: https://github.com/FlavorPHP/FlavorPHP-2.0

	FlavorPHP 2.0 is a free software licensed under the MIT license	
	============================ */
?>
<?php

class singleton {
	private static $instances = array();
	
	public static function getInstance($class) {
		if (!isset(self::$instances[$class])) {
			self::$instances[$class] = new $class();
		}
		return self::$instances[$class];
	}

	private final function __clone() {}
}
?>