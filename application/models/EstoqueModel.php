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
			$this->db->select_max('idCor');
			$query->$this->db-> get('tbCor');
			$this->db->set('idCor',$query);
			$this->db-> insert('tbEstoque');

			//$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('administrador/estoque');
		}
	}
	
	public function insertTamanho($dados = null){

		if($dados != null){

			$this->db->insert('TbTamanho', $dados);
			$this->db->select_max('idTamanho');
			$query->$this->db-> get('tbTamanho');
			$this->db->set('idTamanho',$query);
			$this->db->insert('tbEstoque');
			

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
	
		/*public function getAllEstoque(){

		$this->db->from('TbEstoque');

		$this->db->order_by('quantidade');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}*/
	
	
}
