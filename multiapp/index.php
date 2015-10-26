<?php
/* 	===========================
	FlavorPHP 2.0
	git repository: https://github.com/FlavorPHP/FlavorPHP-2.0

	FlavorPHP 2.0 is a free software licensed under the MIT license
	============================ */
?>
<?php
error_reporting (E_ALL);

if (!version_compare(PHP_VERSION, '5.3.0', '>=')) {
    die("FlavorPHP 2.0 needs PHP 5.3.x or higher to run. You are currently running PHP ".PHP_VERSION.".");
}

define('DIRSEP', DIRECTORY_SEPARATOR);
define('Absolute_Path', dirname(__FILE__).DIRSEP);
define('APPDIR','app');

$configFile = Absolute_Path.'config.php';

if (!file_exists($configFile)) {
	die('Installation required');
} else {
    require_once($configFile);
}

function flavor_autoload($className) {
	$directories = array(
		Absolute_Path.'../flavor'.DIRSEP.'classes'.DIRSEP.$className.'.class.php', // Flavor classes
		Absolute_Path.'../flavor'.DIRSEP.'interfaces'.DIRSEP.$className.'.interface.php', // maybe we want an interface
		Absolute_Path.'../flavor'.DIRSEP.'helpers'.DIRSEP.$className.'.helper.php', // maybe we want a helper
		Absolute_Path.APPDIR.DIRSEP.$className.'.php', // maybe we want appcontroller or appviews
		Absolute_Path.APPDIR.DIRSEP."controllers".DIRSEP.$className.'.php', // maybe we want a controller
		Absolute_Path.APPDIR.DIRSEP.'models'.DIRSEP.$className.'.php', // maybe we want a model
		Absolute_Path.APPDIR.DIRSEP.'libs'.DIRSEP.$className.'.class.php' // maybe we want a third party class
		// If you need more directories just add them here
	);

	$success = false;
	foreach($directories as $file) {
		if(!$success) {
			if(file_exists($file)) {
				require_once($file);
				$success = true;
			}
		} else {
			break;
		}
	}
	if(!$success) {
		die("Could not include class file '".$className."' ");
	}
}

//We register our flavor autoload
if(function_exists('spl_autoload_register')) {
	spl_autoload_register('flavor_autoload');
} else {
	function __autoload($className) {
		flavor_autoload($className);
	}
}

// 'Globals' to be used throughout the application
// usign the _Registry Pattern_

$registry = registry::getInstance();

try {
	ob_start();

	$path = (substr(Path, strlen(Path) - strlen("/")) == "/") ? Path : Path."/" ;
	$registry->path = $path;

	if(!defined('requiresBD')){
		$db = new dbFactory(strtolower(DB_Engine));
	} else {
		if(requiresBD){
			$db = new dbFactory(strtolower(DB_Engine));
		} else {
			$db = null;
		}
	}
	$registry->db = $db;

	$views = new appviews();
	$registry->views = $views;

	$themes = new themes();
	$registry->themes = $themes;

	$session = session::getInstance();
	$registry->session = $session;

	$cookie = cookie::getInstance();
	$registry->cookie = $cookie;

	$router = new router();
	$registry->router = $router;

	$debug = debug::getInstance();
	$registry->debug = $debug;

	$registry->validateErrors = array();

	$router->dispatch(); // Here starts the party
} catch(Exception $e) {
	echo $e->getMessage();
	exit();
}
?>