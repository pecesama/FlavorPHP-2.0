<?php 
/* 	===========================
	FlavorPHP 2.0
	git repository: https://github.com/FlavorPHP/FlavorPHP-2.0

	FlavorPHP 2.0 is a free software licensed under the MIT license	
	============================ */
?>
<?php
// Create the interface for data management
interface data {	
	public static function getInstance();	
	public function query($sql);
	public function buildArray($query, $assoc_ary = false);
	public function fetchRow();
	public function rowSeek($rowNum);
	public function lastId();
	public function nextId($table, $primary);
	public function numRows();
	public function affectedRows();
	public function sql_escape($msg);
	public function errorInfo($sql = '');
	public function close();	
}
?>