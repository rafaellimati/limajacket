<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Principal extends CI_Controller {


	public function index()
	{
		$dados = array(
		'pasta' => 'admin',
		'view' => 'inicio'
		);
		
		$this->load->view('admin', $dados);

		
	}
	
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */