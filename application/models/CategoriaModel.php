<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CategoriaModel extends CI_Model{

	public function insertCategoria($dados = null){

		if($dados != null){

			$this->db->insert('TbCategoria', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('administrador/categoria');
		}
	}
	
	public function getAllCategoria(){

		$this->db->from('TbCategoria');

		$this->db->order_by('categoria');

		//$this->db->where('ativo', 1);

		return $this->db->get()->result();
	}
}