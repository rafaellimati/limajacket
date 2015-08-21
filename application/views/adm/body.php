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
	       		<li role="presentation" class="active"><a href="#">Administrativo</a></li>
	       		<li role="presentation" ><a href="<?php echo base_url("administrador/marca") ?>">Marca</a></li>
	       		<li role="presentation" ><a href="<?php echo base_url("administrador/usuario") ?>">Usuários</a></li>
	       		<li role="presentation" ><a href= "<?php echo base_url("administrador/jaqueta") ?>">Jaqueta</a></li>
	       		<li role="presentation" ><a href="<?php echo base_url("administrador/Cor") ?>">Cor</a></li>
	       		<li role="presentation" ><a href="<?php echo base_url("administrador/Tamanho") ?>">Tamanho</a></li>
	       		<li role="presentation" ><a href="<?php echo base_url("administrador/Status") ?>"> Status</a></li>
	       		<li role="presentation" ><a href="<?php echo base_url("administrador/Estoque") ?>"> Estoque</a></li>
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
