<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JaquetaModel extends CI_Model{

	public function insertJaqueta($dados = null){

		if($dados != null){

			$this->db->insert('TbJaqueta', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');
			
			//redirect('usuario/cadastrar');
			redirect('administrador/jaqueta');
		}
	}
	
	public function getAllJaqueta(){

/*		$this->db->from('TbJaqueta');

		$this->db->order_by('idJaqueta');

		//$this->db->where('ativo', 1);

		return $this->db->get();*/



		$this->db->select('idJaqueta ,jaqueta , quantidade, valor,tbjaqueta.descricao as detalhes ,  marca, cor, categoria, tamanho');


		$this->db->from('TbJaqueta');

		$this->db->order_by('jaqueta');

		$this->db->join('tbmarca', 'tbjaqueta.idMarca = tbmarca.idMarca', 'inner');
		$this->db->join('tbcor', 'tbjaqueta.idCor = tbcor.idCor ', 'inner');
		$this->db->join('tbCategoria', 'tbjaqueta.idCategoria = tbCategoria.idCategoria', 'inner');
		$this->db->join('tbtamanho', 'tbjaqueta.idTamanho = tbtamanho.idTamanho', 'inner');

		return $this->db->get();

/*//$this->db->join('tb_docente', 'tb_docente.id = ta_mapeamento.id_docente', 'inner');
inner join tbmarca on(tbjaqueta.idMarca = tbmarca.idMarca)
inner join tbcor on(tbjaqueta.idCor = tbcor.idCor )
inner join tbstatus on(tbjaqueta.idStatus = tbstatus.idStatus)
inner join tbtamanho on(tbjaqueta.idTamanho = tbtamanho.idTamanho)*/



	}
}