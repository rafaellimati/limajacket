<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class corModel extends CI_Model{

	public function insertCor($dados = null){

		if($dados != null){

			$this->db->insert('TbCor', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('administrador/cor');
		}
	}
	
		public function getAllCor(){

		$this->db->from('TbCor');

		$this->db->order_by('idCor');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
}