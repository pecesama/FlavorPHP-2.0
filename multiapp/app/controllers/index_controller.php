<?php
	class index_controller extends appcontroller {
		
		public function __construct() {
			parent::__construct();
		}
	
		public function index($id = NULL) {
			$this->view->setLayout("bootstrap");
			$this->title_for_layout('Multi app example') ;			
			$this->render();
		}
		
	}
?>