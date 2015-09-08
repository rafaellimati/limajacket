   <section id="cart_items">
		<div class="container">
		<br><br><br><br>
			<div class="review-payment">
				<h2>Registro de Compras</h2>
			</div>
		<form action="<?php echo base_url("pedido/atualizar"); ?>" method="post">
			<div class="table-responsive cart_info">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Quantidade</td>
							<td class="description">Descrição</td>
							<td class="price">Preço</td>
						<!--	<td class="quantity">item</td>-->
							<td class="total">Total</td>
							<td></td>
						</tr>
					</thead>
					<tbody>
						<tr>
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
								</tr>
								<?php 
								$i++; 
								endforeach;
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

					<!--	<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/two.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Jaqueta</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
						
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
		
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
			
							</td>
						</tr>
						<tr>
							<td class="cart_product">
								<a href=""><img src="images/cart/three.png" alt=""></a>
							</td>
							<td class="cart_description">
								<h4><a href="">Jaqueta</a></h4>
								<p>Web ID: 1089772</p>
							</td>
							<td class="cart_price">
								<p>$59</p>
							</td>
							<td class="cart_quantity">
								<div class="cart_quantity_button">
						
									<input class="cart_quantity_input" type="text" name="quantity" value="1" autocomplete="off" size="2">
				
								</div>
							</td>
							<td class="cart_total">
								<p class="cart_total_price">$59</p>
							</td>
							<td class="cart_delete">
			
							</td>
						</tr>
						<tr>
							<td colspan="4">&nbsp;</td>
							<td colspan="2">
								<table class="table table-condensed total-result">
									<tr>
										<td>Sub Total</td>
										<td>$59</td>
									</tr>
									<tr>
										<td>Total Item</td>
										<td>2</td>
									</tr>
									<tr class="shipping-cost">
										<td>Frete</td>
										<td>Free</td>										
									</tr>
									<tr>
										<td>Total</td>
										<td><span>$61</span></td>
									</tr>
								</table>
							</td>
						</tr>-->
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
    <p class="left"> <a href="#">Inicio</a> <span>|</span> <a href="#">Contato</a> <span>|</span> <a href="#">Minha Conta</a> <span>|</span> <a href="#">Galeria</a> <span>|</span> <a href="#"> Trabalhe Conosco </a> </p>
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
