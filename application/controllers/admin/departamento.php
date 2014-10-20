<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class Departamento extends CI_Controller {

	public $modelo = "departamento_model";

	public function index() {
		$this->load->model($this->modelo);
		$data                  = array();
		$data['departamentos'] = $this->departamento_model->getList();
		$data['titulo']        = "Listado de departamentos";
		$this->load->view('departamentos', $data);
	}

}
