<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TamanhoModel extends CI_Model{

	public function insertTamanho($dados = null){

		if($dados != null){

			$this->db->insert('TbTamanho', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('admin/tamanho');
		}	
	}
	
		public function getAllTamanho(){

		$this->db->from('TbTamanho');

		$this->db->order_by('idTamanho');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}

	public function getById($id = null){

		if($id != null){
			
			$this->db->where('idTamanho', $id);

			$this->db->limit(1);

			return $this->db->get('TbTamanho');
		}
	}	
	
			public function updateTamanho($dados = null, $condition = null){

		if($dados != null && $condition != null){

			$this->db->update('TbTamanho', $dados, $condition);

			$this->session->set_flashdata('edicaook', 'Alteração realizada com sucesso.');

			redirect('admin/Tamanho');
			//redirect(current_url());
		}
	}
}
