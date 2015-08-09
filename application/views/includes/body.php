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
       		<a href="#" class="navbar-brand">Projeto Placas</a>
	       	</div>
	       	<div id="navbar" class="navbar-collapse collapse">
	       		<ul class="nav navbar-nav">
	       		<li><a href="gerenciarCliente.php">Clientes</a></li>
	       		<li><a href="gerenciarPlacas.php">Placas</a></li>
	       		<li><a href= "gerenciarEncomendas.php">Encomendas</a></li>
	       		<li><a href="gerarrecibo.php">Recibos</a></li>
	       		<li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="true">Relatorios<span class="caret"> </span></a>
	       			<ul class="dropdown-menu" role="menu">
	       				<li><a href="relatorioCliente.php">Cliente</a></li>
	       				<li><a href="relatorioPlacas.php">Placas</a></li>
	       				<li><a href="relatorioFrase.php">Frase</a></li>
	       				<li class="divider"> </li>
	       				<li class="dropdown-header">Período</li>
	       				<li><a href="relatorioPorMes.html">Por Mes</a></li>
	       				<li><a href="relatorioPorAno.html">Por Ano</a></li>
	       			</ul> 
	       		</li>
	       		</ul>
	       		<ul class="nav navbar-nav navbar-right">
	       			<li> <a href="#" ><?//=$_COOKIE["login"]?> </a> </li>
	       			<li> <a href="logout.php">Sair </a> </li>
	       			<li> <a href="#"><span class="glyphicon glyphicon-search" area-hidden="true"> </span></a></li>
	       		</ul>
	       		
	       	</div>
       	</div>
       </nav>
        <div class="container posicaopainel">
