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
		$this->load->model('DddModel');
		$this->load->model('EstadoModel');
		$this->load->model('TipoTelefoneModel');
		$this->load->model('SexoModel');
	}
	 
	 
	public function index()
	{

		$dados = array(
		'pasta' => 'lojaCliente',
		'view' => 'ClienteView',
		'Estado' => $this->EstadoModel->getAllEstado()->result(),
		'Ddd' => $this->DddModel->getAllDdd()->result(),
		'TipoTelefone' => $this->TipoTelefoneModel->getAllTipoTelefone()->result(),
		'Sexo' => $this->SexoModel->getAllSexo()->result(),
		//'cidade' => $this->ClienteModel->getAllCidade()->result(),
		);
		
	
		$this->load->view('Principal', $dados);
	}
	public function Cadastrar()
	{
		$login = elements(array('login'), $this->input->post());
		$senha = elements(array('senha'), $this->input->post());
		$cpf = elements(array('nome','cpf','email','dataNascimento'), $this->input->post());
			
		$this->form_validation->set_rules('cidade', 'Cidade', 'trim|required|max_length[100]|ucwords|]');
		$this->form_validation->set_rules('logradouro', 'Logradouro', 'trim|required|max_length[100]|ucwords|');
		$this->form_validation->set_rules('bairro', 'Bairro', 'trim|required|max_length[100]|ucwords|');
		$this->form_validation->set_rules('numero', 'Numero', 'trim|required|max_length[10]|');
		$this->form_validation->set_rules('cep', 'Cep', 'trim|required|max_length[45]');
		$this->form_validation->set_rules('telefone', 'Telefone', 'trim|required|max_length[15]|alpha_numeric');
		$this->form_validation->set_rules('login', 'Login', 'trim|required|max_length[100]|strtolower|is_unique[TbLogin.login]');
		$this->form_validation->set_message('is_unique', "O login ". $login['login'] ." já existe.");
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required|max_leght[45]');
		$this->form_validation->set_message('matches','As senhas não conferem');
		$this->form_validation->set_rules('confirmaSenha', 'Repita a senha', 'trim|required|max_leght[45]|matches[senha]');
		$this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[100]|ucwords');
		$this->form_validation->set_message('is_unique', "O cpf ". $cpf['cpf'] ." já existe.");
		
		
		$dados = elements(array('cidade','idEstado','logradouro','bairro',
		'numero','cep','login','senha','idDdd','idTipoTelefone','telefone',
		'idSexo', 'nome','cpf','email','dataNascimento'),$this->input->post());
		$dados['senha'] = md5($dados['senha']);
		$this->ClienteModel->insertCliente($dados);
		
		redirect('Principal');
	}
	
	
	/*public function Login(){
	
	
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

	
	
	$dados = array(
		'pasta' => 'lojaCliente',
		'view' => 'clienteLogin',
		);
	
		$this->load->view('Principal', $dados); 
	
	}*/



}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */