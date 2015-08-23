<?php 

//Pega o seguimento 4 da url
$idCor = $this->uri->segment(4);

if($idCor == null) redirect('administrador/cor');

$cor = $this->corModel->getById($idCor)->row();

if($this->session->flashdata('edicaook')):
?>
<div style="position: absolute; top: 128px;">
    <script>
        setTimeout(function(){
            $('#corSucessoEditar').fadeOut(3000);
        }, 4000);
    </script>
    <div id="corSucessoEditar" class="alert alert-success fade in" style="width: 1038px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $this->session->flashdata('edicaook'); ?>
    </div>
</div>
<?php endif; ?>

		<br><br><br>
	 <div class="container posicaopainel">
	 	<div class="panel panel-default">
        		<div class="panel-heading">
        			<h3><span class="glyphicon glyphicon-thumbs-up"></span> Gerenciar Cliente</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form" method="post" action="<?php echo base_url("cor/editar")?>">
        				  	<label for="codigoCliente" class="sr-only">Código</label>
        				  	<input type="text" id="idCor" name="idCor" value="<?php echo $cor->idCor; ?>" class="form-control codigo" readonly="readonly"> 
        		
        				   	<label for="nome">Cor:</label>
        				   	<div class="input-group textos">
								<input type="text" id="cor" name="cor" value= "<?php echo $cor->cor; ?>" class="form-control" placeholder="Nome Cor" required autofocus >
							</div>
                            <label for="nome">Cor:</label>
                            <div class="input-group textos">
                                <?php 
									echo form_dropdown('flagAtivo', array('0' => 'Inativo', '1' => 'Ativo'), $cor->flagAtivo);
 								?>
                            </div>
                            <br>
        				   <button  type="submit" class="btn btn-lg btn-primary" >Alterar</button>
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

                        </form>
        				<p> </p>
        				<p> </p>
        				<div class="table-responsive tabelas">
        				<table class="table table-bordered table-hover" id="tabela-cor">
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
									 <td><a class="glyphicon glyphicon-pencil btn" href="<?php echo base_url('cor/editar/'); echo "/". $row->idCor;?>"></a> &nbsp;&nbsp;
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
	 	</div>
	 </div>
	</body>
</html>