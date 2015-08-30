<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MarcaModel extends CI_Model{

	 public function insertMarca($dados = null){

		if($dados != null){

			$this->db->insert('TbMarca', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('admin/marca');
		}
	}
	 
	 public function DropDownMarca(){
		
		//$this->db->select('categoria', 'idCategoria');
		
		$this->db->from('TbMarca');
		
		$result = $this->db->get();
		
		$return = array();

  		//Verifica se a quantidade de registros e maior que 0
  		if($result->num_rows > 0){

	   //Varivavel $return com o primeiro indice 0 com o valor 'Selecione'
	   //$return[''] = 'Selecione';
	
	   //Percore os valores 
	   foreach($result->result_array() as $row){
	    //O indice que será o id receberá o valor
	    $return[$row['idMarca']] = $row['marca'];
	   }
  }

  //Retorna o array preenchido
  return $return;
	
	
	}
	

	public function getById($id = null){

		if($id != null){
			
			$this->db->where('idMarca', $id);

			$this->db->limit(1);

			return $this->db->get('TbMarca');
		}
	}

	public function updateMarca($dados = null, $condition = null){

		if($dados != null && $condition != null){

			$this->db->update('TbMarca', $dados, $condition);

			$this->session->set_flashdata('edicaook', 'Alteração realizada com sucesso.');

			//redirect('usuario/editar');
			redirect('admin/marca');
		}
	}

	public function getAllMarca(){

		$this->db->from('TbMarca');

		$this->db->order_by('idMarca');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
	
	public function getAllActive(){
		
			$this->db->from('TbMarca');

		$this->db->order_by('idMarca');

		$this->db->where('flagAtivo', 1);

		return $this->db->get();

	}

}