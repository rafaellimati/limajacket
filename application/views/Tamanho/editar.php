<?php 

//Pega o seguimento 4 da url
$idTamanho = $this->uri->segment(4);

if($idTamanho == null) redirect('admin/Tamanho');

$tamanho = $this->TamanhoModel->getById($idTamanho)->row();

if($this->session->flashdata('edicaook')):
?>
<div style="position: absolute; top: 128px;">
    <script>
        setTimeout(function(){
            $('#tamanhoSucessoEditar').fadeOut(3000);
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
	 	<div class="panel panel-primary">
        		<div class="panel-heading">
        			<h3><span class="glyphicon glyphicon-resize-full"></span> Gerenciar Tamanho</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form" method="post" action="<?php echo base_url("admin/tamanho/editar")?>">
        				  	<br><div class="input-group" style="width:200px;">
                                <span class="input-group-addon glyphicon glyphicon-asterisk" id="basic-addon1"></span>
        				  	<input type="text" id="idTamanho" name="idTamanho" value="<?php echo $tamanho->idTamanho; ?>" class="form-control codigo" readonly="readonly"> 
        					</div><br>
        				   	<label for="nome">Tamanho:</label>
        				   	<div class="input-group textos">
								<input type="text" id="tamanho" name="tamanho" value= "<?php echo $tamanho->tamanho; ?>" class="form-control" placeholder="Nome Cor" required autofocus >
							</div><br>
                            <label for="nome">Tamanho:</label>
                            <div class="input-group textos">
                                <?php 
									echo form_dropdown('flagAtivo', array('0' => 'Inativo', '1' => 'Ativo'), $tamanho->flagAtivo);
 								?>
                            </div>
                            <br><br>
        				   <button  type="submit" class="btn btn-lg btn-primary" >Alterar</button>
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
                                foreach($Tamanhos as $row):
                            ?>
								<tr>
									<td><?php echo $row->idTamanho;?></td>
									<td><?php echo $row->tamanho;?></td>
									 <td><a class="glyphicon glyphicon-pencil btn" href="<?php echo base_url('admin/Tamanho/editar/'); echo "/". $row->idTamanho;?>"></a> &nbsp;&nbsp;
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