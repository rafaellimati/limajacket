<?php 
/* Faz a união dos arquivos que estão separados */
/* 
	Verifica se a sessão existe 
	Se existir mostra a indexx com seu conteudo e as outras view
	Se não redireciona para a tela de login
*/
if($this->session->userdata('is_logged_in') && $this->session->userdata('nivelAcesso') == 2){

	//Inclue o arquivo de cabeçalho
	$this->load->view('adm/header');

	//Inclue o arquivo de corpo
	$this->load->view('adm/body');

	//Inclue o arquivo que for chamado pela controladora
	if($pasta != '') $this->load->view($pasta .'/'. $view);

	//Inclue o arquivo de rodapé
	$this->load->view('adm/footer');

}else{
	redirect('administrador');
}
?>



