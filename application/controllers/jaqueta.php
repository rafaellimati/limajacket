<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jaqueta extends CI_Controller {
		
		public function __construct(){
		parent::__construct();
		$this->load->model('JaquetaModel');
	}


	public function index()
	{
		
		$dados = array(
		'pasta' =>'usuario',
		'view'  =>'cadastrar');
	
		//$this->load->view('administrador', $dados);
		redirect('administrador/jaqueta/cadastrar');
	}
	
			public function cadastrar(){
				
			//$jaqueta = elements(array('jaqueta','tecido','valor','descricao','idMarca'), $this->input->post());
			//$jaqueta[idLogin] = $this->session->userdata('id');
			$this->form_validation->set_rules('jaqueta', 'Jaqueta', 'trim|required|max_length[45]');
		    //$this->form_validation->set_message('is_unique', "O marca ". $jaqueta['jaqueta'] ." já existe.");
			
			if($this->form_validation->run()){

				//Pega os campos e recebe os valores do post
				$dados = elements(array('jaqueta','tecido','valor','descricao','idMarca','idCor','idTamanho','idStatus'), $this->input->post());
				$dados['idLogin'] = $this->session->userdata('id');
				//setando flagAtivo para True
				//$dados['flagAtivo'] = 1;
	
				$this->JaquetaModel->insertJaqueta($dados);
			}else{
				$this->session->set_flashdata('erro', 'Jaqueta já existe!');
			}

			/*		$dados = array(
						'pasta' => 'usuario',
						'view' => 'cadastrar' );
					$this->load->view('Administrador', $dados);
			*/
			
					redirect('administrador/Jaqueta/cadastrar');
			
				}
	}