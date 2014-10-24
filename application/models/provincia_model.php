<?php
class provincia_model extends CI_Model {
	private $tabla = 'provincia';

	public function get($id, $idName = null) {
		if ($idName)// Si obtenemos el nombre del campo
		{ $this->db->where($idName, $id);
		} else {
			// Campo ID por defecto
			$this->db->where('id', $id);
		}

		$this->db->from($this->tabla);
		$q = $this->db->get();
		return current($q->result_array());
		#return $q->result_array();
	}

	public function getList() {
		$this->db->from($this->tabla);
		$q = $this->db->get();
		return $q->result_array();
	}

	public function agregar($data = array()) {
		$this->db->insert($this->tabla, $data);
	}
}
