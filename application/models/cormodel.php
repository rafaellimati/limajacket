<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class corModel extends CI_Model{

	public function insertCor($dados = null){

		if($dados != null){

			$this->db->insert('TbCor', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');

			redirect('admin/cor');
		}
	}
	
		public function getById($id = null){

		if($id != null){
			
			$this->db->where('idCor', $id);

			$this->db->limit(1);

			return $this->db->get('TbCor');
		}
	}
		
		
		public function DropDownCor(){
		
		$this->db->from('TbCor');
		
		$result = $this->db->get();
		
		$return = array();

  		if($result->num_rows > 0){

	   //Varivavel $return com o primeiro indice 0 com o valor 'Selecione'
	   //$return[''] = 'Selecione';
	
	   //Percore os valores 
	   foreach($result->result_array() as $row){
	    //O indice que será o id receberá o valor
	    $return[$row['idCor']] = $row['cor'];
	   }
  }

  //Retorna o array preenchido
  return $return;
	
	
	}

	public function updateCor($dados = null, $condition = null){

		if($dados != null && $condition != null){

			$this->db->update('TbCor', $dados, $condition);

			$this->session->set_flashdata('edicaook', 'Alteração realizada com sucesso.');

			redirect('admin/cor');
		}
	}
	
		public function getAllCor(){

		$this->db->from('TbCor');

		$this->db->order_by('idCor');

		return $this->db->get();
	}
}