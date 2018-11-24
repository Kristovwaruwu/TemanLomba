<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_Lomba extends CI_Model {
	private $_Tabel = 'Tbl_Lomba';

	public function getAll(){
		return $this->db->get($this->_Tabel)->result();
	}
}