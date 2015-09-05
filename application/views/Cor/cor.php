	 <div class="container posicaopainel">
	 	<div class="panel panel-default">
        		<div class="panel-heading">
        			<p class="navbar-text navbar-right">Signed in as <a href="#" class="navbar-link">Mark Otto</a></p>
        			<h3><span class="glyphicon glyphicon-thumbs-up"></span> Gerenciar Cores</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form" method="post" action="<?php echo base_url("admin/cor/cadastrar")?>">
        				  	<label for="codigoCliente" class="sr-only">Código</label>
        				  	<input type="text" id="idCor" name="idCor" value="" class="form-control codigo" readonly="readonly"> 
        		
        				   	<label for="nome">Cor:</label>
        				   	<div class="input-group textos">
								<input type="text" id="cor" name="cor" value= "" class="form-control" placeholder="Nome Cor" required autofocus >
							</div>
                            <br>
        				   <button  type="submit" class="btn btn-lg btn-primary" >Cadastrar</button>
        				   <button id="btnlimpar" type="submit" class="btn btn-lg btn-warning">Limpar</button>
        				<?php echo validation_errors(); ?> 
                        <?php if($this->session->flashdata('erro')): ?>
                            <script>
                                setTimeout(function(){
                                    $('#erro').fadeOut(3000);
                                }, 4000);
                            </script>
                            <div id="erro">
                                <font color="#FC5555"><?php echo $this->session->flashdata('erro'); ?></font>
                            </div>
                        <?php endif; ?>
                        <?php if($this->session->flashdata('edicaook')): ?>
                            <script>
                                setTimeout(function(){
                                    $('#edicaook').fadeOut(3000);
                                }, 4000);
                            </script>
                            <div id="edicaook">
                                <font color="#FC5555"><?php echo $this->session->flashdata('edicaook'); ?></font>
                            </div>
                        <?php endif; ?>

                        </form>
        				<p> </p>
        				<p> </p>
        				<div class="table-responsive tabelas">
        				<table class="table table-bordered table-hover dataTables" id="tabela-cor">
        					<thead>
        						<tr>
        							<th># </th>
                                    <th>Cor</th>
        							<th></th>
        						</tr>
        					</thead>
        					 <tbody>
                            <?php 
                                foreach($cores as $row):
                            ?>
								<tr>
									<td><?php echo $row->idCor;?></td>
									<td><?php echo $row->cor;?></td>
									 <td><a class="glyphicon glyphicon-pencil btn" href="<?php echo base_url('admin/cor/editar/'); echo "/". $row->idCor;?>"></a> &nbsp;&nbsp;
                                         <a class="glyphicon glyphicon-remove btn red" href="#"></a>
                                    </td>
								</tr>
                            <?php 
                                endforeach;
                             ?>
                             <?php echo validation_errors(); ?> 
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
	</body>
</html>