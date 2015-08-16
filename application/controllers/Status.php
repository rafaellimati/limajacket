<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Status extends CI_Controller {

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
		$this->load->model('StatusModel');
	}


	public function index()
	{
		
		$dados = array(
		'pasta' =>'Status',
		'view'  =>'status');
	
		//$this->load->view('administrador', $dados);
		redirect('administrador/status/cadastrar');
	}


	public function cadastrar(){

		$Descricao = elements(array('descricao'), $this->input->post());
		//$email = elements(array('email'), $this->input->post());
		
		//Faz as devidas validações [remove espaços,
		// 							verifica se foi preenchido,
		//							se é menor que 45 caracteres,
		//							Capitaliza a palavra
		//						 	e se já existe no banco de dados]
		$this->form_validation->set_rules('descricao', 'Descricao', 'trim|required|max_length[45]|ucwords|is_unique[TbStatus.descricao]');
		//Seta uma mensagem se já existir no banco.
		$this->form_validation->set_message('is_unique', "O descrição ". $Descricao['descricao'] ." já existe.");

		//Verifica se o formmulário é válido
		if($this->form_validation->run()){

			//Pega os campos e recebe os valores do post
			$dados = elements(array('descricao'), $this->input->post());

			//setando flagAtivo para True
			//$dados['flagAtivo'] = 1;

			$this->StatusModel->insertStatus($dados);
		}else{
			$this->session->set_flashdata('erro', 'Descricao já existe!');
		}

/*		$dados = array(
			'pasta' => 'usuario',
			'view' => 'cadastrar' );
		$this->load->view('Administrador', $dados);
*/

		redirect('administrador/status/cadastrar');

	}
	}