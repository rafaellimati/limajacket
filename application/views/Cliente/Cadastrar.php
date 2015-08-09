<div class="container posicaopainel">
	 	<div class="panel panel-default">
        		<div class="panel-heading">
        			<h3><span class="glyphicon glyphicon-thumbs-up"></span> Gerenciar Cliente</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form" method="post" action="gerenciarClienteModel.php">
        				  	<label for="codigoCliente" class="sr-only">Código</label>
        				  	<input type="text" id="idCliente" name="idCliente" value="<?=$idCliente?>" class="form-control codigo" readonly="readonly"> 
        		
        				   	<label for="nome">Nome:</label>
        				   	<div class="input-group textos">
								<input type="text" id="nome" name="nome" value= "<?=$nome?>" class="form-control" placeholder="Nome Cliente" required autofocus >
									<span class="glyphicon glyphicon-search input-group-addon btn" onclick="fBusca()"></span>
							</div>
        				   <label for="telefone">Telefone:</label>
        				   <div class="input-group telefone">
        				   	<span class="glyphicon glyphicon-earphone input-group-addon"> </span>	
        				   	<input type="tel" id="telefone" name="telefone" value= "<?=$telefone?>" class="form-control" placeholder="Telefone" required  >
        				   <input type= "hidden" id="op" name="op" value="">
        				   </div>
        				   <br>
        				   <button onclick="document.getElementById('op').value='insert';" type="submit" class="btn btn-lg btn-primary" >Cadastrar</button>
        				   <button onclick="document.getElementById('op').value='update';" type="submit" class="btn btn-lg btn-primary" >Alterar</button>
        				   <button id="btnlimpar" type="submit" class="btn btn-lg btn-warning">Limpar</button>
        				</form>
        				<p> </p>
        				<p> </p>
        				
        				<div class="table-responsive tabelas">
        				<table class="table table-bordered table-hover">
        					<thead>
        						<tr>
        							<th># </th>
        							<th>Nome</th>
        							<th>Telefone</th>
        						</tr>
        					</thead>
        					 <tbody>
								<tr>
									<td><a href="gerenciarcliente.php?id="></a></td>
									<td></td>
									<td></td>
								</tr>
        				</table>
        				</div>
        		    </div>
        		</div>
	 	</div>
	 </div>