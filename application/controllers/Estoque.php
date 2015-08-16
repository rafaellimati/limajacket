<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Estoque extends CI_Controller {
		
		public function __construct(){
		parent::__construct();
		$this->load->model('EstoqueModel');
	}
		
		public function index()
	{
		
		$dados = array(
		'pasta' =>'usuario',
		'view'  =>'cadastrar');
	
		//$this->load->view('administrador', $dados);
		redirect('administrador/estoque/cadastrar');
	}


public function cadastrarEstoque(){
				
			$this->form_validation->set_rules('quantidade', 'Quantidade', 'trim|required|max_length[45]');
			
			if($this->form_validation->run()){

			    $dados = elements(array('cor'), $this->input->post());
				$dados = elements(array('tamanho'), $this->input->post());
				$this->EstoqueModel->insertCor($dados);
				$this->EstoqueModel->insertTamanho($dados);
				$dados = elements(array('quantidade','idCor','idTamanho','idJaqueta'), $this->input->post());
				$this->EstoqueModel->insertEstoque($dados);
				
				//setando flagAtivo para True
				//$dados['flagAtivo'] = 1;
	
				
			}else{
				$this->session->set_flashdata('erro', 'Jaqueta já existe!');
			}

			
					redirect('administrador/estoque/cadastrar');
			
				}
	}
		