<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ClienteModel extends CI_Model{
	
		public function insertCidade($dados = null){

		if($dados != null){

			$this->db->insert('TbCidade', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			redirect('Cliente/endereco');
		}
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
		
		
			public function updateEndereco($dados = null, $condition = null){

		if($dados != null && $condition != null){

			$this->db->update('TbEndereco', $dados, $condition);

			$this->session->set_flashdata('edicaook', 'Alteração realizada com sucesso.');

			//redirect('usuario/editar');
			redirect('cliente/cidade');
		}
	}
		
		
		public function insertEndereco($dados = null){

		if($dados != null){

			$this->db->insert('TbEndereco', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('cliente/cidade');
		}
	}
		
		
}
	