<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class ClienteModel extends CI_Model{
	
		public function insertCidade($dados = null){

		if($dados != null){

			$this->db->insert('TbCidade', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('cliente/endereco');
		}
	}
		
		public function getAllEstado(){

		$this->db->from('TbEstado');

		$this->db->order_by('idEstado');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	}
		
		public function getAllCidade(){
			
		$this->db->select_max('idCidade');
			
		$query = $this->db->get('TbCidade');

		//$this->db->order_by('idCidade');

		//$this->db->where('ativo', 1);
		
		$return = array();
		
		if($result->num_rows > 0){

	   //Varivavel $return com o primeiro indice 0 com o valor 'Selecione'
	   //$return[''] = 'Selecione';
	
	   //Percore os valores 
	   foreach($result->result_array() as $row){
	    //O indice que será o id receberá o valor
	    $return[$row['idCidade']] = $row['cidade'];
	}
}
		
}
		
		
		public function insertEndereco($dados = null){

		if($dados != null){

			$this->db->insert('TbEndereco', $dados);

			$this->session->set_flashdata('cadastrook','Cadastro realizado com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('cliente/endereco');
		}
	}
		
}
	