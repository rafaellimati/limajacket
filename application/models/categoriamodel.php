<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class CategoriaModel extends CI_Model{

	public function insertCategoria($dados = null){

		if($dados != null){

			$this->db->insert('TbCategoria', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			redirect('admin/categoria');
		}
	}
	
	
	//Objeto da lista de categoria 
    //na lateral do site
	
	public function getAllCategoria(){

		$this->db->from('TbCategoria');

		$this->db->order_by('categoria');

		return $this->db->get();
	}
	
	public function DropDownCategoria(){
		
		
		$this->db->from('TbCategoria');
		
		$result = $this->db->get();
		
		$return = array();

  		//Verifica se a quantidade de registros e maior que 0
  		if($result->num_rows > 0){

	   //Varivavel $return com o primeiro indice 0 com o valor 'Selecione'
	   //$return[''] = 'Selecione';
	
	   //Percore os valores 
	   foreach($result->result_array() as $row){
	    //O indice que será o id receberá o valor
	    $return[$row['idCategoria']] = $row['categoria'];
	   }
  }

  return $return;
	
	
	}
	   
	   //objeto impressão categoria de fotos
	   //Descrição e preço dos produtos.
	   
	   	public function getAllCategoriaView(){

		$this->db->from('TbCategoria');

		return $this->db->get();
	}
	
		public function getByIdCategoria($id = null){

		if($id != null){
			
			$this->db->where('idCategoria', $id);

			$this->db->limit(1);

			return $this->db->get('TbCategoria');
		}
	}

		public function getById($id = null){

		if($id != null){
			
			$this->db->where('idCategoria', $id);

			$this->db->limit(1);

			return $this->db->get('TbCategoria');
		}
	}


		public function updateCategoria($dados = null, $condition = null){

		if($dados != null && $condition != null){

			$this->db->update('TbCategoria', $dados, $condition);

			$this->session->set_flashdata('edicaook', 'Alteração realizada com sucesso.');

			redirect('admin/categoria');
		}
	}
		
}