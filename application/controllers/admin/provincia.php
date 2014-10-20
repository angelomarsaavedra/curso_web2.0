<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class Provincia extends MY_Controller {
	public $modelo = "provincia_model";

	public function index() {
		$data               = array();
		$data['provincias'] = $this->provincia_model->getList();
		$data['titulo']     = "Listado de provincias";
		$this->load->view('admin/provincia/index', $data);
	}

	public function agregar() {
		$this->load->view('admin/provincia/agregar');
	}
}
