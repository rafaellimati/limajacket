<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jaqueta extends CI_Controller {
		
		public function __construct(){
		parent::__construct();
		$this->load->model('JaquetaModel');
		$this->load->model('MarcaModel');
		$this->load->model('corModel');
		$this->load->model('TamanhoModel');
		$this->load->model('CategoriaModel');
	}


	public function index()
	{
		
		$dados = array(
		'pasta' =>'cadastrarJaqueta',
		'view'  =>'Jaqueta',
		'jaquetas' => $this->JaquetaModel->getAllJaqueta()->result(),
		'marca' => $this->MarcaModel->getAllActive()->result(),
		'cor'     => $this->corModel->getAllCor()->result(),
		'Tamanho' => $this->TamanhoModel->getAllTamanho()->result(),
		'Categoria'  => $this->CategoriaModel->getAllCategoria()->result(),
		);
	
		$this->load->view('admin', $dados);
	}
	
			public function cadastrar(){
				
			$this->form_validation->set_rules('jaqueta', 'Jaqueta', 'trim|required|max_length[45]');
			
			if($this->form_validation->run()){

				$dados = elements(array('jaqueta','quantidade','valor','descricao','dataCadastro','imagem','flagAtivo','idMarca','idLogin','idTamanho','idCor','idCategoria'), $this->input->post());
				$dados['idLogin'] = $this->session->userdata('id');
				$dados['imagem']  = $this->upload_foto();
				$dados['flagAtivo'] = 1;
	
				$this->JaquetaModel->insertJaqueta($dados);
			}else{
				$this->session->set_flashdata('erro', 'Jaqueta já existe!');
			}

					$dados = array(
						'pasta' => 'cadastrarJaqueta',
						'view' => 'Jaqueta',
						'jaquetas' => $this->JaquetaModel->getAllJaqueta()->result(),
						'marca' => $this->MarcaModel->getAllActive()->result(),
						'cor'     => $this->corModel->getAllCor()->result(),
						'Tamanho' => $this->TamanhoModel->getAllTamanho()->result(),
						'Categoria'  => $this->CategoriaModel->getAllCategoria()->result(),
						 );
					$this->load->view('Admin', $dados);
			
				}

				public function editar(){

					$this->form_validation->set_rules('Jaqueta', 'Jaqueta', 'trim|required|max_length[45]|strtolower|ucwords');
					$this->form_validation->set_rules('idJaqueta', 'idJaqueta', 'required');

						if($this->form_validation->run()){
							
							$dados = elements(array('marca','flagAtivo'), $this->input->post());

							$this->MarcaModel->updateMarca($dados, array('idJaqueta' => $this->input->post('idJaqueta')));
		
					}else{
						$this->session->set_flashdata('erro', 'Jaqueta já existe!');
						}

						
						$dados = array(
						'pasta' => 'cadastrarJaqueta',
						'view' => 'editar',
						'Jaqueta' => $this->JaquetaModel->getAllJaqueta()->result(),
						'Jaquetas' => $this->JaquetaModel->getAllJaqueta()->result(),
						'marca' => $this->MarcaModel->DropDownMarca(),
						'cor'     => $this->corModel->DropDownCor(),
						'Tamanho' => $this->TamanhoModel->DropDownTamanho(),
						'Categoria'  => $this->CategoriaModel->DropDownCategoria(),
						 );
						$this->load->view('admin', $dados);

				}

				function upload_foto(){
						$config['upload_path'] = './produtos';
						$config['allowed_types'] = 'gif|jpg|png';
						$config['max_size']	= '0';
						$config['max_width']  = '0';
						$config['max_height']  = '0';
						$config['encrypt_name'] = true;		
						$this->load->library('upload', $config);
						if ( ! $this->upload->do_upload('imagem')){
							$error = array('error' => $this->upload->display_errors());			
							print_r($error);
							exit();
						}	
						else{
							$data = array('upload_data' => $this->upload->data());
							return $data['upload_data']['file_name'];
						}
	}

	}


       
	
	