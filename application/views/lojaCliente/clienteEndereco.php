<?php 

//Pega o seguimento 4 da url
$idCidade = $this->uri->segment(3);

//if($idCidade == null) redirect('cliente/cidade');

$cidade = $this->ClienteModel->getAllCidade($idCidade)->row();

if($this->session->flashdata('edicaook'));
?>

	
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
								<form role="form" action = "<?php echo base_url("Cliente/endereco"); ?>" method= "post">
									<!--<select name="idCidade">
										<br>	
        				   			<?php 
        				   			foreach ($cidade as $key) {
								   			echo "<option value=\"$key->idCidade\">$key->cidade</option>";
							   				}
        				   	
        				   			?>
        				            </select>-->
        				   			<input type="text" id="idcidade" name="idcidade" value= "<?php echo $cidade-> idCidade; ?>" class="form-control codigo"> 
									<input type="text"  id = "logradouro" name= "logradouro" placeholder="LOGRADOURO">
									<input type="text"  id = "bairro" name= "bairro" placeholder="BAIRRO">
									<input type="text"  id = "numero" name= "numero" placeholder="Numero">
									<input type="text"  id = "cep" name= "cep" placeholder="CEP">
									<button type="submit" class="btn btn-justified btn-primary" >Confirme</button>
									<a class="btn btn-primary" href="">Limpar</a>
							</div>
							</form>
							<!--<div class="form-two">
									<select>
										<option>-- Selecione DDD --</option>
									</select>
									<select>
										<option>--- Selecione Tipoe Telefone ---</option>
										<option>Celular</option>
										<option>Residencial</option>
									</select>
									<select>
									   <option>---Selecione Sexo---</option>
									   <option>Masculino</option>
									   <option>Feminino</option>
									</select>
									<select>
									<option>---Selecione Estado---<option>
									</select>
									<a class="btn btn-primary" href="">Confirme</a>
									<a class="btn btn-primary" href="">Limpar</a>
								
							</div>-->
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

