<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastrar extends CI_Controller {

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
	}
	 
	 
	public function index()
	{

		$dados = array(
		'pasta' => 'lojaCliente',
		'view' => 'clienteCadastrar',
		'sexo' => $this->ClienteModel->getAllSexo()->result(),
		);
	
		$this->load->view('Principal', $dados);
	}
	
	public function Cliente(){

		$cpf = elements(array('nome','cpf','email','dataNascimento'), $this->input->post());

		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[45]|ucwords');
		$this->form_validation->set_message('is_unique', "O cpf ". $cpf['cpf'] ." já existe.");

		//Verifica se o formmulário é válido
		if($this->form_validation->run()){

			//Pega os campos e recebe os valores do post
			$dados = elements(array('nome','cpf','email','dataNascimento','dataCadastro','flagAtivo','idEndereco','idTelefone','idSexo','idLogin'), $this->input->post());
			$dados['idEndereco'] = $this->input->post('enderecoPost');
			$dados['idTelefone'] = $this->input->post('telefonePost');
			$dados['idLogin'] = $this->input->post('loginPost');
			$dados['dataCadastro']= date('Y-m-d');
		    $dados['flagAtivo'] = 1;

			$this->ClienteModel->insertCadastrar($dados);
		}else{
			$this->session->set_flashdata('erro', 'cadastrar já existe!');
		}

		/*$dados = array(
			'pasta' => 'lojaCliente',
			'view' => 'clienteCadastrar',
			 'sexo' => $this->ClienteModel->getAllSexo()->result(),

			 );
		$this->load->view('Principal', $dados);*/


	}

}