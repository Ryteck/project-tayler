<?php

?>
<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CONFIGURAÇÕES</title>
    <link rel="stylesheet" type="text/css" href="../../css/custom.css">
    <link rel="stylesheet" type="text/css" href="../../css/materialize.css">
    <link rel = "shortcut icon" type = "imagem/x-icon" href = "../../img/ico.ico"/>

</head>

<body>

	<nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Termos e condiçoes</a>
	      	<ul id="nav-mobile" class="right hide-on-med-and-down">
		        <li><a href="home.php">Home</a></li>
		        <li class="active"><a href="termos.php">Termos</a></li>
	      	</ul>
	      	<ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><button href="#" data-target="slide-out" class="sidenav-trigger waves-effect waves-light btn">Perfil</button></li>
          </ul>
	    </div>
	</nav>

<br><br>

	<div class="container">

	<ul id="slide-out" class="sidenav">
    <li><div class="user-view">
      <div class="background">
        <img src="../img/wall.png">
      </div>
      <a href="#user"><img class="circle" src="../img/camara_secetra.jpg"></a>
      <a href="#name"><span class="white-text name">John Doe</span></a>
      <a href="#email"><span class="white-text email">jdandturk@gmail.com</span></a>
    </div></li>
    <li><a href="#!"><i class="material-icons">cloud</i>First Link With Icon</a></li>
    <li><a href="#!">Second Link</a></li>
    <li><div class="divider"></div></li>
    <li><a class="subheader">Subheader</a></li>
    <li><a class="waves-effect" href="#!">Third Link With Waves</a></li>
  </ul>

	</div>

<div class="container">

<div class="card-panel  blue-grey darken-4">


<!-- Conteudo aqui -->

<center style='color: #ffffff'><h5><strong>O site está incompleto ainda</h5></strong></center>

</div>

  </div>

<script type="text/javascript" src="../js/jquery.js"></script>


  <script type="text/javascript" src="../js/materialize.js"></script>

  <script>

    $(document).ready(function(){
    $('.sidenav').sidenav();
  });

  </script>

</body>

</html>
