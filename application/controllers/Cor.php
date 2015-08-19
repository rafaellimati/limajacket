<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cor extends CI_Controller {

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
		$this->load->model('corModel');
	}


	public function index()
	{
		
		$dados = array(
		'pasta' =>'Cor',
		'view'  =>'cor');
	
		//$this->load->view('administrador', $dados);
		redirect('administrador/cor/cadastrar');
	}


	public function cadastrar(){

		$Cor = elements(array('cor'), $this->input->post());
		//$email = elements(array('email'), $this->input->post());
		
		//Faz as devidas validações [remove espaços,
		// 							verifica se foi preenchido,
		//							se é menor que 45 caracteres,
		//							Capitaliza a palavra
		//						 	e se já existe no banco de dados]
		$this->form_validation->set_rules('cor', 'Cor', 'trim|required|max_length[45]|ucwords|is_unique[TbCor.cor]');
		//Seta uma mensagem se já existir no banco.
		$this->form_validation->set_message('is_unique', "O cor ". $Cor['cor'] ." já existe.");

		//Verifica se o formmulário é válido
		if($this->form_validation->run()){

			//Pega os campos e recebe os valores do post
			$dados = elements(array('cor','flagAtivo'), $this->input->post());

			//setando flagAtivo para True
			$dados['flagAtivo'] = 1;

			$this->corModel->insertCor($dados);
		}else{
			$this->session->set_flashdata('erro', 'Cor já existe!');
		}

/*		$dados = array(
			'pasta' => 'usuario',
			'view' => 'cadastrar' );
		$this->load->view('Administrador', $dados);
*/

		redirect('administrador/cor/cadastrar');

	}

		public function editar(){

		$this->form_validation->set_rules('cor', 'Cor', 'trim|required|max_length[45]|strtolower|ucwords');
		$this->form_validation->set_rules('idCor', 'idCor', 'required');

		if($this->form_validation->run()){
			//Pega os valores do formulário
			$dados = elements(array('cor','flagAtivo'), $this->input->post());
			//Envia um update pro banco passando o idMarca do formulário
			//$dados['flagAtivo'] = 1;
			//setando flagAtivo para TRUE;
			$this->corModel->updateCor($dados, array('idCor' => $this->input->post('idCor')));
		
		}else{
			$this->session->set_flashdata('erro', 'Cor já existe!');
		}


		redirect('administrador/cor/editar');

	}
}