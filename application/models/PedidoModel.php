<?php
class Produtos_model extends CI_Model {
    	
	var $id_produto;
    var $id_categoria;
    var $nome;
	var $descricao;
	var $foto;
	var $preco;
	var $slug;
	var $data_alteracao;    

    function __construct(){
        parent::__construct();
    }
	
	public function detalhes_produto_by_slug($slug){			
		$this->db->where('slug',$slug);		
		$produtos = $this->db->get('produtos')->result();
		foreach($produtos as $produto){
			$this->id_produto = $produto->id_produto;
			$this->id_categoria = $produto->id_categoria;
		    $this->nome = $produto->nome;
			$this->descricao = $produto->descricao;
			$this->foto = $produto->foto;
			$this->preco = $produto->preco;
			$this->slug = $produto->slug;
			$this->data_alteracao = $produto->data_alteracao;
		}
		return $this;
	}
	
	public function detalhes($produto){			
		$this->db->where('id_produto',$produto);		
		$produtos = $this->db->get('produtos')->result();
		foreach($produtos as $produto){
			$this->id_produto = $produto->id_produto;
			$this->id_categoria = $produto->id_categoria;
		    $this->nome = $produto->nome;
			$this->descricao = $produto->descricao;
			$this->foto = $produto->foto;
			$this->preco = $produto->preco;
			$this->slug = $produto->slug;
			$this->data_alteracao = $produto->data_alteracao;
		}
		return $this;
	}
	
	public function listar_produtos(){
		return $this->db->get('produtos')->result();
	}
	
	public function adicionar($id_categoria,$nome,$descricao,$foto,$preco,$slug){
		$this->id_produto = null;
		$this->id_categoria = $id_categoria;
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->foto = $foto;
		$this->preco = $preco;
		$this->slug = $slug;
		return $this->db->insert('produtos', $this);
	}
	
	public function gravar_alteracao($id_produto,$id_categoria,$nome,$descricao,$foto,$preco,$slug){
		$this->id_produto = $id_produto;
		$this->id_categoria = $id_categoria;
		$this->nome = $nome;
		$this->descricao = $descricao;
		$this->foto = $foto;
		$this->preco = $preco;
		$this->slug = $slug;
		$this->db->where('id_produto',$id_produto);
		return $this->db->update('produtos', $this);
	}
	
	public function excluir($id_produto){
		$excluir = $this->detalhes($id_produto);
		@unlink("produtos/".$excluir->foto);		
		$this->db->where('id_produto',$excluir->id_produto);
		return $this->db->delete('produtos');
	}
	
}

	

