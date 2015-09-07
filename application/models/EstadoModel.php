<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class EstadoModel extends CI_Model{
		public function getAllEstado(){
			$this->db->from('TbEstado');
			$this->db->order_by('idEstado');
			return $this->db->get();
		}
	}
