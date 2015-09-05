<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ClienteModel extends CI_Model{
			
		public function insertLogin($dados = null){

		if($dados != null){

			$this->db->insert('TbLogin', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			
			redirect('cliente/cidade');
		}
	}	
			
		public function insertCidade($dados = null){

		if($dados != null){

			$this->db->insert('TbCidade', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			redirect('cliente/endereco');
		}
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
			
			redirect('cliente/cadastrar');
		}
	}
		
		
		public function insertCadastrar($dados = null){

		if($dados != null){

			$this->db->insert('TbCliente', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			redirect('login');
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


		public function getMaxEndereco(){
			
		$this->db->select_max('idEndereco');

		$query= $this->db->from('TbEndereco');
		

		return $this->db->get();
	}
		
		public function getMaxLogin(){
		
		$this->db->select_max('idLogin');

		$query= $this->db->from('TbLogin');

		
		return $this->db->get();

		
	}
		
		public function getMaxTelefone(){
			
		$this->db->select_max('idTelefone');

		$query= $this->db->from('TbTelefone');
		

		return $this->db->get();
	}
		
		
	
		public function getAllSexo(){

		$this->db->from('TbSexo');

		$this->db->order_by('idSexo');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
		
		
}
	