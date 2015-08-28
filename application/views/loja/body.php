<body>
<!-- Shell -->
<div class="shell">
  <!-- Header -->
  <div id="header">
    <h1 id="logo"><a href="#">Lima Jacket</a></h1>
    <!-- Cart -->
    <div id="cart"> <a href="#" class="cart-link">Carrinho</a>
      <div class="cl">&nbsp;</div>
      <span>Produto: <strong>4</strong></span> &nbsp;&nbsp; <span>Custo: <strong>$250.99</strong></span> </div>
    <!-- End Cart -->
    <!-- Navigation -->
    <div id="navigation">
      <ul>
        <li><a href="#" class="active">Home</a></li>
        <li><a href="#">Compras</a></li>
        <li><a href="#">Pedidos</a></li>
        <li><a href="#">Quem somos</a></li>
        <li><a href="#">Contato</a></li>
      </ul>
    </div>
    <!-- End Navigation -->
  </div>
  <!-- End Header -->
  <!-- Main -->
 <!-- <div id="main">
    <div class="cl">&nbsp;</div>
       Content
    <div id="content">
        Content Slider
      <div id="slider" class="box">
        <div id="slider-holder">
          <ul>
            <li><a href="#"><img src="<?php echo base_url("static/css/images/slide1.jpg"); ?>" alt="" /></a></li>
            <li><a href="#"><img src="<?php echo base_url("static/css/images/slide1.jpg"); ?>" alt="" /></a></li>
            <li><a href="#"><img src="<?php echo base_url("static/css/images/slide1.jpg"); ?>" alt="" /></a></li>
            <li><a href="#"><img src="<?php echo base_url("static/css/images/slide1.jpg"); ?>" alt="" /></a></li>
          </ul>
        </div>
        <div id="slider-nav"> <a href="#" class="active">1</a> <a href="#">2</a> <a href="#">3</a> <a href="#">4</a> </div>
      </div>
       End Content Slider 
      <!-- Products
      <div class="products">
        <div class="cl">&nbsp;</div>
        <ul>
          <li> <a href="#"><img src="<?php echo base_url("static/css/images/big1.jpg"); ?>" alt="" /></a>
            <div class="product-info">
              <h3>Jaqueta Inverno</h3>
              <div class="product-desc">
                <h4>Homem</h4>
                <p>Lorem ipsum dolor sit<br />
                  amet</p>
                <strong class="price">$58.99</strong> </div>
            </div>
          </li>
          <li> <a href="#"><img src="<?php echo base_url("static/css/images/big1.jpg"); ?>" alt="" /></a>
            <div class="product-info">
              <h3>LOREM IPSUM</h3>
              <div class="product-desc">
                <h4>WOMEN’S</h4>
                <p>Lorem ipsum dolor sit<br />
                  amet</p>
                <strong class="price">$58.99</strong> </div>
            </div>
          </li>
          <li class="last"> <a href="#"><img src="<?php echo base_url("static/css/images/big1.jpg"); ?>" alt="" /></a>
            <div class="product-info">
              <h3>LOREM IPSUM</h3>
              <div class="product-desc">
                <h4>WOMEN’S</h4>
                <p>Lorem ipsum dolor sit<br />
                  amet</p>
                <strong class="price">$58.99</strong> </div>
            </div>
          </li>
        </ul>
        <div class="cl">&nbsp;</div>
      </div>
      <!-- End Products 
    </div>
    <!-- End Content 
    <!-- Sidebar 
    <div id="sidebar">
      <!-- Search 
      <div class="box search">
        <h2>Procurar <span></span></h2>
        <div class="box-content">
          <form action="#" method="post">
            <label>Escolha</label>
            <input type="text" class="field" />
            <label>Categoria</label>
            <select class="field">
              <option value="">-- Selecione Categoria --</option>
            </select>
            <div class="inline-field">
              <label>Preço</label>
              <select class="field small-field">
                <option value="">$10</option>
              </select>
              <label>to:</label>
              <select class="field small-field">
                <option value="">$50</option>
              </select>
            </div>
            <input type="submit" class="search-submit" value="Search" />
            <p> <a href="#" class="bul">Procure</a><br />
              <a href="#" class="bul">Contact Customer Support</a> </p>
          </form>
        </div>
      </div>
      <!-- End Search 
      <!-- Categories 
      <div class="box categories">
        <h2>Categorias <span></span></h2>
        <div class="box-content">
          <ul>
          <?php 
            foreach ($Categorias as $categoria):
          ?>
            <li><a href="#"><?php echo $Categorias->categoria ?></a></li>

          <?php 
            endforeach;
          ?>
            <!-- <li><a href="#">Internacional</a></li>
            <li><a href="#">Inverno Intenso</a></li>
            <li><a href="#">Moletom</a></li>
            <li><a href="#">Sertanejo</a></li>
            <li><a href="#">Rock</a></li>
            <li><a href="#">Motoqueiro</a></li>
            <li><a href="#">Motociclista</a></li>
            <li><a href="#">Couro sintetico</a></li>
            <li><a href="#">Puro Couro</a></li>
            <li><a href="#">Estampada</a></li>
            <li><a href="#">Universitario</a></li>
            <li><a href="#">Hard Core</a></li>
            <li class="last"><a href="#">Hard Rock Café</a></li>
          </ul>
        </div>
      </div>
      <!-- End Categories 
    </div>
    <!-- End Sidebar 
    <div class="cl">&nbsp;</div>
  </div>
  <!-- End Main 
  <!-- Side Full 
  <div class="side-full">
    <!-- More Products 
    <div class="more-products">
      <div class="more-products-holder">
        <ul>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small1.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small2.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small3.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small4.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small5.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small6.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small7.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small1.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small2.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small3.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small4.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small5.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small6.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small7.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small1.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small2.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small3.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small4.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small5.jpg"); ?>" alt="" /></a></li>
          <li><a href="#"><img src="<?php echo base_url("static/css/images/small6.jpg"); ?>" alt="" /></a></li>
          <li class="last"><a href="#"><img src="<?php echo base_url("static/css/images/small7.jpg"); ?>" alt="" /></a></li>
        </ul>
      </div>
      <div class="more-nav"> <a href="#" class="prev">previous</a> <a href="#" class="next">next</a> </div>
    </div>
    <!-- End More Products 
    <!-- Text Cols 
    <div class="cols">
      <div class="cl">&nbsp;</div>
      <div class="col">
        <h3 class="ico ico1">Agende um envio</h3>
        <p>Agende um presente para um amigo, parente ou colega que mora longe.</p>
        <p class="more"><a href="#" class="bul">Clique Aqui</a></p>
      </div>
      <div class="col">
        <h3 class="ico ico2">Entre em Contato</h3>
        <p>Entre em contato conosco e receba no email as mais novas categorias de jaquetas.</p>
        <p class="more"><a href="#" class="bul">Clique aqui para cadastrar seu email</a></p>
      </div>
      <div class="col">
        <h3 class="ico ico3">Envie um Presente</h3>
        <p>Envie um presente para um amigo, parente ou colega que mora longe.</</p>
        <p class="more"><a href="#" class="bul">Clique Aqui</a></p>
      </div>
      <div class="col col-last">
        <h3 class="ico ico4">Carrinho</h3>
        <p>Escolha suas opções de compras sem compromisso, divirta-se.</p>
        <p class="more"><a href="#" class="bul">Clique Aqui</a></p>
      </div>
      <div class="cl">&nbsp;</div>
    </div>
    <!-- End Text Cols
  </div>
  <!-- End Side Full 