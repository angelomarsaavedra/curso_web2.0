<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class Persona extends CI_Controller {

	public $modelo = "persona_model";

	public function index() {
		$this->load->model($this->modelo);
		$data             = array();
		$data['personas'] = $this->persona_model->getList();
		$data['titulo']   = "Listado de personas";
		$this->load->view('personas', $data);
	}

}
