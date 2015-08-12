<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EstoqueModel extends CI_Model{

	public function insertEstoque($dados = null){

		if($dados != null){

			$this->db->insert('TbEstoque', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('administrador/estoque');
		}
	}
	
	public function insertCor($dados = null){

		if($dados != null){

			$this->db->insert('TbCor', $dados);

			//$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('administrador/estoque');
		}
	}
	
	public function insertTamanho($dados = null){

		if($dados != null){

			$this->db->insert('TbTamanho', $dados);

			//$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('administrador/estoque');
		}
	}
	
	public function getAllJaqueta(){

		$this->db->from('TbJaqueta');

		$this->db->order_by('idJaqueta');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
	
}
