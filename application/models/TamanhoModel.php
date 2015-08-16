<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TamanhoModel extends CI_Model{

	public function insertTamanho($dados = null){

		if($dados != null){

			$this->db->insert('TbTamanho', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('administrador/tamanho');
		}	
	}
	
		public function getAllTamanho(){

		$this->db->from('TbTamanho');

		$this->db->order_by('idTamanho');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
}