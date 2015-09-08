<!--<form action="<?php echo base_url("ClienteController/Cadastrar"); ?>" method="post">-->
	<section id="cart_items">
		<div class="container">
		<br><br><br>
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-3">
						<div class="shopper-info">
							<p>Cadastre seu Login</p>
							<form action="<?php echo base_url("Cliente/Cadastrar"); ?>" method="post">
								<input type="text" name="login" id="login" placeholder="Login">
								<input type="password" name="senha" id="senha" placeholder="Senha">
								<input type="password" name="confirmaSenha" id="confirmaSenha" placeholder="Confirme Senha">
				
							<p>Dados pessoais</p>
						
								
									<input type="text" name="nome" id="nome" placeholder="Nome Completo">
									<input type="text" name="email" id="email" placeholder="Email*">
									<input type="text" name="cpf" id="cpf" placeholder="CPF">
									<input type="text" name="dataNascimento" id="dataNascimento" placeholder="Data Nascimento">
									<input type="text" name="telefone" id="telefone" placeholder="Telefone">
									<input type="text" name="logradouro" id="logradouro" placeholder="Logradouro">
									<input type="text" name="bairro" id="bairro" placeholder="Bairro">
									<input type="text" name="numero" id="numero" placeholder="Numero">
									<input type="text" name="cidade" id="cidade" placeholder="Cidade">
									<input type="text" name="cep" id="cep" placeholder="CEP">
									
							
					
							<div class="form-two">
									<select name="idEstado">
										<?php 
							 			foreach ($Estado as $key){
							 				echo "<option value=\"$key->idEstado\">$key->estado</option>";
							 			}
							 			?>
									</select>
									<br>
									<br>
									<select name="idTipoTelefone">
										<?php 
							 			foreach ($TipoTelefone as $key){
							 				echo "<option value=\"$key->idTipoTelefone\">$key->tipoTelefone</option>";
							 			}
							 			?>
									</select>
									<br><br>
									<select name="idSexo">
									   <?php 
        				   				foreach ($Sexo as $key) {
								   			echo "<option value=\"$key->idSexo\">$key->sexo</option>";
							   			}
        				   				?>
									</select>
									<br><br>
									<select name="idDdd">
										<?php  
							 			foreach ($Ddd as $key){
							 				echo "<option value=\"$key->idDdd\">$key->ddd</option>";
							 			}
							 			?>
									</select>
									<br>
									<br>
									<button type="submit" class="btn btn-submit" >Cadastrar</button><h1></h1>
									<button id="btnlimpar" type="reset" class="btn btn-reset">Limpar</button>
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
  	
  </form>