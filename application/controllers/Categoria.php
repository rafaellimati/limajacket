<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */


	public function __construct(){
		parent::__construct();
		$this->load->model('CategoriaModel'); // lá na model categoria vc encontrará um metodo getAllCategoria que pega a categoria do menu lateral.
		$this->load->model('JaquetaModel');  // getJaquetaByCategoria é o nome do metodo que lê o foreign key da categoria na jaqueta pra passar pela URL.
	}
	
		 public function index()
	{
		$dados = array(
		'pasta' => 'lojaCategoria',
		'view'  => 'categoriaView',
		'categorias' => $this->CategoriaModel->getAllCategoria()->result()
		);
		$this->load->view('Principal', $dados);
	}
	
		
    //redirecionando  a função get categoria pra pagina inicial pegando as categorias daquela jaqueta e pegando o id e dados das jaqutas
	function get_categoria($idCategoria)
	{
		$dados = array(
		'pasta' => 'loja',
		'view'  => 'inicio',
		'categorias' => $this->CategoriaModel->getAllCategoria()->result(),
		'jaquetas'    => $this->JaquetaModel->getJaquetaByCategoria($idCategoria)->result(),
		);
		
		//redirect('Principal/categoria');
		$this->load->view('Principal', $dados);
	}


		//pegando como array a categoria e o Id pra passar pela URL. 
		
	function adicionar_item(){
					
								
				$item = array(
		           'id'      => $this->input->post('idCategoria'),
		           'name'    => $this->input->post('categoria')
		        );
				$this->cart->insert($item);
				redirect(base_url('categoria'));
	}	
	
			//atualiza o carrinho referente aquela jaqueta da categoria que foi clicada
			
			function atualizar(){
					$this->cart->update($_POST);
					redirect(base_url('compra'));
				}
	
	
}