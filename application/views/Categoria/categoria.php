	 <div class="container posicaopainel">
	 	<div class="panel panel-primary">
        		<div class="panel-heading">
        			<h3><span class="glyphicon glyphicon-inbox"></span>  Gerenciar Categoria</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form" method="post" action="<?php echo base_url("admin/categoria/cadastrar")?>">
        				  	 <br><div class="input-group" style="width:200px;">
                            <span class="input-group-addon glyphicon glyphicon-asterisk" id="basic-addon1"></span>
        				  	<input type="text" id="idCategoria" name="idCategoria" value="" class="form-control codigo" readonly="readonly"> 
        					</div><br>
        				   	<label for="nome">Categoria:</label>
        				   	<div class="input-group textos">
								<input type="text" id="categoria" name="categoria" value= "" class="form-control" placeholder="Digite a Categoria" required autofocus >
							</div>
                            <br><br>
        				   <button  type="submit" class="btn btn-lg btn-primary" >Cadastrar</button>
        				   <!-- <button  type="submit" class="btn btn-lg btn-primary" >Alterar</button> -->
        				   <button id="btnlimpar" type="submit" class="btn btn-lg btn-warning">Limpar</button><br<br>
        				
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
        				<table class="table table-bordered table-hover dataTables" id="tabela-categoria">
        					<thead>
        						<tr>
        							<th># </th>
                                    <th>Categoria</th>
        							<th></th>
        						</tr>
        					</thead>
        					 <tbody>
                            <?php 
                                foreach($Categorias as $row):
                            ?>
								<tr>
									<td><?php echo $row->idCategoria;?></td>
									<td><?php echo $row->categoria;?></td>
									 <td><a class="glyphicon glyphicon-pencil btn" href="<?php echo base_url('admin/categoria/editar/'); echo "/". $row->idCategoria;?>"</a> &nbsp;&nbsp;
                                         <a class="glyphicon glyphicon-remove btn red" href="#"></a>
                                    </td>
								</tr>
                            <?php 
                                endforeach;
                             ?>
                             </tbody>    
        				</table>
        				</div>
        		    </div>
        		</div>
	 	</div>
	 </div>
	</body>
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
</html>