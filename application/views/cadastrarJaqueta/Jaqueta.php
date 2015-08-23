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
        				   <label for="textos">Quantidade:</label>
        				   <div class="input-group textos">
        				   	<input type="text" id="quantidade" name="quantidade" value= "" class="form-control" placeholder="Quantidade" required  >
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
        				   <label for="textos">Categoria:</label>
        				   <div class="input-group textos">
        				   <select name="idCategoria">
        				   	<?php 
        				   	foreach ($Categoria as $key) {
								   echo "<option value=\"$key->idCategoria\">$key->categoria</option>";
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
        				<table class="table table-bordered table-hover dataTables">
        					<thead>
        						<tr>
        							<th># </th>
        							<th>Jaqueta</th>
        							<th>Quantidade</th>
        							<th>Valor</th>
        							<th>Descição</th>
        							<th>Marca</th>
        							<th>Cor</th>
        							<th>Tamanho</th>
        							<th>Categoria</th>
        						</tr>
        					</thead>
        					 <tbody>
        					 	<?php 
                                foreach($jaqueta as $row):
                            ?>
								<tr>
									<td><?php echo $row->idJaqueta;?></a></td>
									<td><?php echo $row->jaqueta;?></td>
									<td><?php echo $row->quantidade;?></td>
									<td><?php echo $row->valor;?></td>
									<td><?php echo $row->detalhes;?></td>
									<td><?php echo $row->marca;?></td>
									<td><?php echo $row->cor;?></td>
									<td><?php echo $row->tamanho;?></td>
									<td><?php echo $row->categoria;?></td>
									
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
     <script type="text/javascript">

    $(document).ready(function() {
        $('.dataTables').DataTable({
                "responsive": true,
                "oLanguage": {
                        "oPaginate": { "sFirst": "<<", "sLast": ">>", "sNext": ">", "sPrevious": "<" },
                        "sEmptyTable": 'Não foram encontrados registros. Tabela Vazia!',
                        "sInfo": "<span>Exibindo de <b>_START_</b> até <b>_END_</b> de <b>_TOTAL_</b> registros encontrados.</span>",
                        "sInfoEmpty": " ",
                        "sInfoFiltered": "",
                        "sInfoThousands": ".",
                        "sLengthMenu": "Exibir _MENU_ registros",
                        "sLoadingRecords": "<center>Carregando...</center>",
                        "sProcessing": '<b>Processando...</b>', //"Processando...",
                        "sSearch": "Pesquisa:",
                        "sZeroRecords": "<center>Não foram encontrados registros.</center>"
                },
                "sPaginationType": "full_numbers",
                "bFilter": true,
                "bProcessing": true,
                "bServerSide": false
        });
    });

</script>