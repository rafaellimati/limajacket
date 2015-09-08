<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Carrinho extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$dados_carrinho['carrinho'] = $this->cart->contents();		
			
			
			$dados = array(
				'pasta' => 'Pedido',
				'view'  => 'pedidoView',
				//'compra' => $this->CompraModel->getAllCompra()->result()
		);
		$this->load->view('Principal', $dados);		
	}
	
	function adicionar_item(){			
		$item = array(
           'id'      => $this->input->post('id'),
           'qty'     => $this->input->post('qty'),
           'price'   => $this->input->post('price'),
           'name'    => $this->input->post('name')
        );
		$this->cart->insert($item);
		redirect(base_url('carrinho'));
	}	
	
	function atualizar(){
		$this->cart->update($_POST);
		redirect(base_url('carrinho'));
	}
}