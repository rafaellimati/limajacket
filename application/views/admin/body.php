<body>
	<nav class="navbar navbar-default" role="navigation">
       	<div class="container">
       		<div class="navbar-header">
       		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" area-controls="navbar">
       			<span clas="sr-only">Toggle Navigation</span>
       			<span class="icon-bar"> </span>
       			<span class="icon-bar"> </span>
       			<span class="icon-bar"> </span> 
       		</button>
	       	</div>
	       	<div id="navbar" class="nav nav-tabs">
	       		<ul class="nav navbar-nav">
	       		<li role="presentation" class="active"><a href="<?php echo base_url("admin") ?>">Administrativo</a></li>
	       		<li role="presentation" ><a href="<?php echo base_url("admin/usuario") ?>">Gerenciar Admin</a></li>
	       		<li role="presentation" ><a href="<?php echo base_url("admin/marca") ?>">Marca</a></li>
	       		<li role="presentation" ><a href="<?php echo base_url("admin/Tamanho") ?>" >Tamanho</a></li>
	       		<li role="presentation" ><a href="<?php echo base_url("admin/Cor") ?>">Cor</a></li>
	       		<li role="presentation" ><a href="<?php echo base_url("admin/categoria") ?>">Categoria</a></li>
	       		<li role="presentation" ><a href="<?php echo base_url("admin/jaqueta") ?>"> Jaqueta</a></li>
	       		<li role="presentation" ><a href="<?php echo base_url("admin/Estoque") ?>"> Estoque</a></li>
	       		</li>
	       		</ul>
	       		<ul class="nav navbar-nav navbar-right">
	       			<li> <a href="#" ><span class="glyphicon glyphicon-user"></span>  <?php echo $this->session->userdata('login'); ?> </a> </li>
	       			<li> <a href="<?php echo base_url('admin/login/logout') ?>"><span class="glyphicon glyphicon-off"></span> Sair </a> </li>
	       		</ul>
	       		
	       	</div>
       	</div>
       </nav>
        <div class="container posicaopainel">
