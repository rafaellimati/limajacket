   <section id="cart_items">
		<div class="container">
		<br><br><br><br>
			<div class="review-payment">
				<h2>Registro de Compras</h2>
			</div>
		<?php if($this->session->flashdata('disponivel')): ?>
			<script>
				setTimeout(function(){
					$('#disponivel').fadeOut(3000);
				}, 4000);
			</script>
			<div id="disponivel">
				<font color="#FC5555"><?php echo $this->session->flashdata('disponivel'); ?></font>
			</div>
		<?php endif; ?>	
		
		<!--Jquery com a mensagem de disponivel do produto -->
		
		<form action="<?php echo base_url("pedido/atualizar"); ?>" method="post">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Quantidade</td>
							<td class="description">Descrição</td>
							<td class="price">Preço</td>
							<td class="total">Total</td>
							<td></td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr><!-- O i é um contador toda vez que um registro for feito será adicionado na tabela
							a contents é o metodo dos carrinho atualizar e update $items é o apelido dos objetos que estão vindo
							echo form_hidden é o formulario que vem da view compra com todos dados do item que vai pra carrinho 
							no parentes ele diz ( toda vez que um registro i vier armazene um objeto de array item)
							embaixo temos o resto dos objetos sendo preenchidos e no remover temos um jaquery pra deletar o registro-->

								<?php 
								
									$i = 1;
									foreach ($this->cart->contents() as $items): 
									echo form_hidden($i . '[rowid]', $items['rowid']); 
								?>
								<tr>
								  <td><?php echo form_input(array('name' => $i . '[qty]', 'value' => $items['qty'], 'maxlength' => '3', 'size' => '5')); ?></td>
								  <td><?php echo $items['name']; ?></td>
								  <td>R$ <?php echo number_format($items['price'],2,",","."); ?></td>
								  <td>R$ <?php echo number_format($items['subtotal'],2,",","."); ?></td>
								  <td><button type="submit" onclick="remover_item('<?php echo $i; ?>[qty]')">Remover</button></td>
								</tr>
								<?php 
								$i++; 
								endforeach;
								//ao efetuar this->cart->total, chamamos uma função que faz o calculo total automatico.
								//na ultima parte temos o formulario com um botão alterar que está interligado com a controller
								
								?>
								<tr>
								  <td colspan="2">&nbsp;</td>
								  <th>Total</th>
								  <td>R$ <?php echo number_format($this->cart->total(),2,",","."); ?></td>
								</tr>
							</tbody>
						</table>
						<p class='btn'>
							<?php 
								$data = array(
									'name'=> '',
									'value' => 'Alterar Carrinho',
									'class' => 'btn btn-default'
									);
								echo form_submit($data); 
								echo form_close();
							?>
						</p>
						</tr>
					</tbody>
				</table>
			</form>
			</div>
			<div class="payment-options">
					<span>
						<label><a href="<?php echo base_url();?>"> Continuar Comprando </a></label>
					</span>
					<span>
						<label><a href="<?php echo base_url(); ?>"> Menu Principal</a></label>
					</span>
					<span>
						<label><a class="btn btn-primary" href="<?php echo base_url("pagamento")?>"> Confirmar Compra</a></label>
					</span>
				</div>
		</div>
	</section>
	 <!--/#cart_items--> 
  <!--Footer--> 
  <div id="footer">
    <!--<p class="left"> <a href="Principal">Inicio</a> <span>|</span> <a href="#">Contato</a> <span>|</span> <a href="Pedido">Minha Conta</a> <span>|</span> <a href="categoria">Galeria</a> <span>|</span> <a href="#"> Trabalhe Conosco</a> </p></span>-->
    <p class="right"> &copy; 2015 LimaJacket. Ltda </p>
  </div>
  </div>
  <!-- End Footer -->
  		<link href="<?php echo base_url("static/css/bootstrap.minn.css"); ?>"  rel="stylesheet">
		<link href="<?php echo base_url("static/css/font-awesome.min.css"); ?>" rel="stylesheet">
		<link href="<?php echo base_url("static/css/prettyPhoto.css"); ?>" rel="stylesheet">
		<link href="<?php echo base_url("static/css/price-range.css"); ?>" rel="stylesheet">
		<link href="<?php echo base_url("static/css/animate.css"); ?>" rel="stylesheet">
		<link href="<?php echo base_url("static/css/main.css"); ?>" rel="stylesheet">
		<link href="<?php echo base_url("static/css/responsive.css"); ?>" rel="stylesheet">
		<script src="<?php echo base_url("static/js/jquery.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/price-range.js"); ?>"></script>
    	<script src="<?php echo base_url("static/js/jquery.scrollUp.min.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/bootstrap.min.js"); ?>"></script>
    	<script src="<?php echo base_url("static/js/jquery.prettyPhoto.js"); ?>"></script>
    	<script src="<?php echo base_url("static/js/main.js"); ?>"></script>
    	<script src="<?php echo base_url("static/js/jquery.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/price-range.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/jquery.scrollUp.min.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/bootstrap.minn.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/jquery.prettyPhoto.js"); ?>"></script>
		<script src="<?php echo base_url("static/js/main.js"); ?>"></script>


		<script type="text/javascript">
		
		function remover_item(item_name) {
			$("[name='"+ item_name +"']").val("0");
		}
			
		</script>