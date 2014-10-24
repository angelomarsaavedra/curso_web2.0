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
		$provincia = $this->input->post('provincia');
		$data      = ['accion' => 'Agregar'];
		if ($provincia) {
			$data['nombre'] = $provincia;
			#$data = array('provincia' => $provincia);
			$this->provincia_model->agregar($data);
			redirect('/admin/provincia/index');
		} else {
			$this->load->view('admin/provincia/formulario', $data);
		}
	}

	public function editar($id = null) {
		$provincia = $this->input->post('provincia');
		$data      = ['accion' => 'Editar'];
		if ($id) {
			$data['reg'] = $this->provincia_model->get($id);
		}

		if (empty($data['reg'])) {
			redirect('/admin/provincia/index');
		}

		if ($provincia and $id) {
			$data['nombre'] = $provincia;
			#$data = array('provincia' => $provincia);
			$this->provincia_model->guardar($data, $id);
			redirect('/admin/provincia/index');
		} else {
			$this->load->view('admin/provincia/formulario', $data);
		}
	}
}
