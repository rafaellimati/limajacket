<div class="container posicaopainel">
	 	<div class="panel panel-primary">
        		<div class="panel-heading">
        			<h3><span class="glyphicon glyphicon-bookmark"></span></span> Cadastrar Jaquetas</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form"  method="post" enctype="multipart/form-data" action="<?php echo base_url("admin/jaqueta/cadastrar")?>">
        				  	<br><br>
        				  	<label for="idJaqueta" class="sr-only">Código</label>
        				  	<div class="input-group" style="width:200px;">
                                <span class="input-group-addon glyphicon glyphicon-asterisk" id="basic-addon1"></span>
        				  	<input type="text" id="idJaqueta" name="idJaqueta" value="" class="form-control codigo" readonly="readonly"> 
        					</div>
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
        				  <label for="input-group textos">Imagem:</label>
        				   <div class="type">
        				   	<input type="file" id="imagem" name="imagem" value" " class="form-file" placeholder="Imagem" required  >
        				   </div>
        				   <br>
        				    <label for="textos">Marca:</label>
        				   <div class="input-group texts">
                           <span class="input-group-addon glyphicon glyphicon-tag" id="basic-addon1"></span>
        				   <select name="idMarca" class="form-control">
        				   	<option>Selecione</option>
        				   	<?php 
        				   	foreach ($marca as $key) {
								   echo "<option value=\"$key->idMarca\">$key->marca</option>";
							   }
        				   	
        				   	?>
        				   </select>
        				   </div>
        				   <br>
        				   <label for="textos">Cor:</label>
        				   <div class="input-group textos">
        				   <span class="input-group-addon glyphicon glyphicon-tint"></span>
        				   <select name="idCor" class="form-control">
        				   	<option>Selecione</option>
        				   	<?php 
        				   	foreach ($cor as $key) {
								   echo "<option value=\"$key->idCor\">$key->cor</option>";
							   }
        				   	
        				   	?>
        				   </select>
        				   </div>
        				   <br>
        				   <label for="textos">Tamanho:</label>
        				   <div class="input-group textos">
        				   <span class="input-group-addon glyphicon glyphicon-resize-full"></span>
        				   <select name="idTamanho" class="form-control">
        				   	<option>Selecione</option>
        				   	<?php 
        				   	foreach ($Tamanho as $key) {
								   echo "<option value=\"$key->idTamanho\">$key->tamanho</option>";
							   }
        				   	
        				   	?>
        				   </select>
        				   </div>
        				   <br>
        				   <label for="textos">Categoria:</label>
        				   <div class="input-group textos">
        				   	<span class="input-group-addon glyphicon glyphicon-list-alt"></span>
        				   <select name="idCategoria" class="form-control">
        				   	<option>Selecione</option>
        				   	<?php 
        				   	foreach ($Categoria as $key) {
								   echo "<option value=\"$key->idCategoria\">$key->categoria</option>";
							   }
        				   	
        				   	?>
        				   </select>
        				   </div>
        				   <br>
        				   <br>
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
        							<th></th>
        						</tr>
        					</thead>
        					 <tbody>
        					 	<?php 
                                foreach($jaquetas as $row):
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
									<td><a class="glyphicon glyphicon-pencil btn" href="<?php echo base_url('admin/jaqueta/editar/'); echo "/". $row->idJaqueta;?>"></a> &nbsp;&nbsp;
                                         <a class="glyphicon glyphicon-remove btn red" href="#"></a> 
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