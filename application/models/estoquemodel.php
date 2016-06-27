<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EstoqueModel extends CI_Model{

	public function insertEstoque($dados = null){

		if($dados != null){

			$this->db->insert('TbEstoque', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			redirect('admin/estoque');
		}
	}
	
	
	public function getAllJaqueta(){

		$this->db->from('TbJaqueta');

		$this->db->order_by('idJaqueta');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
	
	public function getAllEstoque(){

		$this->db->select('count(idJaqueta) as quantidade ,jaqueta , quantidade, valor, descricao as detalhes ,  marca, cor, categoria, tamanho ');


		$this->db->from('TbJaqueta');
		$this->db->order_by('jaqueta');

		$this->db->join('TbMarca', 'TbJaqueta.idMarca = TbMarca.idMarca', 'inner');
		$this->db->join('TbCor', 'TbJaqueta.idCor = TbCor.idCor ', 'inner');
		$this->db->join('TbCategoria', 'TbJaqueta.idCategoria = TbCategoria.idCategoria', 'inner');
		$this->db->join('TbTamanho', 'TbJaqueta.idTamanho = TbTamanho.idTamanho', 'inner');

		$this->db->group_by('tamanho, cor, jaqueta');

		return $this->db->get();
	}
	
	
}
