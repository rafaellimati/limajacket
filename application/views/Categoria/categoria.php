	 <div class="container posicaopainel">
	 	<div class="panel panel-default">
        		<div class="panel-heading">
        			<h3><span class="glyphicon glyphicon-thumbs-up"></span> Gerenciar Categoria</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form" method="post" action="<?php echo base_url("categoria/cadastrar")?>">
        				  	<label for="codigoCliente" class="sr-only">Código</label>
        				  	<input type="text" id="idCategoria" name="idCategoria" value="" class="form-control codigo" readonly="readonly"> 
        		
        				   	<label for="nome">Categoria:</label>
        				   	<div class="input-group textos">
								<input type="text" id="categoria" name="categoria" value= "" class="form-control" placeholder="Digite a Categoria" required autofocus >
									<span class="glyphicon glyphicon-search input-group-addon btn" onclick="fBusca()"></span>
							</div>
                            <br>
        				   <button  type="submit" class="btn btn-lg btn-primary" >Cadastrar</button>
        				   <!-- <button  type="submit" class="btn btn-lg btn-primary" >Alterar</button> -->
        				   <button id="btnlimpar" type="submit" class="btn btn-lg btn-warning">Limpar</button>
        				
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
        				<table class="table table-bordered table-hover" id="tabela-categoria">
        					<thead>
        						<tr>
        							<th># </th>
                                    <th>Categoria</th>
        							<th></th>
        						</tr>
        					</thead>
        					 <tbody>
                            <?php 
                                foreach($Categoria as $row):
                            ?>
								<tr>
									<td><?php echo $row->idCategoria;?></td>
									<td><?php echo $row->categoria;?></td>
									 <!--h<td><a class="glyphicon glyphicon-pencil btn" ref="<?php echo base_url('administrador/cor/editar/'); echo "/". $row->idCor;?>"</a> &nbsp;&nbsp;
                                         <a class="glyphicon glyphicon-remove btn red" href="#"></a> -->
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
</html>