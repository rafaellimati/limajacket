<div class="container posicaopainel">
	 	<div class="panel panel-default">
        		<div class="panel-heading">
        			<h3><span class="glyphicon glyphicon-thumbs-up"></span> Gerenciar Admin</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form" method="post" action="<?php echo base_url('usuario/cadastrar') ?>">
        				  	<label for="codigoCliente" class="sr-only">Código</label>
        				  	<!--<input type="text" id="idCliente" name="idCliente" value="" class="form-control codigo" readonly="readonly"> -->
        		
        				   	<label for="login">Login:</label>
        				   	<div class="input-group textos">
								<input type="text" id="login" name="login"  value="" class="form-control" placeholder="Login" required autofocus  style="width: 400px;">
								<span class="glyphicon glyphicon-search input-group-addon btn" onclick="fBusca()"></span>
							</div><br>
        				   <label  for="Senha" >Senha:</label>
							<input type="Password" id="senha" name="senha" class="form-control" style="width: 400px; placeholder="Senha" required >
							<label for="Senha">Repita Senha:</label>
							<input type="Password" id="senha" name="senha" class="form-control" style="width: 400px"; placeholder="Senha">
        				   </div>
        				   <br>
        				   <button type="submit" class="btn btn-lg btn-primary" >Cadastrar</button>
        				   <!--<button onclick="document.getElementById('op').value='update';" type="submit" class="btn btn-lg btn-primary" >Alterar</button>-->
        				   <button id="btnlimpar" type="submit" class="btn btn-lg btn-warning">Limpar</button>
        				</form>
        				<p> </p>
        				<p> </p>
        				
        				<div class="table-responsive tabelas">
        				<table class="table table-bordered table-hover">
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
	 	</div>
	 </div>