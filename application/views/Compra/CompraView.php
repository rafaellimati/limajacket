
    <section>
		<div class="container">
			<div class="row">
			<br><br><br><br><br>
				<div class="col-sm-9 padding-right:70px;">
					<div class="product-details">
						<!--product-details-->
						<div class="col-sm-5">
							<div class="view-product">
								<img width="231" height="383" src="<?php echo base_url("produtos/$item->imagem"); ?>"  alt="" />
							</div>
							<div id="similar-product" class="carousel slide" data-ride="carousel">
							</div>
						</div>
						<div class="col-sm-7">
							<div class="product-information">
								 <!--/product-information-->
								 <form action="<?php echo base_url("pedido/adicionar_item"); ?>" method="post">
								<h2><?php echo $item->jaqueta ?></h2>
								<p>Descrição:<?php echo $item->detalhes ?></p>
								<span>
									<span><?php echo "R$ ". number_format($item->valor,2,",",".") ?></span>
									<form method="post"  action = "<?php echo base_url("pedido/adicionar_item") ?>" >
									<label> Quantidade: </label>
									<input name="quantidade" id="quantidade" type="text" value="1" />
									<input name="idJaqueta" type="hidden" value="<?php echo $item->idJaqueta ?>"/>
									<input name="nome" type="hidden" value="<?php echo $item->jaqueta ?>"/>
									<input name="valor" type="hidden" value="<?php echo $item->valor ?>"/>
									<button type="button-submit" class="btn btn-fefault cart">
											    
									     Comprar 
									     
									</button>
								</span>
								<p><b>Tamanho </b> <?php echo $item->tamanho ?></p>
								<p><b>Cor</b> <?php echo $item->cor ?></p>
								
							  <!--/product-information-->
							  	
							</div>
						</div>
					</div>
					
					<!--/product-details-->
					
					<div class="recommended_items">
						
						<!--recommended_items-->
						
						<h2 class="title text-center">recommended items</h2>
						
						<div data-ride="carousel">
							<div class="carousel-inner">
								<div class="item active">	
									<div class="col-sm-4">
										
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url("static/css/images/small1.jpg"); ?>" alt="" />
													<h2>$90</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url("static/css/images/small2.jpg"); ?>" alt="" />
													<h2>R$80</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
									<div class="col-sm-4">
										<div class="product-image-wrapper">
											<div class="single-products">
												<div class="productinfo text-center">
													<img src="<?php echo base_url("static/css/images/small3.jpg"); ?>" alt="" />
													<h2>$56</h2>
													<p>Easy Polo Black Edition</p>
													<button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<!--/recommended_items-->
					
				</div>
			</div>
		</div>
		
  <!--Footer--> 
  
  <div id="footer">
    <p class="left"> <a href="Principal">Inicio</a> <span>|</span> <a href="#">Contato</a> <span>|</span> <a href="Pedido">Minha Conta</a> <span>|</span> <a href="Categoria">Galeria</a> <span>|</span> <a href="#"> Trabalhe Conosco </a> </p>
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
  