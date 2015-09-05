<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class TamanhoModel extends CI_Model{

	public function insertTamanho($dados = null){

		if($dados != null){

			$this->db->insert('TbTamanho', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');

			redirect('admin/tamanho');
		}	
	}
	
	
	public function DropDownTamanho(){

		
		$this->db->from('TbTamanho');
		
		$result = $this->db->get();
		
		$return = array();

  		//Verifica se a quantidade de registros e maior que 0
  		if($result->num_rows > 0){

	   //Varivavel $return com o primeiro indice 0 com o valor 'Selecione'
	   //$return[''] = 'Selecione';
	
	   //Percore os valores 
	   foreach($result->result_array() as $row){
	    //O indice que será o id receberá o valor
	    $return[$row['idTamanho']] = $row['tamanho'];
	   }
  }

  //Retorna o array preenchido
  return $return;
	
}
	
		public function getAllTamanho(){

		$this->db->from('TbTamanho');

		$this->db->order_by('idTamanho');

		return $this->db->get();
	}

	public function getById($id = null){

		if($id != null){
			
			$this->db->where('idTamanho', $id);

			$this->db->limit(1);

			return $this->db->get('TbTamanho');
		}
	}	
	
			public function updateTamanho($dados = null, $condition = null){

		if($dados != null && $condition != null){

			$this->db->update('TbTamanho', $dados, $condition);

			$this->session->set_flashdata('edicaook', 'Alteração realizada com sucesso.');

			redirect('admin/Tamanho');
		}
	}
}
