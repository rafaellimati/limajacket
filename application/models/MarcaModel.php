<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MarcaModel extends CI_Model{

	 public function insertMarca($dados = null){

		if($dados != null){

			$this->db->insert('TbMarca', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('administrador/marca');
		}
	}

	public function getById($id = null){

		if($id != null){
			
			$this->db->where('idMarca', $id);

			$this->db->limit(1);

			return $this->db->get('TbMarca');
		}
	}

	public function updateMarca($dados = null, $condition = null){

		if($dados != null && $condition != null){

			$this->db->update('TbMarca', $dados, $condition);

			$this->session->set_flashdata('edicaook', 'Operação realizada com sucesso.');

			//redirect('usuario/editar');
			redirect(current_url());
		}
	}

	public function getAllMarca(){

		$this->db->from('TbMarca');

		$this->db->order_by('idMarca');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
	
	public function getAllActive(){
		
			$this->db->from('TbMarca');

		$this->db->order_by('idMarca');

		$this->db->where('flagAtivo', 1);

		return $this->db->get();

	}

}