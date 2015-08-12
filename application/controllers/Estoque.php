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
				
			//$jaqueta = elements(array('jaqueta','tecido','valor','descricao','idMarca'), $this->input->post());
			//$jaqueta[idLogin] = $this->session->userdata('id');
			$this->form_validation->set_rules('quantidade', 'Quantidade', 'trim|required|max_length[45]');
		    //$this->form_validation->set_message('is_unique', "O marca ". $jaqueta['jaqueta'] ." já existe.");
			
			if($this->form_validation->run()){

				//Pega os campos e recebe os valores do post
			    $dados = elements(array('cor'), $this->input->post());
				$dados = elements(array('tamanho'), $this->input->post());
				$dados = elements(array('quantidade','idJaqueta'), $this->input->post());
				
				$this->EstoqueModel->insertCor($dados);
				$this->EstoqueModel->insertTamanho($dados);
				$this->EstoqueModel->insertEstoque($dados);
				
				//setando flagAtivo para True
				//$dados['flagAtivo'] = 1;
	
				
			}else{
				$this->session->set_flashdata('erro', 'Jaqueta já existe!');
			}

			/*		$dados = array(
						'pasta' => 'usuario',
						'view' => 'cadastrar' );
					$this->load->view('Administrador', $dados);
			*/
			
					redirect('administrador/estoque/cadastrar');
			
				}
	}
		