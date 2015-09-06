<?php 

//Pega o seguimento 4 da url
$idCidade = $this->uri->segment(3);

//if($idCidade == null) redirect('cliente/cidade');

$cidade = $this->ClienteModel->getAllCidade($idCidade)->row();

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
	
		<section id="cart_items">
		<div class="container">
		<br><br><br>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
						</div>
					</div>
					<div class="col-sm-5 clearfix">
						<div class="bill-to">
							<p>Dados pessoais</p>
							<div class="form-one">
								<form  action = "<?php echo base_url("cliente/endereco"); ?>" method= "post">
        				   			<input type="text" readonly="readonly" id ="cidade" name ="cidade" value = "<?php echo $cidade-> idCidade; ?>" class="form-control codigo"> 
									<input type="text"  id = "logradouro" name = "logradouro" placeholder="LOGRADOURO">
									<input type="text"  id = "bairro" name= "bairro" placeholder="BAIRRO">
									<input type="text"  id = "numero" name= "numero" placeholder="Numero">
									<input type="text"  id = "cep" name= "cep" placeholder="CEP">
									<button type="submit" class="btn btn-justified btn-primary" >Confirme</button>
									<a class="btn btn-primary" href="">Limpar</a>
							</div>
							</form>

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

