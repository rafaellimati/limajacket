<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Endereco extends CI_Controller {

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
		$this->load->model('ClienteModel');
		$this->load->model('CategoriaModel');
	}
	 
	 
	public function index()
	{
		
		$dados = array(
		'pasta' => 'lojaCliente',
		'view' => 'clienteEndereco',
		'Estado' => $this->ClienteModel->getAllEstado()->result(),
		//'cidade' => $this->ClienteModel->getAllCidade()->result(),
		);
	
		$this->load->view('Principal', $dados);
	}
	
	public function Cadastrar(){

		$Endereco = elements(array('logradouro','bairro','numero','cep','idCidade'), $this->input->post());

		$this->form_validation->set_rules('logradouro', 'Logradouro', 'trim|required|max_length[45]|ucwords|');
		//$this->form_validation->set_message('is_unique', "O endereço ". $Endereco['logradouro'] ." já existe.");

		//Verifica se o formmulário é válido
		if($this->form_validation->run()){

			//Pega os campos e recebe os valores do post
			$dados = elements(array('logradouro','bairro','numero','cep'), $this->input->post());
			$dados['idCidade'] = $this->input->post('cidade');
			//setando flagAtivo para True
			//$dados['flagAtivo'] = 1;

			$this->ClienteModel->insertEndereco($dados);
			
		}else{
			$this->session->set_flashdata('erro', 'Endereç já existe!');
		}

		/*$dados = array(
			'pasta' => 'lojaCliente',
			'view' => 'clienteEndereco',
			 'Estado' => $this->ClienteModel->getAllEstado(),
			 //'cidade' => $this->ClienteModel->getAllCidade()->result(),

			 );
		$this->load->view('Principal', $dados);*/


	}
	}
	
	
	
	