<?php

class MY_Controller extends Controller {

	public function __construct() {
		parent::__construct();
	}

	public function mensaje($texto) {
		echo $texto;
	}

}

#$a = new MY_Controller('angel');