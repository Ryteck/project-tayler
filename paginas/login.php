<?php
include '../cconexao/Conexao.php';

?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Logar</title>
    <link rel="stylesheet" type="text/css" href="../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../css/materialize.css">
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "../img/ico.ico"/>

</head>

<body>

	<nav>
	    <div class="nav-wrapper">
	      	<a href="#" class="brand-logo">Project  TAYLER</a>
	      	<ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="home.php">Home</a></li>
            <li class="active"><a href="login.php">Logar</a></li>
		        <li><a href="cadastrar.php">Cadastrar</a></li>
		        <li><a href="termos.php">Termos</a></li>
	      	</ul>
	    </div>
	</nav>

	<br><br>

	<div class="container">

	<br><br>

		<div class="row">


		    	<div class="card-panel  blue-grey darken-4 opaca">

				<div class="row">

				    <form class="col s12">

				      	<div class="row">
					        <div class="input-field col s12">
						        <input id="login" type="text" class="validate" style='color: #ffffff' required>
						        <label for="login">Login</label>
					        </div>
				      	</div>
					    <div class="row">
					        <div class="input-field col s12">
						        <input id="password" type="password" class="validate" style='color: #ffffff' required>
						        <label for="password">Senha</label>
					        </div>
				      	</div>
				      	<div class="row">
				      	<div class="switch">
				      		<label>Manter conectado?</label>
				      		<br><br>
						    <label>
						    Não
						    <input type="checkbox">
						    <span class="lever"></span>
						    Sim
						    </label>
					  	</div>
					  	</div>
					  	<br><br>
					  	<div class="row">
					  		<button class="btn waves-effect waves-light" type="submit" name="action">
					  			Enviar
  							</button>
  							<button class="btn waves-effect waves-light" type="reset" name="action">
					  			Redefinir
  							</button>
					  	</div>
				    </form>

		    </div>


		</div>

	</div>

<script type="text/javascript" src="../js/jquery.js"></script>


<script type="text/javascript" src="../js/materialize.js"></script>

<script>



</script>

</body>

</html>