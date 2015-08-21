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
	
	public function getAllEstoque(){

		$this->db->select('count(idJaqueta) as quantidade ,jaqueta , tecido, valor,tbjaqueta.descricao as detalhes ,  marca, cor, tbstatus.descricao as statusDesc, tamanho ');


		$this->db->from('TbJaqueta');
		$this->db->order_by('jaqueta');

		$this->db->join('tbmarca', 'tbjaqueta.idMarca = tbmarca.idMarca', 'inner');
		$this->db->join('tbcor', 'tbjaqueta.idCor = tbcor.idCor ', 'inner');
		$this->db->join('tbstatus', 'tbjaqueta.idStatus = tbstatus.idStatus', 'inner');
		$this->db->join('tbtamanho', 'tbjaqueta.idTamanho = tbtamanho.idTamanho', 'inner');

		$this->db->group_by('tamanho, cor, jaqueta');

		return $this->db->get();
	}
	
	
}
