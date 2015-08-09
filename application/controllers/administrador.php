<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class administrador extends CI_Controller {

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
	public function index()
	{
		
		$dados = array(
		'pasta' =>'logar',
		'view'  =>'administrador');
	
		$this->load->view('Principal', $dados);
	}

	public function usuario()
	{
		$dados = array(
			'pasta' => 'usuario',
			'view' => 'cadastrar' );
		$this->load->view('administrador', $dados);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */