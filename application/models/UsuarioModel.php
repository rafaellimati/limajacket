<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class UsuarioModel extends CI_Model{

	public function insertUsuario($dados = null){

		if($dados != null){

			$this->db->insert('TbLogin', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('administrador/usuario');
		}
	}

	public function updateUsuario($dados = null, $condition = null){

		if($dados != null && $condition != null){

			$this->db->update('tb_usuario', $dados, $condition);

			$this->session->set_flashdata('edicaook', 'Operação realizada com sucesso.');

			//redirect('usuario/editar');
			redirect(current_url());
		}
	}

	public function getAllUsuario(){

		$this->db->from('tbLogin');

		$this->db->order_by('idlogin');

		//$this->db->where('ativo', 1);

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

}