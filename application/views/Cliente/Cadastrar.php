		<div class="container posicaopainel">
			<div class="panel panel-success">
				<div class="panel-heading">
					<h3><span class="glyphicon glyphicon-user"></span>  Dados Pessoais</h3>
				</div>
				<div class="panel-body">
					<div class="container">
						<form class="form" role="form" method="post" action="clienteModel.php">
							 <div class="input-group nome">
							 	<label for="nome" >Nome:</label>
							 	<input type="text" id="nome" name="nome"  class="form-control" required autofocus placeholder="Nome">
							 </div>
							 <h1></h1>
							 <div class="input-group sexo">
							 	<label class="sexo">Sexo:</label><br>
							 	<select id="sexo" name="sexo">
							 		<?php 
							 			$sql="select idsexo, sexo from tbsexo where idsexo in(1,2,3)";
										$query=mysql_query($sql);
										while($res=mysql_fetch_array($query)){
							 		?>
							 		<option value=<?= $res["idsexo"] ?>><?= $res["sexo"] ?></option>
							 		<?php
								 			}
								 		?>
							 	</select>
							 </div>
							 <h1></h1>
							 <div class="input-group ddd">
							 	<label for="ddd">DDD: </label><br>
							 	<select name="ddd">
							 		<option value="1"> 61 </option>
							 		<option value="2"> 62 </option>
							 	</select>
							 </div>
							 <div class="input-group telefone">
							 	<label for="telefone">Telefone:</label>							 	
								<input type="tel" id="telefone" name="telefone" class="form-control" required placeholder="Telefone">
							 </div>
							 <h1></h1>
							 <div class="input-group email">
							 	<label for="email">Email:</label>
							 	<input type="email" id="email" name="email" class="form-control" required placeholder="Email">
							 </div>
							 <h1></h1>
							 <div class="input-group rua">
							 	<label for"rua">Logradouro:</label>
							 	<input type="text" id="rua" name="rua" class="form-control" required placeholder="Logradouro">
							 </div>
							 <h1></h1>
							 <div class="input-group numero">
							 	<label for="numero">Número:</label>
							 	<input type="text" id="numero" name="numero" class="form-control" required placeholder="Número">
							 </div>
							 <h1></h1>
							 <div class="input-group bairro">
							 	<label for="bairro">Bairro:</label>
							 	<input type="text" id="bairro" name="bairro" class="form-control" required placeholder="Bairro">
							 </div>
							 <h1></h1>
							 <div class="input-group cep">
							 	<label for="cep">CEP:</label>
							 	<input type="text" id="cep" name="cep" class="form-control" required placeholder="CEP">
							 </div>
							 <h1></h1>
							 <div class="input-group municipio">
							 	<label for="municipio">Município:</label>
							 	<input type="text" id="municipio" name="municipio" class="form-control" required placeholder="Município">
							 </div>
							 <h1></h1>
							 <div class="input-group estado">
							 	<label for="estado">Estado:</label><br>
							 	<select name="estado">
							 		<option value="1">Distrito Federal</option>
							 	</select>
							 </div>
							 <h1></h1>
							 <div class="input-group login">
							 	<label for="login">Login:</label>
							 	<input type="text" id="login" name="login" class="form-control" required placeholder="Apelido">
							 </div>
							 <h1></h1>
							 <div class="input-group senha">
							 	<label for="senha">Senha:</label>
							 	<input type="password" id="senha" name="senha" class="form-control" required placeholder="Senha">
							 </div>
							 <h1></h1>
							 <div class="input-group confirmaSenha">
							 	<label for="confirmaSenha">Repita a Senha:</label>
							 	<input type="password" id="confirmaSenha" name="confirmaSenha" class="form-control" required placeholder="Senha">
							 </div>
							 <br>
							 <br>
							 <br>
							 <br>
							 <button type="submit" onclick="document.getElementById('op').value='insert';"id="btnCadastrar" class="btn btn-lg btn-success">Cadastrar</button>
							 <button type="reset" class="btn btn-lg btn-warning" id="btnLimpar">Limpar</button>
						</form>
			
	</body>
</html>
