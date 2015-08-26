<?php 
/* Faz a união dos arquivos que estão separados */
/* 
	Verifica se a sessão existe 
	Se existir mostra a indexx com seu conteudo e as outras view
	Se não redireciona para a tela de login
*/
//if($this->session->userdata('is_logged_in')){

	//Inclue o arquivo de cabeçalho
	$this->load->view('loja/header');

	//Inclue o arquivo de corpo
	$this->load->view('loja/body');

	//Inclue o arquivo que for chamado pela controladora
	if($pasta != '') $this->load->view($pasta .'/'. $view);

	//Inclue o arquivo de rodapé
	$this->load->view('loja/footer');

/*}else{
	redirect('login');
}*/
?>



