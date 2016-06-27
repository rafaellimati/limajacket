<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UsuarioModel extends CI_Model{

	public function insertUsuario($dados = null){

		if($dados != null){

			$this->db->insert('TbLogin', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			redirect('admin/usuario');
		}
	}
	
		public function getById($id = null){

		if($id != null){
			
			$this->db->where('idLogin', $id);

			$this->db->limit(1);

			return $this->db->get('TbLogin');
		}
	}
	

	public function updateUsuario($dados = null, $condition = null){

		if($dados != null && $condition != null){

			$this->db->update('tblogin', $dados, $condition);

			$this->session->set_flashdata('edicaook', 'Cadastro alterado com sucesso.');

			redirect(current_url());
		}
	}

	public function getAllUsuario(){

		$this->db->from('TbLogin');

		$this->db->order_by('idLogin');


		return $this->db->get();
	}


		//Pega o usuario que tenha o login e a senha cadastrada no banco de dados
	public function getUsuario($dados = null){

		if($dados != null){

			//Monta a consulta com a seguintes condições
			$this->db->where('login', $dados['login']);
			//$this->db->where('senha', sha1($dados['senha']));
			$this->db->where('senha', $dados['senha']);

			//Armazena os registro na variavel query
			$query = $this->db->get('TbLogin');

			//Verifica se foi encontrado um registro com os dados igual a das condições
			if($query->num_rows){	
				//Retorna o registro com os dados semelhantes ao aos dados que foram informados		
				return $query->result_array();
			}
		}
	}
	
	public function getUsuarioloja($dados = null){

		if($dados != null){

			//Monta a consulta com a seguintes condições
			$this->db->where('login', $dados['login']);
			//$this->db->where('senha', sha1($dados['senha']));
			$this->db->where('senha', md5($dados['senha']) );

			//Armazena os registro na variavel query
			$query = $this->db->get('TbLogin');

			//Verifica se foi encontrado um registro com os dados igual a das condições
			if($query->num_rows){	
				//Retorna o registro com os dados semelhantes ao aos dados que foram informados		
				return $query->result_array();
			}
		}
	}


		//Método responsavel pela verificação do login e senha no banco de dados
	public function doValidate($dados = null){

		if($dados != null){

			//Monta a consulta com a seguintes condições
			$this->db->where('login', $dados['login']);
			//$this->db->where('senha', sha1($dados['senha']));
			$this->db->where('senha', $dados['senha']);

			//Armazena os registro na variavel query
			$query = $this->db->get('TbLogin');

			//Verifica se foi encontrado um registro com os dados igual a das condições
			if($query->num_rows == 1){
				return true;
			}
		}
	}
	
	
	public function doValidateloja($dados = null){

		if($dados != null){

			//Monta a consulta com a seguintes condições
			$this->db->where('login', $dados['login']);
			//$this->db->where('senha', sha1($dados['senha']));
			$this->db->where('senha', md5($dados['senha'] ) );

			//Armazena os registro na variavel query
			$query = $this->db->get('TbLogin');

			//Verifica se foi encontrado um registro com os dados igual a das condições
			if($query->num_rows == 1){				
				return true;
			}
		}
	}
	
	}