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

		$this->db->from('tb_usuario');

		$this->db->order_by('id');

		$this->db->where('ativo', 1);

		return $this->db->get();
	}

}