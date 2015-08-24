<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CategoriaModel extends CI_Model{

	public function insertCategoria($dados = null){

		if($dados != null){

			$this->db->insert('TbCategoria', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('admin/categoria');
		}
	}
	
	public function getAllCategoria(){

		$this->db->from('TbCategoria');

		$this->db->order_by('categoria');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
	
		public function getById($id = null){

		if($id != null){
			
			$this->db->where('idCategoria', $id);

			$this->db->limit(1);

			return $this->db->get('TbCategoria');
		}
	}


		public function updateMarca($dados = null, $condition = null){

		if($dados != null && $condition != null){

			$this->db->update('TbCategoria', $dados, $condition);

			$this->session->set_flashdata('edicaook', 'Alteração realizada com sucesso.');

			//redirect('usuario/editar');
			redirect('admin/categoria');
		}
	}
		
}