<?php if (!defined('BASEPATH')) {exit('No direct script access allowed');
}

class MY_Controller extends CI_Controller {
	public $modelo = "";

	public function __construct() {
		parent::__construct();
		if ($this->modelo) {
			$this->load->model($this->modelo);
		}
	}

}