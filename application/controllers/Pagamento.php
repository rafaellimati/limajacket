<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pagamento extends CI_Controller {

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
		$this->load->model('JaquetaModel');
	}


	public function index()
	{

		if($this->session->userdata('cliente_is_logged_in')) {

			$dados = array(
			'pasta' => 'lojaPagamento',
			'view'  => 'pagamentoView',
			//'categorias' => $this->CategoriaModel->getAllCategoria()->result()
			);

			foreach ($this->cart->contents() as $items) {
				$disponivel = $this->JaquetaModel->JaquetasDisponiveis($items['id']);
				if($disponivel < $items['qty']){
					redirect(base_url('pedido'));
					break;
				}else{
					$this->session->set_flashdata('disponivel', 'Quantidade indisponível em estoque');
					$this->load->view('Principal', $dados);
				}
			}
			
			//redirect('Principal/categoria');
			
		}else{
			redirect(base_url('login'));
		}

	}
}