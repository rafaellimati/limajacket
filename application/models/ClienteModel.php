<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ClienteModel extends CI_Model{
			
		public function insertLogin($dados = null){

		if($dados != null){

			$this->db->insert('TbLogin', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			
			redirect('Cliente/cidade');
		}
	}	
			
		public function insertCidade($dados = null){

		if($dados != null){

			$this->db->insert('TbCidade', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			redirect('Cliente/endereco');
		}
	}
		
		
		public function getAllDDD(){

		$this->db->from('TbDdd');

		$this->db->order_by('idDdd');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
		
		public function getAllTipoTelefone(){

		$this->db->from('TbTipoTelefone');

		$this->db->order_by('idTipoTelefone');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
		
		public function getAllEstado(){

		$this->db->from('TbEstado');

		$this->db->order_by('idEstado');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
		
		public function getAllCidade(){
			
		$this->db->select_max('idCidade');

		$query= $this->db->from('TbCidade');
		

		return $this->db->get();
	}
		
		
		
		public function insertEndereco($dados = null){

		if($dados != null){

			$this->db->insert('TbEndereco', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			redirect('cliente/telefone');
		}
	}

		
		public function insertTelefone($dados = null){

		if($dados != null){

			$this->db->insert('TbTelefone', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			redirect('cliente/endereco');
		}
	}
		
		
}
	