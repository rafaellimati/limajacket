		<div class="container">
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-10" style="margin-left:70px;">
						<div class="shopper-info">
							<form method="post" action"<?php echo base_url("Cliente/Cadastrar"); ?>">
							<?php echo form_open('Cliente/cadastrar'); 
                            echo validation_errors('<p>', '</p>');
                            if($this->session->flashdata('cadastrook')):
                                echo '<p>'.$this->session->flashdata('Cadastrook').'</p>';
                            endif;
                        ?>
                        <br><br>
								<p>Dados Login</p>
								<input type="text" id="login" name="login" <?php form_input(array('login', 'name'=>'login'), set_value('login'));?> placeholder="Login">
								<input type="password" id="senha" name="senha" <?php form_input(array('senha', 'name'=>'senha'), set_value('senha'));?> placeholder="Senha">
								<input type="password" id="senhadois" name="senhadois" <?php form_input(array('senhadois', 'name'=>'senhadois'), set_value('senhadois'));?> placeholder="Confirmar senha">
								<br>
								<p></p>
								<p>Dados Pessoais</p>
								<input type="text" id="nome" name="nome" <?php form_input(array('nome', 'name'=>'nome'), set_value('nome'));?> placeholder="Nome">
								<input type="text" id="cpf" name="cpf" <?php form_input(array('cpf', 'name'=>'cpf'), set_value('cpf'));?> placeholder="CPF">
								<input type="email" id="email" name="email" <?php form_input(array('email', 'name'=>'email'), set_value('email'));?> placeholder="EMAIL">
								<input type="text" id="dataNascimento" name="dataNascimento" <?php form_input(array('dataNascimento', 'name'=>'dataNascimento'), set_value('dataNascimento'));?> placeholder="Data Nascimento">
								<select name="idSexo">
								<option> -- Sexo --</option>
									<?php 
        				   				foreach ($Sexo as $key) {
								   			echo "<option value=\"$key->idSexo\">$key->sexo</option>";
							   			}
        				   				?>
								</select>
								<br>
								<p></p>
								<p>Endereco</p>
								<input type="text" name="logradouro" placeholder="Logradouro">
								<input type="text" name="bairro" placeholder="Bairro*">
								<input type="text" name="numero" placeholder="Numero">
								<input type="text" name="cep" placeholder="CEP *">
								<input type="text" id="cidade" name="cidade" placeholder="Cidade">
								<select id="idEstado" name="idEstado">
								<option> --Estado-- </option>
									<?php 
							 			foreach ($Estado as $key){
							 				echo "<option value=\"$key->idEstado\">$key->estado</option>";
							 			}
							 		?>
								</select>
								<br>
								<p></p>
								<p>Telefone</p>
								<input type="text" id="telefone" id="telefone" <?php form_input(array('telefone', 'name'=>'telefone'), set_value('telefone'));?> placeholder="Telefone">
								<select id="idDdd" name="idDdd">
								<option> --DDD-- </option>
									<?php  
							 			foreach ($Ddd as $key){
							 				echo "<option value=\"$key->idDdd\">$key->ddd</option>";
							 			}
							 			?>
								</select>
								<p></p>
								<p></p>
								<select id="idTipoTelefone" name="idTipoTelefone">
								<option> --Tipo Telefone-- </option>
									<?php 
							 			foreach ($TipoTelefone as $key){
							 				echo "<option value=\"$key->idTipoTelefone\">$key->tipoTelefone</option>";
							 			}
							 			?>
								</select>
								<br>
								<p></p><br>
								<div>
								<button type="submit" class="btn btn-default cart" name="cadastrar">Cadastrar</button>
								</div>
							</form>
							<?php echo form_close(); ?>
						</div>
					</div>				
				</div>
			</div>
		</div>
		
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
