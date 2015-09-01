<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class marca extends CI_Controller {

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
		$this->load->model('MarcaModel');
	}


	public function index()
	{
		
/*		$dados = array(
		'pasta' =>'usuario',
		'view'  =>'cadastrar');
	
		//$this->load->view('administrador', $dados);
		redirect('administrador/marca/cadastrar');*/

/*		$View = $this->uri->segment(3);
		if($View != "editar"){
			$View = "Marca";
		}*/
		$dados = array(
		'pasta' => 'Marca',
		'view' =>  'Marca',
		'marcas' => $this->MarcaModel->getAllMarca()->result()
		);
		$this->load->view('admin', $dados);
	}


	public function cadastrar(){

		$marca = elements(array('marca'), $this->input->post());
		//$email = elements(array('email'), $this->input->post());
		
		//Faz as devidas validações [remove espaços,
		// 							verifica se foi preenchido,
		//							se é menor que 45 caracteres,
		//							Capitaliza a palavra
		//						 	e se já existe no banco de dados]
		$this->form_validation->set_rules('marca', 'Marca', 'trim|required|max_length[45]|ucwords|is_unique[TbMarca.marca]');
		//Seta uma mensagem se já existir no banco.
		$this->form_validation->set_message('is_unique', "O marca ". $marca['marca'] ." já existe.");

		//Verifica se o formmulário é válido
		if($this->form_validation->run()){

			//Pega os campos e recebe os valores do post
			$dados = elements(array('marca'), $this->input->post());

			//setando flagAtivo para True
			$dados['flagAtivo'] = 1;

			$this->MarcaModel->insertMarca($dados);
		}else{
			$this->session->set_flashdata('erro', 'Marca já existe!');
		}

		$dados = array(
			'pasta' => 'Marca',
			'view' => 'Marca',
			'marcas' => $this->MarcaModel->getAllMarca()->result()
			 );
		$this->load->view('admin', $dados);


	}

	public function editar(){

		$this->form_validation->set_rules('marca', 'Marca', 'trim|required|max_length[45]|strtolower|ucwords');
		$this->form_validation->set_rules('idMarca', 'idMarca', 'required');

		if($this->form_validation->run()){
			//Pega os valores do formulário
			$dados = elements(array('marca','flagAtivo'), $this->input->post());
			//Envia um update pro banco passando o idMarca do formulário
			$this->MarcaModel->updateMarca($dados, array('idMarca' => $this->input->post('idMarca')));
		
		}else{
			$this->session->set_flashdata('erro', 'Marca já existe!');
		}


		$dados = array(
			'pasta' => 'Marca',
			'view' => 'editar',
			'marcas' => $this->MarcaModel->getAllMarca()->result()
			 );
		$this->load->view('admin', $dados);

	}
}




/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */