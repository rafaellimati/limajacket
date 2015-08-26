
  <!-- Main -->
  <div id="main">
    <div class="cl">&nbsp;</div>
    <!-- Content -->
    <div id="content">
      <!-- Content Slider -->
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
      <!-- End Content Slider -->
      <!-- Products -->
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
      <!-- End Products -->
    </div>
    <!-- End Content -->
    <!-- Sidebar -->
    <div id="sidebar">
      <!-- Search -->
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
      <!-- End Search -->
      <!-- Categories -->
      <div class="box categories">
        <h2>Categorias <span></span></h2>
        <div class="box-content">
          <ul>
          <?php 
            foreach ($categorias as $categoria):
          ?>
            <li><a href="<?php echo base_url("Principal/categoria"); ?>"><?php echo $categoria->categoria ?></a></li>

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
            <li class="last"><a href="#">Hard Rock Café</a></li> -->
          </ul>
        </div>
      </div>
      <!-- End Categories -->
    </div>
    <!-- End Sidebar -->
    <div class="cl">&nbsp;</div>
  </div>