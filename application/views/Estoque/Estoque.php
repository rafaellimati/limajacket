		<div class="container posicaopainel" style:"margin-top:100px;">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3><span class="glyphicon glyphicon-thumbs-up"> </span>  Cadastrar Estoque</h3>
				</div>
				   <div class="panel-body" >
					<div class="container"style:"width:260px";>
						<form class="form" role="form" method="post" action="<?php echo base_url("estoque/cadastrar")?>">
							<div class="form-group codigo">
					      <label class="sr-only" for="codigo">Codigo</label>
					      <input type="text"  class="form-control" id="idEstoque" name="idEstoque" placeholder="*" readonly="readonly">
					  </div>
					  <p></p>
					 
					  <div class="form-group textos">
					      <label for="dataEntrega">Quantidade:</label><br>
					      <input type="text" class="form-control"  id="quantidade" name="quantidade" placeholder="Ex: 1,5">
					  </div>
					  <p></p>
					 </form>
					 <form class="form" role="form" method="post" action="<?php echo base_url("estoque/cadastrar")?>">
					  <div class="form-group textos">
					      <label for="dataCadastro">Tamanho:</label><br>
					      <input type="text" class="form-control" id="idTamanho" name="idTamanho" placeholder="Ex: 2,0">
					  </div>
					  <p></p>
					 </form>
					 <form class="form" role="form" method="post" action="<?php echo base_url("estoque/cadastrar")?>">
					  <label for="form-group textos">Cor:</label><br>
					  <div class="input-group money">
					      <input type="text" class="form-control" id="idCor" name="idCor" placeholder="Cor">
					  </div>
					  <p></p>
					 </form>
					 <form class="form" role="form" method="post" action="<?php echo base_url("estoque/cadastrar")?>">
					  <label for="form-group textos">Jaqueta (comobox):</label><br>
					  <div class="input-group money">
					      <!--<input type="text" class="form-control" id="jaqueta" name="jaqueta" placeholder="valorPlaca">-->
					  	<input type="hidden" id="bt" name="bt" value="">
					  </div>
					  <select name="idJaqueta">
					  <?php 
        				   	foreach ($jaqueta as $key) {
								   echo "<option value=\"$key->idJaqueta\">$key->jaqueta</option>";
							   }
        				   	
        				   	?>
        				   </select>
					  <br>
					  <p></p>
					  <button onclick= "document.getElementByid('bt').value='insert';" type="submit" class="btn btn-primary">Cadastrar</button>
					  <button onclick= "document.getElementByid('bt').value='update';" type="submit" class="btn btn-primary">Editar</button>
					  <button type="reset" class="btn btn-primary">Limpar</button>
				</form>
						<?php echo validation_errors(); ?> 
						
						<div class="table-responsive tabelas">
        				<table class="table table-bordered table-hover">
        					<thead>
        						<tr>
        							<th># </th>
        							<th>Quantidade</th>
        							<th>Cor</th>
        							<th>Tamanho</th>
        							<th>Jaqueta</th>
        						</tr>
        					</thead>
        					 <tbody>
        					 	<!--<?php 
                                foreach($estoque as $row):
                            ?>-->
								<tr>
									<td><<?php echo $row->quantidade;?></a></td>
									<td><?php echo $row->idCor;?></td>
									<td><?php echo $row->idTamanho;?></td>
									<td><?php echo $row->idJaqueta;?></td>
								</tr>
						    <!--<?php 
                                endforeach;
                             ?>-->
        				</table>
				<p></p>
				<p></p>
				
			</div>
		</div>
		</div>
		</div>
	</body>
</html>