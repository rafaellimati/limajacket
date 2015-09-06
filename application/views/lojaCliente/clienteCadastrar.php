<?php 

//Pega o seguimento 4 da url
$idEndereco = $this->uri->segment(3);

//if($idCidade == null) redirect('cliente/cidade');

$Endereco = $this->ClienteModel->getMaxEndereco($idEndereco)->row();

if($this->session->flashdata('edicaook')):
?>
<div style="position: absolute; top: 128px;">
    <script>
        setTimeout(function(){
            $('#enderecoSucessoEditar').fadeOut(3000);
        }, 4000);
    </script>
    <div id="enderecoSucessoEditar" class="alert alert-success fade in" style="width: 1038px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $this->session->flashdata('edicaook'); ?>
    </div>
</div>
<?php endif; ?>

<?php 
$idLogin = $this->uri->segment(3);

//if($idCidade == null) redirect('cliente/cidade');

$Login = $this->ClienteModel->getMaxLogin($idLogin)->row();

if($this->session->flashdata('edicaook')):
?>
<div style="position: absolute; top: 128px;">
    <script>
        setTimeout(function(){
            $('#cadastrarSucessoEditar').fadeOut(3000);
        }, 4000);
    </script>
    <div id="cadastrarSucessoEditar" class="alert alert-success fade in" style="width: 1038px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $this->session->flashdata('edicaook'); ?>
    </div>
</div>
<?php endif; ?>

<?php 

$idTelefone = $this->uri->segment(3);

//if($idCidade == null) redirect('cliente/cidade');

$Telefone = $this->ClienteModel->getMaxTelefone($idTelefone)->row();

if($this->session->flashdata('edicaook')):
?>
<div style="position: absolute; top: 128px;">
    <script>
        setTimeout(function(){
            $('#cadastrarSucessoEditar').fadeOut(3000);
        }, 4000);
    </script>
    <div id="cadastrarSucessoEditar" class="alert alert-success fade in" style="width: 1038px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $this->session->flashdata('edicaook'); ?>
    </div>
</div>
<?php endif; ?>

	<section id="cart_items">
		<div class="container">
		<br><br><br>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Dados pessoais</p>
							<div class="form-two">
								<form action = "<?php echo base_url("cliente/cadastrar"); ?>" method= "post">
									<input type="text"  id="nome" name="nome" placeholder="Nome Completo*">
									<input type="text"  id="cpf" name="cpf" placeholder="CPF*">
									<input type="text"  id="email" name="email" placeholder="Email*">
									<input type="text"  id="dataNascimento" name="dataNascimento" placeholder="Data Nascimento*">
									<input type="text"  id="enderecoPost" readonly="readonly"  value= "<?php echo $Endereco-> idEndereco; ?>"  name="enderecoPost" placeholder="Endereço">
									<input type="text"  id="telefonePost" readonly="readonly"  name="telefonePost" value= "<?php echo $Telefone-> idTelefone; ?>"   placeholder="Telefone">
									<input type="text"  id="loginPost" readonly="readonly" name="loginPost" value= "<?php echo $Login-> idLogin; ?>"   placeholder="idLogin">
									
							
									<select name="idSexo">
        				   			<?php 
        				   			foreach ($sexo as $key) {
								   			echo "<option value=\"$key->idSexo\">$key->sexo</option>";
							   				}
        				   	
        				   			?>
        				   			</select>
									<button type="submit" class="btn btn-justified btn-primary" > Cadastrar</button>
									<a class="btn btn-primary" href="">Limpar</a>
								</form>
							</div>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</section> <!--/#cart_items-->
  <!--Footer--> 
  <div id="footer">
    <p class="left"> <a href="#">Inicio</a> <span>|</span> <a href="#">Contato</a> <span>|</span> <a href="#">Minha Conta</a> <span>|</span> <a href="#">Galeria</a> <span>|</span> <a href="#"> Trabalhe Conosco </a> </p>
    <p class="right"> &copy; 2015 LimaJacket. Ltda </p>
  </div>
  </div>
  <!-- End Footer -->
  		<link href="<?php echo base_url("static/css/bootstrap.minn.css"); ?>"  rel="stylesheet">
		<link href="<?php echo base_url("static/css/font-awesome.min.css"); ?>" rel="stylesheet">
		<link href="<?php echo base_url("static/css/prettyPhoto.css"); ?>" rel="stylesheet">
		<link href="<?php echo base_url("static/css/price-range.css"); ?>" rel="stylesheet">
		<link href="<?php echo base_url("static/css/animate.css"); ?>" rel="stylesheet">
		<link href="<?php echo base_url("static/css/main.css"); ?>" rel="stylesheet">
		<link href="<?php echo base_url("static/css/responsive.css"); ?>" rel="stylesheet">
		<script src="<?php echo base_url("static/js/jquery.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/price-range.js"); ?>"></script>
    	<script src="<?php echo base_url("static/js/jquery.scrollUp.min.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/bootstrap.min.js"); ?>"></script>
    	<script src="<?php echo base_url("static/js/jquery.prettyPhoto.js"); ?>"></script>
    	<script src="<?php echo base_url("static/js/main.js"); ?>"></script>
    	<script src="<?php echo base_url("static/js/jquery.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/price-range.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/jquery.scrollUp.min.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/bootstrap.minn.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/jquery.prettyPhoto.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/main.js"); ?>"></script>
  
  <!--</form>-->