<body>
<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
    <h1 id="logo"><a href="<?php echo base_url("Principal")?>" >Lima Jacket</a></h1>
    <!-- Cart -->
    <div id="cart"> <a href="<?php echo base_url("Pedido")?>" class="cart-link">Carrinho</a>
      <div class="cl">&nbsp;</div>
      <?php 	if($this->cart->total_items()>0): ?>
      <span> Produto(s): <strong><?php echo $this->cart->total_items() ?></strong></span> &nbsp;&nbsp; </div>
      <?php else:  ?>
      <span> Produto: <strong>0</strong></span> &nbsp;&nbsp; </div>
		<?php endif;  ?>
	  	
    <!-- End Cart -->
    <!-- Navigation -->
    <div id="navigation">
      <ul>
        <li><a href="<?php echo base_url("Principal")?>" class="active">Inicio</a></li>
        <li><a href="<?php echo base_url("Categoria")?>">Compras</a></li>
        <li><a href="<?php echo base_url("Pedido")?>">Pedidos</a></li>
        <li><a href="<?php echo base_url("login")?>">Login</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </div>
    <!-- End Navigation -->
  </div>