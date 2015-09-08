<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pedido extends CI_Controller {

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
		//$this->load->model('CategoriaModel');
	}
	
		public function Index()
			{
				$dados = array(
				'pasta' => 'Pedido',
				'view'  => 'pedidoView',
				//'Pedido' => $this->PedidoModel->getAllPedido()->result()
				);
				
				$this->load->view('Principal', $dados);
			}
			
			
			function adicionar_item(){
					
				//Isso é feito pro carrinho aceitar qualquer nome com acento!!!
				$this->cart->product_name_rules = '\d\D';

				$item = array(
		           'id'      => $this->input->post('idJaqueta'),
		           'qty'     => $this->input->post('quantidade'),
		           'price'   => $this->input->post('valor'),
		           'name'    =>  $this->input->post('nome')
		        );
				$this->cart->insert($item);
				redirect(base_url('pedido'));
	}	
			
	function atualizar(){
			$this->cart->update($_POST);
			redirect(base_url('pedido'));
		}


}