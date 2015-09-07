<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TipoTelefoneModel extends CI_Model{
	public function getAllTipoTelefone(){
		$this->db->from('TbTipoTelefone');
		$this->db->order_by('idTipoTelefone');
		return $this->db->get();
	}
}
