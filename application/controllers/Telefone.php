<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Telefone extends CI_Controller {

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
		'view' => 'clienteTelefone',
		'DDD' => $this->ClienteModel->getAllDDD()->result(),
		'TipoTelefone' => $this->ClienteModel->getAllTipoTelefone()->result(),
		);
	
		$this->load->view('Principal', $dados);
	}
	
		
		public function Cadastrar(){

		$telefone = elements(array('telefone','idDdd','idTipoTelefne'), $this->input->post());

		$this->form_validation->set_rules('telefone', 'Telefone', 'trim|required|max_length[45]|ucwords|is_unique[TbCidade.cidade]');
		$this->form_validation->set_message('is_unique', "O Telefone ". $telefone['telefone'] ." já existe.");

		//Verifica se o formmulário é válido
		if($this->form_validation->run()){

			//Pega os campos e recebe os valores do post
			$dados = elements(array('telefone','idDdd','idTipoTelefone'), $this->input->post());

			//setando flagAtivo para True
			//$dados['flagAtivo'] = 1;

			$this->ClienteModel->insertTelefone($dados);
		}else{
			$this->session->set_flashdata('erro', 'Telefone já existe!');
		}

		/*$dados = array(
			'pasta' => 'lojaCliente',
			'view' => 'clienteTelefone',
			'DDD' => $this->ClienteModel->getAllDDD()->result(),
			'TipoTelefone' => $this->ClienteModel->getAllTipoTelefone()->result(),
			 );
		$this->load->view('Principal', $dados);*/
		
		}
	}