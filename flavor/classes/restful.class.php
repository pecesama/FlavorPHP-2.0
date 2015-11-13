<?php 
/* 	===========================
	FlavorPHP 2.0
	git repository: https://github.com/FlavorPHP/FlavorPHP-2.0

	FlavorPHP 2.0 is a free software licensed under the MIT license	
	============================ */
?>
<?php
abstract class restful extends controller {

	protected $method = "";
	protected $file = NULL;

	public function __construct() {
		parent::__construct();
	}

    public function index($id = NULL) {
		$this->method = $_SERVER['REQUEST_METHOD'];
        if ($this->method == 'POST' && array_key_exists('HTTP_X_HTTP_METHOD', $_SERVER)) {
            if ($_SERVER['HTTP_X_HTTP_METHOD'] == 'DELETE') {
                $this->method = 'DELETE';
            } else if ($_SERVER['HTTP_X_HTTP_METHOD'] == 'PUT') {
                $this->method = 'PUT';
            } else {
                throw new Exception("Unexpected Header");
            }
        }
		
        switch ($this->method) {
            case 'GET':
                $this->get($id);
                break;
            case 'POST':
                $this->post($this->data);
            	break;
            case 'PUT':                
				$this->file = file_get_contents("php://input");
                $this->put($id);
            	break;
            case 'DELETE':
                $this->delete($id);
            	break;
			default:
				$this->response('Invalid HTTP Method', 405);
				break;
        }
    }
	
	protected function response($data, $status = 200, $contentType = "application/json") {
        header("Access-Control-Allow-Orgin: *");
        header("Access-Control-Allow-Methods: *");
        header("Content-Type: ".$contentType);
        header("HTTP/1.1 " . $status . " " . $this->getStatus($status));
        if ($contentType == "application/json")
        {
            echo json_encode($data);
        } else {
            echo $data;
        }
        die();
    }
	
	private function getStatus($code) {
        $status = array(  
            200 => 'OK',
            404 => 'Not Found',   
            405 => 'Method Not Allowed',
            500 => 'Internal Server Error',
        ); 
        return ($status[$code]) ? $status[$code] : $status[500]; 
    }
	
	abstract protected function get($data);
    abstract protected function post($data);
    abstract protected function put($data);
    abstract protected function delete($data);
}
?>