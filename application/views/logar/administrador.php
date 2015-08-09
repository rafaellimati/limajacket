<html xmlns="http://www.w3.org/1999/xhtml" lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>index</title>
		<meta name="author" content="Aluno" />
		<!-- Date: 2014-11-20 -->
		<link type="text/css" href="<?php echo base_url("static/css/bootstrap.css")?>" rel="stylesheet" media="screen">
	</head>
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
		       		<a href="#" class="navbar-brand">LIMA JACKET</a>
		       	</div>
		    </div>
		</nav>
		<div class="container" style="width:260px;margin-top:150px;">
			<form class="form-signin" role="form" method="post" action="validarLogin.php">
				<h2 class="form-signin-heading">Login</h2>
				<label for="email" class="sr-only">E-Mail</label>
				<input type="email" id="email" name="email" class="form-control" placeholder="Digite seu Email" required autofocus><br>
				<label for="Senha" >Senha:</label>
				<input type="Password" id="senha" name="senha" class="form-control" placeholder="Senha" required><br>
				<label for="Senha" >Repita Senha:</label>
				<input type="Password" id="senha" name="senha" class="form-control" placeholder="Senha" required>
				<div class="checkbox" ><br>
				</div>
				 <button type="submit" class="btn btn-lg btn-primary btn-block">ENTRAR</button>
			</form>
			<h1></h1>

			<div class= "alert aler-danger" role="alert">
				<div class="alert aler-danger" role="alert"></div>
		</div>

	       
	</body>
</html>