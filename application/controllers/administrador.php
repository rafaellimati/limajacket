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

	public function __construct(){
		parent::__construct();
		$this->load->model('UsuarioModel', 'LoginModel');
		

		//Carrega as funções da model marca
		$this->load->model('MarcaModel');
		$this->load->model('JaquetaModel');
	}


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
		public function Estoque()
	{
		$dados = array(
		'pasta' => 'Estoque',
		'view'  => 'Estoque');
		$this->load->view('administrador', $dados);
	}
	public function Marca()
	{
		$View = $this->uri->segment(3);
		if($View != "editar"){
			$View = "Marca";
		}
		$dados = array(
		'pasta' => 'Marca',
		'view' =>  $View, //'Marca',
		'marcas' => $this->MarcaModel->getAllMarca()->result()
		);
		$this->load->view('administrador', $dados);
	}
	public function Jaqueta()
	{
		$dados = array(
		'pasta' => 'cadastrarJaqueta',
		'view'  => 'Jaqueta',
		'marca' => $this->MarcaModel->getAllActive()->result(),
		'jaqueta' => $this->JaquetaModel->getAllJaqueta()->result(),
		);
		$this->load->view('administrador',$dados);
	}



	public function login(){
		$this->form_validation->set_rules('login','Login', 'trim|required|max_length[20]');
		$this->form_validation->set_rules('senha', 'Senha', 'trim|required|strtolower');

				//Verifica se os campo foi preenchido corretamente e retorna true para a validação
		if($this->form_validation->run()){

			//Pega os valores que esta no post e transforma em array
			$dados = elements(array('login', 'senha'), $this->input->post());

			//Verifica se os dados estão validos enviando os valores para a model
			if($this->LoginModel->doValidate($dados)){

				//Retorna todas as informações do usuario
				$dados = $this->LoginModel->getUsuario($dados);
				
                //Dados de sessão do usuario
                $session = array(
                        'id' 		   => $dados[0]['idLogin'],
                        'nivelAcesso'    => $dados[0]['nivelAcesso'],
                        'login' 	   => $dados[0]['login'],
                        'is_logged_in' => true
                );

                //Enviar os dados para a view
                $this->session->set_userdata($session);

                //Redireciona para a pagina principal
                redirect('administrador/usuario');
                                
                                
            }else{
                    //Redireciona para a tela de login				
                    $this->session->set_flashdata('loginInvalido', 'Usuário ou Senha invalidos.');
                    redirect('administrador');
            }
		}else{
			//Redireciona para a tela de login			
			$this->session->set_flashdata('loginVazio', 'Campo(s) obrigatório(s) não preenchido(s).');
			redirect('administrador');
		}
	}


	//Método responsavel por fazer o logout do sistema
	public function logout(){

		//Verifica se a sessão existi 
		if($this->session->userdata('is_logged_in')){
            //Destroy a session do usuario
            $session = array(
                'id' 		   => '',
                'nivelAcesso'    => '',
                'login' 	   => '',
                'is_logged_in' => false
            );

            $this->session->unset_userdata($session);
            $this->session->sess_destroy();
            //Redireciona para a url padrão "raiz"
            redirect(base_url('administrador'));
		}
	}		
}


/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */