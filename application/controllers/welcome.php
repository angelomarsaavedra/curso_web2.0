<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()	{
		#echo "Hola mundo!";
		$this->load->view('welcome_message');
	}

	public function provincias() {
		$this->load->model('provincia_model');
		$data = array();
		$data['provincias'] = $this->provincia_model->getList();
		$data['titulo'] = "Listado de provincias";
		#print_r($data);
		$this->load->view('provincias', $data);
	}

	public function provincia($id=null) {
		$this->load->model('provincia_model');
		if( $id ){
			$p = $this->provincia_model->get($id);
			print_r($p);
		}
		else
			echo "Debe especificar un número entero";
	}

	public function provincia_nombre($nombre=null) {
		$this->load->model('provincia_model');
		if( $nombre ){
			$p = $this->provincia_model->get( urldecode($nombre), 'nombre');
			print_r($p);
		}
		else
			echo "Debe especificar un nombre de provincia";
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */