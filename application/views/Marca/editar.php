<?php 

//Pega o seguimento 4 da url
$idMarca = $this->uri->segment(4);

if($idMarca == null) redirect('administrador/marca');

$marca = $this->MarcaModel->getById($idMarca)->row();

if($this->session->flashdata('edicaook')):
?>
<div style="position: absolute; top: 128px;">
    <script>
        setTimeout(function(){
            $('#marcaSucessoEditar').fadeOut(3000);
        }, 4000);
    </script>
    <div id="marcaSucessoEditar" class="alert alert-success fade in" style="width: 1038px;">
        <button type="button" class="close" data-dismiss="alert">&times;</button>
        <?php echo $this->session->flashdata('edicaook'); ?>
    </div>
</div>
<?php endif; ?>
<script type="text/javascript">
		function  fBusca(){
			busca=document.getElementById('nome').value;
			url="gerenciarcliente.php?nomeCliente="+busca;
			window.location=url;
			}
       $(document).ready(function(){
       	  $('#btnlimpar').click(function(){
       	  	$('div').each(function(i){
       	  		alert(i);
       	  		$(this).css('background','red');
       	  	});
       	});



     /*  $("#tabela-marca tr").click(function () {
          var valor = $.trim($(this).find('td').eq(0).text());
          alert(valor);
       });*/


       });
       
       
       $('#nome').click(function(){
        $this.css('background','#c2e9f1');
       })
       
       $('#btnlimpar').disable='True';
       
       
		</script>
		<br><br><br>
	 <div class="container posicaopainel">
	 	<div class="panel panel-default">
        		<div class="panel-heading">
        			<h3><span class="glyphicon glyphicon-thumbs-up"></span> Gerenciar Cliente</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form" method="post" action="<?php echo base_url("marca/editar")?>">
        				  	<label for="codigoCliente" class="sr-only">Código</label>
        				  	<input type="text" id="idMarca" name="idMarca" value="<?php echo $marca->idMarca; ?>" class="form-control codigo" readonly="readonly"> 
        		
        				   	<label for="nome">Marca:</label>
        				   	<div class="input-group textos">
								<input type="text" id="marca" name="marca" value= "<?php echo $marca->marca; ?>" class="form-control" placeholder="Nome Marca" required autofocus >
									<span class="glyphicon glyphicon-search input-group-addon btn" onclick="fBusca()"></span>
							</div>
                            <label for="nome">Marca:</label>
                            <div class="input-group textos">
                                <?php 
									echo form_dropdown('flagAtivo', array('0' => 'Inativo', '1' => 'Ativo'), $marca->flagAtivo);
 								?>
                            	
                            	
                            	
                                <!--<select name="flagAtivo">
                                    <?php if( $marca->flagAtivo == "1"): ?>
                                        <option value="<?php echo $marca->flagAtivo; ?>">Ativo<option>
                                        <option value="0">Inativo<option>
                                    <?php endif; ?>
                                    <?php if ($marca->flagAtivo == "0"): ?>

                                        <option value="<?php echo $marca->flagAtivo; ?>">Inativo<option>
                                        <option value="1">Ativo<option>
                                    <?php endif; ?>
                                </select>-->
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
        				<?php //echo $marcas; ?>
        				<div class="table-responsive tabelas">
        				<table class="table table-bordered table-hover" id="tabela-marca">
        					<thead>
        						<tr>
        							<th># </th>
                                    <th>Marca</th>
        							<th></th>
        						</tr>
        					</thead>
        					 <tbody>
                            <?php 
                                foreach($marcas as $row):
                            ?>
								<tr>
									<td><?php echo $row->idMarca;?></td>
									<td><?php echo $row->marca;?></td>
									 <td><a class="glyphicon glyphicon-pencil btn" href="<?php echo base_url('administrador/marca/editar/'); echo "/". $row->idMarca;?>"></a> &nbsp;&nbsp;
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
</html>