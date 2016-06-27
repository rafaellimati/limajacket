<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class JaquetaModel extends CI_Model{

	public function insertJaqueta($dados = null){

		if($dados != null){

			$this->db->insert('TbJaqueta', $dados);

			$this->session->set_flashdata('cadastrook','Operação realizada com sucesso.');

			redirect('admin/jaqueta');
		}
	}
	

		public function getById($id = null){

		if($id != null){
			
			$this->db->where('idJaqueta', $id);

			$this->db->limit(1);

			return $this->db->get('TbJaqueta');
		}
	}
		
		public function detalhesProduto($id = null){
			if($id != null){

					$this->db->where('idJaqueta', $id);

					$this->db->limit(1);

					$this->db->select('idJaqueta ,jaqueta , quantidade, valor,tbjaqueta.descricao as detalhes ,  marca, cor, tamanho, categoria, imagem');
			
			
					$this->db->from('TbJaqueta');
			
					$this->db->order_by('jaqueta');
			
					$this->db->join('tbmarca', 'tbjaqueta.idMarca = tbmarca.idMarca', 'inner');
					$this->db->join('tbcor', 'tbjaqueta.idCor = tbcor.idCor ', 'inner');
				    $this->db->join('tbtamanho', 'tbjaqueta.idTamanho = tbtamanho.idTamanho', 'inner');
					$this->db->join('tbCategoria', 'tbjaqueta.idCategoria = tbCategoria.idCategoria', 'inner');
			
					return $this->db->get();
							
			}
		}
		

	
	public function getLojaJaqueta(){

     	$this->db->from('TbJaqueta');

		$this->db->order_by('Jaqueta');

		//$this->db->where('ativo', 1);

		return $this->db->get();
	
	
	}
	
	
	
	public function getAllJaqueta(){

/*		$this->db->from('TbJaqueta');

		$this->db->order_by('idJaqueta');

		//$this->db->where('ativo', 1);

		return $this->db->get();*/



		$this->db->select('idJaqueta ,jaqueta , quantidade, valor,TbJaqueta.descricao as detalhes ,  marca, cor, tamanho, categoria');


		$this->db->from('TbJaqueta');

		$this->db->order_by('jaqueta');

		$this->db->join('TbMarca', 'TbJaqueta.idMarca = TbMarca.idMarca', 'inner');
		$this->db->join('TbCor', 'TbJaqueta.idCor = TbCor.idCor ', 'inner');
	    $this->db->join('TbTamanho', 'TbJaqueta.idTamanho = TbTamanho.idTamanho', 'inner');
		$this->db->join('TbCategoria', 'TbJaqueta.idCategoria = TbCategoria.idCategoria', 'inner');

		return $this->db->get();

/*//$this->db->join('tb_docente', 'tb_docente.id = ta_mapeamento.id_docente', 'inner');
inner join tbmarca on(tbjaqueta.idMarca = tbmarca.idMarca)
inner join tbcor on(tbjaqueta.idCor = tbcor.idCor )
inner join tbstatus on(tbjaqueta.idStatus = tbstatus.idStatus)
inner join tbtamanho on(tbjaqueta.idTamanho = tbtamanho.idTamanho)*/



	}



	public function JaquetasDisponiveis($id=null)
	{
		if($id != null){

			$query = $this->db->query("SELECT count(*) as quant FROM tbpedido where idJaqueta = $id");
			$row = $query->row();
			$quantPedido = $row->quant;

			$query2 = $this->db->query("SELECT quantidade  FROM tbjaqueta where idJaqueta = $id");
			$row2 = $query2->row();
			$quantJaqueta = $row2->quantidade;

			return $quantJaqueta - $quantPedido;
		}
	}


	public function getJaquetaByCategoria($idCategoria = null)
	{

		if($idCategoria != null){
		
			$this->db->where('idCategoria', $idCategoria);
			$this->db->from('TbJaqueta');

			$this->db->order_by('Jaqueta');

			//$this->db->where('ativo', 1);

			return $this->db->get();	
		}

	}
}