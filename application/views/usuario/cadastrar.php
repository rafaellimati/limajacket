<div class="container posicaopainel">
	 	<div class="panel panel-default">
        		<div class="panel-heading">
        			<h3><span class="glyphicon glyphicon-thumbs-up"></span> Gerenciar Admin</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form" method="post" action="<?php echo base_url('admin/usuario/cadastrar') ?>">
        				  	<label for="codigoCliente" class="sr-only">Código</label>
        				  	<input type="text" id="idLogin" name="idLogin" value="" class="form-control codigo" readonly="readonly">
        		
        				   	<label for="login">Login:</label>
        				   	<div class="input-group textos">
								<input type="text" id="login" name="login"  value="" class="form-control" placeholder="Login" required autofocus  style="width: 400px;">
							</div><br>
        				   <label  for="Senha" >Senha:</label>
							<input type="Password" id="senha" name="senha" class="form-control" style="width: 400px; placeholder="Senha">
							<!--<label for="Senha" > Repita Senha: </label>
							<input type="Password" id="repitasenha" name="repitasenha" class="form-control" style="width: 400px"; placeholder="Senha">-->
        				   </div>
        				   <br><br><br>
        				   <button type="submit" class="btn btn-lg btn-primary" >Cadastrar</button>
        				   <!--<button onclick="document.getElementById('op').value='update';" type="submit" class="btn btn-lg btn-primary" >Alterar</button>-->
        				   <button id="btnlimpar" type="submit" class="btn btn-lg btn-warning">Limpar</button>
        				</form>
        				<p> </p>
        				<p> </p>
        				
        				<div class="table-responsive tabelas">
        				<table class="table table-bordered table-hover dataTables">
        					<thead>
        						<tr>
        							<th># </th>
        							<th>Login</th>
        						</tr>
        					</thead>
        					 <tbody>
							<?php 
                                foreach($login as $row):
                            ?>
								<tr>
									<td><?php echo $row->idLogin;?></td>
									<td><?php echo $row->login;?></td>
								</tr>
								<?php 
                                endforeach;
                             ?>
                            </tbody>
        				</table>
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
	 	</div>
	 </div>
	 