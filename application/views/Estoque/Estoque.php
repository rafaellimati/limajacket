<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Placas</title>
		<meta name="author" content="Rafael" />
		<!-- Date: 2014-11-20 -->
		<link type="text/css" href="<?php echo base_url ("static/css/bootstrap.css")?>" rel="stylesheet" media="screen">
		<link type="text/css" href="<?php echo base_url ("static/css/Estilos.css")?>" rel="stylesheet" media="screen">
		<!-- Date: 2014-11-20 -->
	</head>

		<div class="container posicaopainel" style:"margin-top:100px;">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3><span class="glyphicon glyphicon-thumbs-up"> </span>  Cadastrar Estoque</h3>
				</div>
				   <div class="panel-body" >
					<div class="container"style:"width:260px";>
						<form class="form" role="form" method="post" action="GerenciarPlacasModel.php">
							<div class="form-group codigo">
					      <label class="sr-only" for="codigo">Codigo</label>
					      <input type="text"  class="form-control" id="idplaca" name="idplaca" placeholder="0504" readonly="readonly">
					  </div>
					  <p></p>
					  <div class="form-group textos">
					      <label for="dataEntrega">Quantidade:</label><br>
					      <input type="text" class="form-control"  id="altura" name="altura" placeholder="Ex: 1,5">
					  </div>
					  <p></p>
					  <div class="form-group textos">
					      <label for="dataCadastro">tamanho:</label><br>
					      <input type="text" class="form-control" id="largura" name="largura" placeholder="Ex: 2,0">
					  </div>
					  <p></p>
					  <label for="dataCadastro">Cor:</label><br>
					  <div class="input-group money">
					      <input type="text" class="form-control" id="custoMaterial" name="custoMaterial" placeholder="Custo Material">
					  </div>
					  <p></p>
					  <label for="dataCadastro">Jaqueta (comobox):</label><br>
					  <div class="input-group money">
					      <input type="text" class="form-control" id="valorPlaca" name="valorPlaca" placeholder="valorPlaca">
					  	<input type="hidden" id="bt" name="bt" value="">
					  </div>
					  
					  <br>
					  <p></p>
					  <button onclick= "document.getElementByid('bt').value='insert';" type="submit" class="btn btn-primary">Cadastrar</button>
					  <button onclick= "document.getElementByid('bt').value='update';" type="submit" class="btn btn-primary">Editar</button>
					  <button type="reset" class="btn btn-primary">Limpar</button>
				</form>

				<p></p>
				<p></p>
				
			</div>
		</div>
		</div>
		</div>
	</body>
</html>