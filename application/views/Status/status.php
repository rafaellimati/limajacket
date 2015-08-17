<script type="text/javascript">
		function  fBusca(){
			busca=document.getElementById('nome').value;
			url="gerenciarcliente.php?nomeCliente="+busca;
			window.location=url;
			}
						/*jQuery(document).ready(function() {
            //Inicio Mascara Telefone
            jQuery('input[type=tel]').mask("(99) 9999-9999?9").ready(function(event) {
                var target, phone, element;
                target = (event.currentTarget) ? event.currentTarget : event.srcElement;
                phone = target.value.replace(/\D/g, '');
                element = $(target);
                element.unmask();
                if(phone.length > 10) {
                    element.mask("(99) 99999-999?9");
                } else {
                    element.mask("(99) 9999-9999?9");
                }
            });
            //Fim Mascara Telefone
            //Inicio Mascara RG
            //jQuery("#rg").mask("99.999.999-*");
            //Fim Mascara CPF
            //Inicio Mascara CPF
            //jQuery("#cpf").mask("999.999.999-99");
            //Fim Mascara CPF
        });
        (jQuery);/*/



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
        			<h3><span class="glyphicon glyphicon-thumbs-up"></span> Gerenciar Status</h3>
        		</div>
        		<div class="panel-body">
        			<div class="container">
        				<form class="form" role="form" method="post" action="<?php echo base_url("status/cadastrar")?>">
        				  	<label for="codigoCliente" class="sr-only">Código</label>
        				  	<input type="text" id="" name="" value="" class="form-control codigo" readonly="readonly"> 
        		
        				   	<label for="nome">Status:</label>
        				   	<div class="input-group textos">
								<input type="text" id="descricao" name="descricao" value= "" class="form-control" placeholder="Digite o tamanho" required autofocus >
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
        				<?php //echo $marcas; ?>
        				<div class="table-responsive tabelas">
        				<table class="table table-bordered table-hover" id="tabela-marca">
        					<thead>
        						<tr>
        							<th># </th>
                                    <th>Status</th>
        							<th></th>
        						</tr>
        					</thead>
        					 <tbody>
                            <?php 
                                foreach($Descricao as $row):
                            ?>
								<tr>
									<td><?php echo $row->idStatus;?></td>
									<td><?php echo $row->descricao;?></td>
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