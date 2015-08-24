<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EstoqueModel extends CI_Model{

	public function insertEstoque($dados = null){

		if($dados != null){

			$this->db->insert('TbEstoque', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
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

		$this->db->join('tbmarca', 'tbjaqueta.idMarca = tbmarca.idMarca', 'inner');
		$this->db->join('tbcor', 'tbjaqueta.idCor = tbcor.idCor ', 'inner');
		$this->db->join('tbCategoria', 'tbjaqueta.idCategoria = tbCategoria.idCategoria', 'inner');
		$this->db->join('tbtamanho', 'tbjaqueta.idTamanho = tbtamanho.idTamanho', 'inner');

		$this->db->group_by('tamanho, cor, jaqueta');

		return $this->db->get();
	}
	
	
}
