		<script src="<?php echo base_url("static/js/jquery-1.10.1.mini.js") ?>" type="text/javascript"></script>
		<script src="<?php echo base_url("static/js/jquery.maskedinput.min.js") ?>" type="text/javascript"></script>
		
		<script type="text/javascript">
		jQuery(document).ready(function() {
            Inicio Mascara Telefone
            jQuery('input[type=tel]').mask("(99) 9999-9999?9").ready(function(event) {
                var target, phone, element;
                target = (event.currentTarget) ? event.currentTarget : event.srcElement;
                phone = target.value.replace(/\D/g, '');
                element = $(target);
                element.unmask();
                if(phone.length > 10) {
                    element.mask("(99) 99999-999?9");
                } else {
                    element.mask("(99) 9999-9999?9");
                }
            });
            Fim Mascara Telefone
            //Inicio Mascara RG
            //jQuery("#rg").mask("99.999.999-*");
            //Fim Mascara CPF
            //Inicio Mascara CPF
            jQuery("#cpf").mask("999.999.999-99");
            //Fim Mascara CPF
        });
        (jQuery);
        </script>
		<div class="container">
			<div class="shopper-informations">
				<div class="row">
					<div class="col-sm-10" style="margin-left:70px;">
						<div class="shopper-info">
							<!--<?php echo form_open('Cliente/cadastrar'); 
                            echo validation_errors('<p>', '</p>');
                            if($this->session->flashdata('cadastrook')):
                                echo '<p>'.$this->session->flashdata('Cadastrook').'</p>';
                            endif;
                        ?>-->
                        <br><br>
                        		<form action="<?php echo base_url("Cliente/Cadastrar"); ?>" method="post">
								<p>Dados Login</p>
								<input type="text" id="login" name="login" placeholder="Login">
								<input type="password" id="senha" name="senha" placeholder="Senha">
								<input type="password" id="confirmaSenha" name="confirmaSenha" placeholder="Confirmar senha">
								<br>
								<p></p>
								<p>Dados Pessoais</p>
								<input type="text" id="nome" name="nome" placeholder="Nome">
								<input type="text" id="cpf" name="cpf" placeholder="CPF">
								<input type="email" id="email" name="email" placeholder="EMAIL">
								<input type="text" id="dataNascimento" name="dataNascimento" placeholder="Data Nascimento">
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
								<input type="tel" id="telefone" id="telefone" placeholder="Telefone">
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
								<button type="submit" class="btn btn-default cart">Cadastrar</button>
								</div>
							</form>
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
		
