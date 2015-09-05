<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Categoria extends CI_Controller {

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
		$this->load->model('CategoriaModel');
	}


	public function index()
	{
		
		$dados = array(
		'pasta' =>'Categoria',
		'view'  =>'categoria',
	    'categoria'  =>$this->CategoriaModel->getAllCategoria()->result(),
		'Categorias'  => $this->CategoriaModel->getAllCategoria()->result(),
		);
	
		$this->load->view('admin', $dados);
	}


	public function cadastrar(){

		$Categoria = elements(array('categoria'), $this->input->post());

		$this->form_validation->set_rules('categoria', 'Categoria', 'trim|required|max_length[45]|ucwords|is_unique[TbCategoria.categoria]');

		$this->form_validation->set_message('is_unique', "A descrição da". $Categoria['categoria'] ." já existe.");


		if($this->form_validation->run()){


			$dados = elements(array('categoria'), $this->input->post());


			$dados['flagAtivo'] = 1;

			$this->CategoriaModel->insertCategoria($dados);
		}else{
			$this->session->set_flashdata('erro', 'Categoria já existe!');
		}

		$dados = array(
			'pasta' => 'Categoria',
			'view' => 'categoria',
			'Categorias'  => $this->CategoriaModel->getAllCategoria()->result(),
			);
		$this->load->view('Admin', $dados);



	}

		public function editar(){

				$this->form_validation->set_rules('categoria', 'Categoria', 'trim|required|max_length[45]|strtolower|ucwords');
				$this->form_validation->set_rules('idCategoria', 'idCategoria', 'required');

					if($this->form_validation->run()){

							$dados = elements(array('categoria','flagAtivo'), $this->input->post());

							$this->CategoriaModel->updateCategoria($dados, array('idCategoria' => $this->input->post('idCategoria')));
		
				}else{
						$this->session->set_flashdata('erro', 'Categoria já existe!');
				}



				$dados = array(
					'pasta' => 'Categoria',
					'view' => 'editar',
					'Categorias' => $this->CategoriaModel->getAllCategoria()->result()
			 		);
				$this->load->view('admin', $dados);

			}
	}