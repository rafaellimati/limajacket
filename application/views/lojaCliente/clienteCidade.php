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
							<p>2 Passo&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;&nbsp;Cidade e Estado</p>
							<div class="form-one">
								<form action = "<?php echo base_url("cliente/cidade"); ?>" method= "post">
									<input type="text" id="cidade" name="cidade" placeholder="Cidade">
							</div>
							<div class="form-two">
									<select name="idEstado">
        				   			<?php 
        				   			foreach ($Estado as $key) {
								   			echo "<option value=\"$key->idEstado\">$key->estado</option>";
							   				}
        				   	
        				   			?>
        				   			</select>
									<button type="submit" class="btn btn-justified btn-primary" >Cadastrar</button>
									<a class="btn btn-primary" href=""> Limpar</a>
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