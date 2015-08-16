<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class StatusModel extends CI_Model{

	public function insertStatus($dados = null){

		if($dados != null){

			$this->db->insert('TbStatus', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('administrador/status');
		}
	}
	
		public function getAllStatus(){

		$this->db->from('TbStatus');

		$this->db->order_by('idStatus');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
}