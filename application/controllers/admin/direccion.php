<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class Direccion extends CI_Controller {

	public $modelo    = "persona_model";
	protected $nombre = '';
	private $estado   = 0;

	public function index() {
		$this->load->model($this->modelo);
		$data              = array();
		$data['personaes'] = $this->persona_model->getList();
		$data['titulo']    = "Listado de personaes";
		$this->load->view('personaes', $data);
	}

	private function setEstado($estado) {
		$this->estado = $estado;
	}

}

class A {
	public $color    = '';
	protected $sabor = '';
	private $tamaño = '';

	public function setColor($color) {
		$this->color = $color;
	}

	public function setTamano($valor) {
		$this->tamaño = $valor;
	}
}

class B extends A {
	public $estado = '';

	public function setEstado($estado) {
		$this->estado = $estado;
	}

	public function setSabor($sabor) {
		$this->sabor = $sabor;
	}
}
$a = new A;
$b = new B;
$c = new B;
$b->setTamano(1);
$a->setColor('azul');
$a->setEstado(0);
$b->setColor('rojo');
$b->estado = 0;

$dir = new Direccion;
$dir->index();
$dir->setEstado(1);