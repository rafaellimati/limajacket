<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ClienteModel extends CI_Model{
			
		/*public function insertLogin($dados = null){

		if($dados != null){

			$this->db->insert('TbLogin', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			
			redirect('cidade');
		}
	}	
			
		public function insertCidade($dados = null){

		if($dados != null){

			$this->db->insert('TbCidade', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			redirect('endereco');
		}
	}
		
		
		public function insertEndereco($dados = null){

		if($dados != null){

			$this->db->insert('TbEndereco', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			redirect('telefone');
		}
	}
		
		
		
		public function insertTelefone($dados = null){

		if($dados != null){

			$this->db->insert('TbTelefone', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			redirect('cadastrar');
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
	}*/

	
		public function insertCliente($dados = null){

		if($dados != null){
			
			//insercao da cidade
			$this-> db-> set('cidade',$dados['cidade']);
			$this-> db-> set('idEstado',$dados['idEstado']);
			$this->db->insert('TbCidade');
			$idCidade = $this-> db-> insert_id();
			//insercao na tabela endereco
			$this-> db-> set('logradouro',$dados['logradouro']);
			$this-> db-> set('bairro',$dados['bairro']);
			$this-> db-> set('numero',$dados['numero']);
			$this-> db-> set('cep',$dados['cep']);
			$this-> db-> set('idCidade',$idCidade);
			$this-> db-> insert('TbEndereco');
			$idEndereco = $this-> db-> insert_id();
			//insercao do telefone
			$this-> db-> set('telefone',$dados['telefone']);
			$this-> db-> set('idDdd',$dados['idDdd']);
			$this-> db-> set('idTipoTelefone',$dados['idTipoTelefone']);
			$this-> db-> insert('TbTelefone');
			$idTelefone = $this-> db-> insert_id();
			//insercao do login
			$dataCadastro = date('Y-m-d');
			$this-> db-> set('login',$dados['login']);
			$this-> db-> set('senha',$dados['senha']);
			$this-> db-> set('nivelAcesso', 1);
			$this-> db-> set('dataCadastro', $dataCadastro);
			$this-> db-> set('flagAtivo',1);
			$this-> db-> insert('TbLogin');
			$idLogin = $this-> db-> insert_id();
			//insercao do cliente
			$this-> db ->set('nome',$dados['nome']);
			$this-> db ->set('cpf',$dados['cpf']);
			$this-> db ->set('email',$dados['email']);
			$this-> db ->set('dataNascimento',$dados['dataNascimento']);
			$this-> db ->set('dataCadastro', $dataCadastro);
			$this-> db ->set('flagAtivo', 1);
			$this-> db ->set('idEndereco', $idEndereco);
			$this-> db ->set('idTelefone',$idTelefone);
			$this-> db ->set('idSexo',$dados['idSexo']);
			$this-> db ->set('idLogin',$idLogin);
			$this-> db ->insert('TbCliente');
			

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			//redirect('cliente/endereco');
		}
	}
	
		
		
}
	