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
		'view'  =>'cadastrar');
	
		//$this->load->view('administrador', $dados);
		redirect('administrador/usuario/cadastrar');
	}


	public function cadastrar(){

		$login = elements(array('login'), $this->input->post());
		$email = elements(array('email'), $this->input->post());
		
		// $this->form_validation->set_rules('nome', 'Nome', 'trim|required|max_length[45]|strtolower|ucwords');
		// $this->form_validation->set_message('is_unique', "O email ". $email['email'] ." já existe.");
		$this->form_validation->set_rules('login', 'Email', 'trim|required|max_length[45]|strtolower|is_unique[TbLogin.login]');
		$this->form_validation->set_message('is_unique', "O login ". $login['login'] ." já existe.");
	/*	$this->form_validation->set_rules('login', 'Login', 'trim|required|max_length[45]|strtolower|is_unique[tb_usuario.login]');
		$this->form_validation->set_rules('id_perfil', 'required');
*/		//$this->form_validation->set_rules('senha','Senha','trim|required|strtolower');
		//$this->form_validation->set_rules('confirmiSenha','Repita a Senha','trim|required|strtolower|matches[senha]');


		if($this->form_validation->run()){

			$dados = elements(array('login', 'senha', 'nivelAcesso'), $this->input->post());

			//$dados['senha'] = sha1($dados['login']);
			/*$dados['ativo'] = 1;
            $dados['primeiro_acesso'] = 1;*/

			$this->UsuarioModel->insertUsuario($dados);
		}else{
			$this->session->set_flashdata('erro', 'Campo(s) obrigatório(s) não preenchido(s)');
		}

/*		$dados = array(
			'pasta' => 'usuario',
			'view' => 'cadastrar' );
		$this->load->view('Administrador', $dados);
*/

		redirect('administrador/usuario/cadastrar');

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */