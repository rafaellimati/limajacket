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
		'pasta' => 'lojaCategoria',
		'view'  => 'categoriaView',
		'categorias' => $this->CategoriaModel->getAllCategoria()->result()
		);
		$this->load->view('Principal', $dados);
	}
	
	
}