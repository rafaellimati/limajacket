<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ClienteModel extends CI_Model{
	
		public function insertCidade($dados = null){

		if($dados != null){

			$this->db->insert('TbCidade', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			redirect('cliente/endereco');
		}
	}
		
		public function getAllEstado(){

		$this->db->from('TbEstado');

		$this->db->order_by('idEstado');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
		
		public function getAllCidade(){
			
		$this->db->select_max('cidade');

		$query=$this->db->from('TbCidade');
		

		return $this->db->get();
	}
		
		
		
		public function insertEndereco($dados = null){

		if($dados != null){

			$this->db->insert('TbEndereco', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('cliente/endereco');
		}
	}
		
		
}
	