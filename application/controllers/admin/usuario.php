<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usuario extends CI_Controller {

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
		$this->load->model('UsuarioModel');
	}


	public function index()
	{
		
		$dados = array(
		'pasta' =>'usuario',
		'view'  =>'cadastrar',
		'login' => $this->UsuarioModel->getAllUsuario()->result(),
		);
	
		$this->load->view('admin', $dados);
	}


	public function cadastrar(){

		$login = elements(array('login'), $this->input->post());
		$email = elements(array('senha'), $this->input->post());
		
		$this->form_validation->set_rules('login', 'Email', 'trim|required|max_length[45]|strtolower|is_unique[TbLogin.login]');
		$this->form_validation->set_message('is_unique', "O login ". $login['login'] ." já existe.");


		if($this->form_validation->run()){

			$dados = elements(array('login', 'senha', 'nivelAcesso','dataCadastro','flagAtivo'), $this->input->post());
			$dados['senha'] = md5($dados['senha']);
			$dados['nivelAcesso']= 2;
			$dados['dataCadastro']= date('Y-m-d');

			$dados['flagAtivo'] = 1;

		    $this->UsuarioModel->insertUsuario($dados);
		}else{
			$this->session->set_flashdata('erro', 'Campo(s) obrigatório(s) não preenchido(s)');
		}

          	$dados = array(
			'pasta' => 'usuario',
			'view' => 'cadastrar',
			'login' => $this->UsuarioModel->getAllUsuario()->result(),
			
		);
		$this->load->view('Admin', $dados);


	}

		public function editar(){

					$this->form_validation->set_rules('login', 'Login', 'trim|required|max_length[45]|strtolower|ucwords');
					$this->form_validation->set_rules('idLogin', 'idLogin', 'required');
			
					if($this->form_validation->run()){

						$dados = elements(array('login','senha','flagAtivo'), $this->input->post());
						$dados['senha']= md5($dados['senha']);
						
						$this->UsuarioModel->updateUsuario($dados, array('idLogin' => $this->input->post('idLogin')));
					
					}else{
						$this->session->set_flashdata('erro', 'Login já existe!');
					}
			
					$dados = array(
						'pasta' => 'usuario',
						'view' => 'editar',
						'login' => $this->UsuarioModel->getAllUsuario()->result(),
						'loginho' => $this->UsuarioModel->getAllUsuario()->result()
						 );
					$this->load->view('admin', $dados);
			
				}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */