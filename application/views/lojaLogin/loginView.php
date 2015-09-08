   	<section id="form">
		<div class="container">
			<div class="row">
				<div class="col-sm-4 col-sm-offset-1">
					<div class="login-form">
						<h2>Login:</h2>
						<form role="form" action = "<?php echo base_url("Login/logar"); ?>" method= "post">
							<input type="text" id="login" name="login" placeholder="Login" />
							<input type="Password" id="senha" name="senha" class="form-control" placeholder="Senha" />
							<span>
								<a href="cliente" class="bul">Cadastre-se aqui</a>
							</span>
							<button type="submit" class="btn btn-justified btn-primary"> ENTRAR</button>
						</form>
					<!--/login form-->	
					</div>
					<?php if($this->session->flashdata('loginInvalido')): ?>
						<script>
							setTimeout(function(){
								$('#loginInvalido').fadeOut(3000);
							}, 4000);
						</script>
						<div id="loginInvalido">
							<font color="#FC5555"><?php echo $this->session->flashdata('loginInvalido'); ?></font>
						</div>
					<?php endif; ?>
					<?php if($this->session->flashdata('loginVazio')): ?>
						<script>
							setTimeout(function(){
								$('#loginVazio').fadeOut(3000);
							}, 4000);
						</script>
						<div id="loginVazio">
							<font color="#FC5555"><?php echo $this->session->flashdata('loginVazio'); ?></font>
						</div>
					<?php endif; ?>
				</div>
			</div>
		</div>
	</section>
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