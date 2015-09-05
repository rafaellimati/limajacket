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
		'view'  =>'cor',
		'cores'     => $this->corModel->getAllCor()->result(),
		);
	
		$this->load->view('admin', $dados);
	}


	public function cadastrar(){

		$Cor = elements(array('cor'), $this->input->post());

		$this->form_validation->set_rules('cor', 'Cor', 'trim|required|max_length[45]|ucwords|is_unique[TbCor.cor]');

		$this->form_validation->set_message('is_unique', "A cor ". $Cor['cor'] ." já existe.");


		if($this->form_validation->run()){


			$dados = elements(array('cor','flagAtivo'), $this->input->post());

			$dados['flagAtivo'] = 1;

			$this->corModel->insertCor($dados);
		}else{
			$this->session->set_flashdata('erro', 'Cor já existe!');
		}

		$dados = array(
			'pasta' => 'Cor',
			'view' => 'cor',
			'cores'     => $this->corModel->getAllCor()->result(),);
		$this->load->view('Admin', $dados);


	}

		public function editar(){

		$this->form_validation->set_rules('cor', 'Cor', 'trim|required|max_length[45]|strtolower|ucwords');
		$this->form_validation->set_rules('idCor', 'idCor', 'required');

		if($this->form_validation->run()){

			$dados = elements(array('cor','flagAtivo'), $this->input->post());

			$this->corModel->updateCor($dados, array('idCor' => $this->input->post('idCor')));
		
		}else{
			$this->session->set_flashdata('erro', 'Cor já existe!');
		}

		$dados = array(
			'pasta' => 'Cor',
			'view' => 'editar',
			'cores'     => $this->corModel->getAllCor()->result(),);
		$this->load->view('Admin', $dados);

	}
}