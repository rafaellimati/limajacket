<div class="container posicaopainel">
	 	<div class="panel panel-default">
        		<div class="panel-heading">
        			<h3></span> Cadastrar Jaquetas</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form" method="post" action="<?php echo base_url("jaqueta/cadastrar")?>">
        				  	<label for="codigoCliente" class="sr-only">Código</label>
        				  	<input type="text" id="idJaqueta" name="idJaqueta" value="" class="form-control codigo" readonly="readonly"> 
        					<br>
        				   	<label for="nome">Jaqueta:</label>
        				   	<div class="input-group textos">
								<input type="text" id="jaqueta" style="width:260px"; name="jaqueta" value= "" class="form-control" placeholder="Nome Jaqueta" required autofocus >
							</div>
							<br>
        				   <label for="textos">Tecido:</label>
        				   <div class="input-group textos">
        				   	<input type="text" id="tecido" name="tecido" value= "" class="form-control" placeholder="Tecido" required  >
        				   </div>
        				   <br>
        				   <label for="textos">Valor:</label>
        				   <div class="input-group textos">
        				   	<input type="text" id="Valor" name="valor" value= "" class="form-control" placeholder="Valor" required  >
        				   </div>
        				   <br>
        				   <label for="textos">Descrição:</label>
        				   <div class="input-group textos ">
        				   	<input type="text" id="descricao" name="descricao" value= "" class="form-control" placeholder="Descrição" required  >
        				   </div>
        				   <br>
        				    <label for="textos">Marca:</label>
        				   <div class="input-group textos">
        				   <select name="idMarca">
        				   	<?php 
        				   	foreach ($marca as $key) {
								   echo "<option value=\"$key->idMarca\">$key->marca</option>";
							   }
        				   	
        				   	?>
        				   </select>
        				   <br><br>
        				   <label for="textos">Cor:</label>
        				   <div class="input-group textos">
        				   <select name="idCor">
        				   	<?php 
        				   	foreach ($cor as $key) {
								   echo "<option value=\"$key->idCor\">$key->cor</option>";
							   }
        				   	
        				   	?>
        				   </select>
        				   <br>
        				   <br>
        				   <label for="textos">Tamanho:</label>
        				   <div class="input-group textos">
        				   <select name="idTamanho">
        				   	<?php 
        				   	foreach ($Tamanho as $key) {
								   echo "<option value=\"$key->idTamanho\">$key->tamanho</option>";
							   }
        				   	
        				   	?>
        				   </select>
        				   <br>
        				   <br>
        				   <label for="textos">Status:</label>
        				   <div class="input-group textos">
        				   <select name="idStatus">
        				   	<?php 
        				   	foreach ($Descricao as $key) {
								   echo "<option value=\"$key->idStatus\">$key->descricao</option>";
							   }
        				   	
        				   	?>
        				   </select>
        				   <br>
        				   <br>
        				   </div>
        				   <br>
        				   
        				   <button type="submit" class="btn btn-lg btn-primary" >Cadastrar</button>
        				   <!--<button onclick="document.getElementById('op').value='update';" type="submit" class="btn btn-lg btn-primary" >Alterar</button>-->
        				   <button id="btnlimpar" type="reset" class="btn btn-lg btn-warning">Limpar</button>
        				</form>
        				<p><?php echo validation_errors(); ?> </p>
        				<p> </p>
        				
        				<div class="table-responsive tabelas">
        				<table class="table table-bordered table-hover">
        					<thead>
        						<tr>
        							<th># </th>
        							<th>Jaqueta</th>
        							<th>tecido</th>
        							<th>Valor</th>
        							<th>Descição</th>
        							<th>Marca</th>
        							<th>Cor</th>
        							<th>Tamanho</th>
        							<th>Status</th>
        						</tr>
        					</thead>
        					 <tbody>
        					 	<?php 
                                foreach($jaqueta as $row):
                            ?>
								<tr>
									<td><?php echo $row->idJaqueta;?></a></td>
									<td><?php echo $row->jaqueta;?></td>
									<td><?php echo $row->tecido;?></td>
									<td><?php echo $row->valor;?></td>
									<td><?php echo $row->descricao;?></td>
									<td><?php echo $row->idMarca;?></td>
									<td><?php echo $row->idCor;?></td>
									<td><?php echo $row->idTamanho;?></td>
									<td><?php echo $row->descricao;?></td>
									
								</tr>
						     <?php 
                                endforeach;
                             ?>	
        				</table>
        				</div>
        		    </div>
        		</div>
	 	</div>
	 </div>