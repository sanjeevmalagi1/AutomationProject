<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Queries extends CI_Controller {
    
        public function __construct()
        {
                parent::__construct();
                $this->load->model('controls_model');
                if (isset($_SERVER['HTTP_ORIGIN'])) {
                        header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
                        header('Access-Control-Allow-Credentials: true');
                        header('Access-Control-Max-Age: 86400');    // cache for 1 day
                    }

                // Access-Control headers are received during OPTIONS requests
                if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

                    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
                        header("Access-Control-Allow-Methods: GET, POST, OPTIONS");         

                    if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
                        header("Access-Control-Allow-Headers:        {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

                    exit(0);
                }
        }

	
	public function GetAllControls()
	{
            echo json_encode($this->controls_model->GetControls());
	}
        
        public function GetStatusOfControl($ID)
        {
            echo json_encode($this->controls_model->GetStatusOfControl($ID));
        }
}

