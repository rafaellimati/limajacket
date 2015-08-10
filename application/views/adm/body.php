<body>
	<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
       	<div class="container">
       		<div class="navbar-header">
       		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" area-controls="navbar">
       			<span clas="sr-only">Toggle Navigation</span>
       			<span class="icon-bar"> </span>
       			<span class="icon-bar"> </span>
       			<span class="icon-bar"> </span> 
       		</button>
       		<a href="#" class="navbar-brand">Administrativo</a>
	       	</div>
	       	<div id="navbar" class="navbar-collapse collapse">
	       		<ul class="nav navbar-nav">
	       		<li><a href="<?php echo base_url("administrador/marca") ?>">Marca</a></li>
	       		<li><a href="<?php echo base_url("administrador/usuario") ?>">Usuários</a></li>
	       		<li><a href= "<?php echo base_url("administrador/jaqueta") ?>">Jaqueta</a></li>
	       		<li><a href="<?php echo base_url("administrador/estoque") ?>">Estoque</a></li>
	       		<li><a href="#">Pedidos</a></li>
	       		<li><a href="#">Recibos</a></li>
	       		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Relatorios<span class="caret"> </span></a>
	       			<ul class="dropdown-menu" role="menu">
	       				<li><a href="#">Cliente</a></li>
	       				<li><a href="#">Placas</a></li>
	       				<li><a href="#">Frase</a></li>
	       				<li class="divider"> </li>
	       				<li class="dropdown-header">Período</li>
	       				<li><a href="#">Por Mes</a></li>
	       				<li><a href="#">Por Ano</a></li>
	       			</ul> 
	       		</li>
	       		</ul>
	       		<ul class="nav navbar-nav navbar-right">
	       			<li> <a href="#" ><?php echo $this->session->userdata('login'); ?> </a> </li>
	       			<li> <a href="<?php echo base_url('administrador/logout') ?>">Sair </a> </li>
	       			<li> <a href="#"><span class="glyphicon glyphicon-search" area-hidden="true"> </span></a></li>
	       		</ul>
	       		
	       	</div>
       	</div>
       </nav>
        <div class="container posicaopainel">
