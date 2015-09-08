<body>
<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
    <h1 id="logo"><a href="Principal">Lima Jacket</a></h1>
    <!-- Cart -->
    <div id="cart"> <a href="Pedido" class="cart-link">Carrinho</a>
      <div class="cl">&nbsp;</div>
      <?php 	if($this->cart->total_items()>0): ?>
      <span> Produto: <strong><?php echo $this->cart->total_items() ?></strong></span> &nbsp;&nbsp; </div>
      <?php else:  ?>
      <span> Produto: <strong>0</strong></span> &nbsp;&nbsp; </div>
		<?php endif;  ?>
	  	
    <!-- End Cart -->
    <!-- Navigation -->
    <div id="navigation">
      <ul>
        <li><a href="Principal" class="active">Inicio</a></li>
        <li><a href="Categoria">Compras</a></li>
        <li><a href="Pedido">Pedidos</a></li>
        <li><a href="login">Login</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </div>
    <!-- End Navigation -->
  </div>