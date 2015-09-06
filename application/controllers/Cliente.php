<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cliente extends CI_Controller {

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
		'view' => 'clienteLogin',
		);
	
		$this->load->view('Principal', $dados);
	}
	
	
	public function Login(){
	
	
	    $login = elements(array('login'), $this->input->post());
		$senha = elements(array('senha'), $this->input->post());
		
		$this->form_validation->set_rules('login', 'senha', 'trim|required|max_length[45]|strtolower|is_unique[TbLogin.login]');
		$this->form_validation->set_message('is_unique', "O login ". $login['login'] ." já existe.");


		if($this->form_validation->run()){

			$dados = elements(array('login', 'senha', 'nivelAcesso','dataCadastro','flagAtivo'), $this->input->post());
			$dados['senha'] = md5($dados['senha']);
			$dados['nivelAcesso']= 1;
			$dados['dataCadastro']= date('Y-m-d');
			$dados['flagAtivo'] = 1;


		    $this->ClienteModel->insertLogin($dados);
		}else{
			$this->session->set_flashdata('erro', 'Campo(s) obrigatório(s) não preenchido(s)');
		}

	
	
	/*$dados = array(
		'pasta' => 'lojaCliente',
		'view' => 'clienteLogin',
		);
	
		$this->load->view('Principal', $dados); */
	
	}



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */