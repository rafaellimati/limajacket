<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {

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


	/*public function __construct(){
		parent::__construct();
		$this->load->model('CategoriaModel');
	}*/


	public function index()
	{
		$this->load->model('CategoriaModel');
		$dados = array(
		'pasta' => 'loja',
		'view'  => 'inicio',
		'categorias' => $this->CategoriaModel->getAllCategoria()->result()
		);
		
		//redirect('Principal/categoria');
		$this->load->view('Principal', $dados);

	}
	
	
		 /*public function Categoria()
	{
		$dados = array(
		'pasta' => 'lojaCategoria',
		'view'  => 'categoriaView',
		'categorias' => $this->CategoriaModel->getAllCategoria()->result()
		);
		$this->load->view('Principal', $dados);
	}


        /* public function Compra()
	{
		$dados = array(
		'pasta' => 'Compra',
		'view'  => 'CompraView',
		//'compra' => $this->CompraModel->getAllCompra()->result()
		);
		$this->load->view('Principal', $dados);
	}
	
	
	
	public function Pedido()
			{
				$dados = array(
				'pasta' => 'Pedido',
				'view'  => 'PedidoView',
				//'Pedido' => $this->PedidoModel->getAllPedido()->result()
				);
				
				$this->load->view('Principal', $dados);
			}
	
	
	
	public function Cliente()
		{
			$dados = array(
			'pasta' => 'lojaCliente',
			'view'  => 'ClienteView',
			//'Cliente' => $this->ClienteModel->getAllCliente()->result()
			);
			
			$this->load->view('Principal', $dados);
		}

		
		
		public function Login()
		
			{
				$dados = array(
				'pasta' => 'lojaLogin',
				'view'  => 'loginView',
				//'Login' => $this->LoginModel->getAllLogin()->result()
				);
				
				$this->load->view('Principal', $dados);
			}
	
	
		
		
		public function Pagamento()
		
			{
				$dados = array(
				'pasta' => 'lojaPagamento',
				'view'  => 'pagamentoView',
				//'Login' => $this->LoginModel->getAllLogin()->result()
				);
				
				$this->load->view('Principal', $dados);
			}*/
	
}
/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */