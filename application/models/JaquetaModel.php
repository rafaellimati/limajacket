<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JaquetaModel extends CI_Model{

	public function insertJaqueta($dados = null){

		if($dados != null){

			$this->db->insert('TbJaqueta', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('administrador/jaqueta');
		}
	}
}