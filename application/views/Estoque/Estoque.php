		<div class="container posicaopainel" style:"margin-top:100px;">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3><span class="glyphicon glyphicon-thumbs-up"> </span>  Pesquisar Estoque</h3>
					
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
					  <p></p>
					  <label for="form-group textos">Jaqueta (comobox):</label><br>
					  <div class="input-group money">
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
        				<table class="table table-bordered table-hover dataTables">
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
        					<?php 
        						foreach ($estoque as $produto):
        					?>
								<tr>
									<td></td>
									<td><?php echo $produto->quantidade;?></a></td>
									<td><?php echo $produto->cor;?></td>
									<td><?php echo $produto->tamanho;?></td>
									<td><?php echo $produto->jaqueta;?></td>
								</tr>
						    <?php 
                                endforeach;
                            ?>
        				</table>
				<p></p>
				<p></p>
				
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
	</body>
</html>