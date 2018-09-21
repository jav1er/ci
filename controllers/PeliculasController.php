<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class PeliculasController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		
		$this->load->model('peliculasmodel');
	}

	public function index()
	{
		$this->load->view('x/inicio');
	}

	 function create(){
	 	echo "string";
		if ($_POST) {
			$this->PeliculasModel->crear($_POST);
			$this->load->view('x/inicio');
		}else{
			echo "ddd";
		}
		
	}

}

/* End of file peliculasController.php */
/* Location: ./application/controllers/peliculasController.php */