		<div class="container posicaopainel" style:"margin-top:100px;">
			<div class="panel panel-primary">
				<div class="panel-heading">
					<h3><span class="glyphicon glyphicon-thumbs-up"> </span>  Pesquisar Estoque</h3>
					
				</div>
				   <div class="panel-body" >
					<div class="container"style:"width:260px";>
						<form class="form" role="form" method="post" action="<?php echo base_url("estoque/cadastrar")?>">
						<?php echo validation_errors(); ?> 
						
						<div class="table-responsive tabelas">
							<br> <br>
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
        				</form>
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