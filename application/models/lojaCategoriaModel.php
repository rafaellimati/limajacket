<?php
class Categorias_model extends CI_Model {
    	
	var $id_categorias;
    var $categoria_nome;
    var $categoria_slug;
	var $data_alteracao;    

    function __construct(){
        parent::__construct();
    }
    
    public function listar_categorias(){
        return $this->db->get('categorias')->result();
    }
	
	public function produtos_categoria($categoria,$offset=null,$numero_itens=null){			
		$this->db->where('id_categoria',$categoria);		
		return $this->db->get('produtos',$numero_itens,$offset)->result();
	}
	
	public function contar_itens_categoria_by_slug($slug){
		$this->db->select('count(*) as total');
		$this->db->from('produtos');
		$this->db->join('categorias', 'categorias.id_categorias = produtos.id_categoria');
		$this->db->where('categorias.categoria_slug',$slug);
		return $this->db->get()->result();
	}
	
	public function detalhes_categoria_by_slug($slug,$offset=null,$numero_itens=null){
		$this->db->where('categoria_slug',$slug);
		$categorias = $this->db->get('categorias')->result();
		if(count($categorias)==1){
			foreach($categorias as $categoria){
				$this->id_categorias = $categoria->id_categorias;
				$this->categoria_nome = $categoria->categoria_nome;
				$this->categoria_slug = $categoria->categoria_slug;
				$this->data_alteracao = $categoria->data_alteracao; 
			}
			$dados['categoria'] = $this;
			$dados['produtos_categoria'] = $this->produtos_categoria($this->id_categorias,$offset,$numero_itens);
		}
		else{
			$dados['categoria'] = null;
			$dados['produtos_categoria'] = null;
		}
		return $dados;	
	}
	
	function adicionar($categoria_nome,$categoria_slug){
		$this->id_categorias = null;
		$this->categoria_nome = $categoria_nome;
		$this->categoria_slug = $categoria_slug;
		$this->data_alteracao = date("Y-m-d h:i:s");
		return $this->db->insert('categorias', $this);
	}
	
	function get_categoria($categoria){
		$this->db->where('id_categorias',$categoria);
		$categorias = $this->db->get('categorias')->result();
		if(count($categorias)==1){
			foreach($categorias as $categoria){
				$this->id_categorias = $categoria->id_categorias;
				$this->categoria_nome = $categoria->categoria_nome;
				$this->categoria_slug = $categoria->categoria_slug;
				$this->data_alteracao = $categoria->data_alteracao; 
			}
			return $this;
		}
	}
	
	function gravar_alteracao($id_categorias,$categoria_nome,$categoria_slug){
		$this->id_categorias = $id_categorias;
		$this->categoria_nome = $categoria_nome;
		$this->categoria_slug = $categoria_slug;
		$this->data_alteracao = date("Y-m-d h:i:s");
		$this->db->where('id_categorias',$this->id_categorias);
		return $this->db->update('categorias', $this);
	}
	
	function excluir($id_categorias){
		$this->db->where('id_categorias',$id_categorias);
		return $this->db->delete('categorias');
	}
}