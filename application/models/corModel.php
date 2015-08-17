<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class corModel extends CI_Model{

	public function insertCor($dados = null){

		if($dados != null){

			$this->db->insert('TbCor', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('administrador/cor');
		}
	}
	
		public function getById($id = null){

		if($id != null){
			
			$this->db->where('idCor', $id);

			$this->db->limit(1);

			return $this->db->get('TbCor');
		}
	}

	public function updateCor($dados = null, $condition = null){

		if($dados != null && $condition != null){

			$this->db->update('TbCor', $dados, $condition);

			$this->session->set_flashdata('edicaook', 'Alteração realizada com sucesso.');

			//redirect('usuario/editar');
			redirect(current_url());
		}
	}
	
		public function getAllCor(){

		$this->db->from('TbCor');

		$this->db->order_by('idCor');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
}