<?php
include '../cconexao/Conexao.php';

?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>PROJECT TAYLER</title>
  <link rel="stylesheet" type="text/css" href="../css/custom.css">
  <link rel="stylesheet" type="text/css" href="../css/style.css">
  <link rel="stylesheet" type="text/css" href="../css/materialize.css">
  <link rel="shortcut icon" type="imagem/x-icon" href="../img/ico.ico" />

</head>

<body>

  <nav class="nav-extended">
    <div class="nav-wrapper">
      <a href="#" class="brand-logo center">Project TAYLER</a>
      <ul id="nav-mobile" class="right hide-on-med-and-down">
        <li class="active"><a href="home.php">Home</a></li>
        <li><a href="termos.php">Termos</a></li>
      </ul>
      <ul id="nav-mobile" class="left hide-on-med-and-down">
            <li><button href="#" data-target="slide-out" class="sidenav-trigger waves-effect waves-light btn">Logar</button></li>
          </ul>
    </div>
  </nav>

  <br><br>

  <div class="container">

    <ul id="slide-out" class="sidenav">

      <div style="margin: 0;
                  padding: 0;
                  background-image: url(../img/wall2.png);
                  background-repeat: no-repeat;
                  background-position: right top;
                  background-attachment: fixed;
                  background-size: cover;
                  width: 100%; height: 99%;">

<div class="row opaca">


          <div class="card-panel  blue-grey darken-4">

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

      <div class="card-panel  blue-grey darken-4">

<div class="row branco">

Sem conta? <br><br> Clique no botão <br> abaixo para cadastrar:<br><br>
    
      <a href="cadastrar.php"><button type="button" class="btn">Cadastrar</button></a>

</div>

    </div>

  </div>

</div>

  </ul>

    <span class="apres1">Bem vindo ao</span>
    <br>
    <span class="apres2">Projeto Tayler</span>

    <br><br>

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