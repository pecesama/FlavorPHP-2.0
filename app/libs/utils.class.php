<?php 
/* 	===========================
	FlavorPHP 2.0
	git repository: https://github.com/FlavorPHP/FlavorPHP-2.0

	FlavorPHP 2.0 is a free software licensed under the MIT license	
	============================ */
?>
<?php
// Example of how to include a external class (vendors, third party).
class utils {	
	public static function pre($arr, $exit = true){
		echo "<pre>";
			print_r($arr);
		echo "</pre>";
		if($exit)exit;
	}
}
?>